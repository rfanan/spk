<?php

class Admin_model extends CI_Model
{
    //alternatif 
    public function getAlternatif()
    {
        return $this->db->get('alternatif')->result_array();
    }

    //ambil alternatif dari id per row
    public function getAlternatifByID($id)
    {
        return $this->db->get_where('alternatif', ['id_alternatif' => $id])->row_array();
    }

    //add
    public function addAlternatif()
    {
        $this->db->trans_start();
        $data = [
            'name_alternatif' => $this->input->post('name_alternatif')
        ];
        $this->db->insert('alternatif', $data);
        $last_id = $this->db->insert_id();
        $data = [
            'id_alternatif' => $last_id,
        ];
        $this->db->insert('rel_alternatif', $data, 'id_kriteria' . 'kriteria', 10);
    }


    //delete
    public function deleteAlternatif($id)
    {
        $id_alternatif = $id;
        $this->db->where('id_alternatif', $id_alternatif);
        $this->db->delete('alternatif');
    }


    public function updateAlternatif()
    {
        $data = [
            'name_alternatif' => $this->input->post('name_alternatif', true)
        ];

        $this->db->where('id_alternatif', $this->input->post('id_alternatif'));
        $this->db->update('alternatif', $data);
    }


    // kriteria
    public function getDataKriteria()
    {
        return $this->db->get('kriteria')->result_array();
    }
    public function getDataKriteriaById($id)
    {
        return $this->db->get_where('kriteria', ['id_kriteria' => $id])->row_array();
    }

    // tambah keriteria
    public function addKriteria()
    {
        $data = [
            'nama_kriteria' => $this->input->post('nama_kriteria'),
            'tipe_kriteria' => $this->input->post('tipe_kriteria'),
            'bobot' => $this->input->post('bobot')
        ];
        $this->db->insert('kriteria', $data);
    }

    //update kriteria
    public function updateKriteria()
    {
        $data = [
            'nama_kriteria' => $this->input->post('nama_kriteria'),
            'tipe_kriteria' => $this->input->post('tipe_kriteria'),
            'bobot' => $this->input->post('bobot')
        ];
        $this->db->where('id_kriteria', $this->input->post('id_kriteria'));
        $this->db->update('kriteria', $data);
    }
    //delete kriteria
    public function deleteKriteria($id)
    {
        $this->db->trans_start();
        $this->db->delete('kriteria', ['id_kriteria' => $id]);
        $this->db->delete('sub_kriteria', ['id_sub_kriteria' => $id]);
        $this->db->trans_complete();
    }
    // end of kriteria

    //start sub kriteria 
    //qury ambil semua get sub kriteria
    public function getSubKriteria()
    {
        return $this->db->get('sub_kriteria')->result_array();
    }
    //join data buat nampilin subkriteria berdasarkan kriterianya
    public function subKriteria($id)
    {
        $this->db->select('*');
        $this->db->from('sub_kriteria');
        $this->db->where('sub_kriteria.id_sub_kriteria', $id);
        $this->db->join('kriteria', 'kriteria.id_kriteria = sub_kriteria.id_sub_kriteria');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function add_sub_kriteria()
    {
        $data = [
            'id_sub_kriteria' => $this->input->post('id_sub_kriteria'),
            'variable' => $this->input->post('variable'),
            'nilai' => $this->input->post('nilai')
        ];
        $this->db->insert('sub_kriteria', $data);
        $this->session->set_flashdata('accept', '<div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Data Sub Kriteria has been Added !
      </div>
    ');
        redirect('admin/sub_kriteria/' . $data['id_sub_kriteria']);
    }

    public function delete_Sub_Kriteria($id)
    {

        $this->db->delete('sub_kriteria', array('id' => $id));
        $this->session->set_flashdata('accept', '<div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Data Sub Kriteria has been deleted !
      </div>
    ');
    }
    public function getSubKriteriaId($id_kriteria)
    {
        return $this->db->get_where('sub_kriteria', ['id_sub_kriteria' => $id_kriteria])->result();
    }

    // penilaian
    public function get_rel_alternatif()
    {
        $this->db->select('*');
        $this->db->from('rel_alternatif');
        $this->db->join('alternatif', 'alternatif.id_alternatif = rel_alternatif.id_alternatif');
        $query = $this->db->get();
        return $query->result_array();
    }
}
