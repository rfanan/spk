<?php
defined('BASEPATH') or exit('No direct script access allowed');


// $id itu buat nampilin data per row atau baris sedangkan yang tanpa ($id) itu buat nampilin semua data makanya ga perlu fi foreach
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('Admin_model');
        $this->load->helper('url', 'spk');
    }

    public function index()
    {
        $data['title'] = 'Admin | Dashboard';
        //sidebar active
        $data['menuActive'] = 'Dashboard';

        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('Admin/index', $data);
        $this->load->view('template/footer');
    }

    public function alternatif()
    {
        $data['title'] = 'Alternatif';

        //sidebar active
        $data['menuActive'] = 'Alternatif';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['alternatif'] = $this->Admin_model->getAlternatif();
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('Admin/alternatif', $data);
        $this->load->view('template/footer');
    }

    public function add_alternatif()
    {
        $data['title'] = 'add alternatif';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();

        //sidebar active
        $data['menuActive'] = 'Alternatif';
        $this->form_validation->set_rules('name_alternatif', 'Name_alternatif', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('Admin/add_alternatif', $data);
            $this->load->view('template/footer');
        } else {
            $this->Admin_model->addAlternatif();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            New data Alternatif added !
          </div>
        ');
            redirect('admin/alternatif');
        }
    }


    public function delete_alternatif($id)
    {
        $this->Admin_model->deleteAlternatif($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('accept', '<div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Data Alternatif has been deleted !
          </div>
        ');
        } else {
            $this->session->set_flashdata('accept', '<div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            New data Alternatif added !
          </div>
        ');
        }
        redirect('admin/alternatif');
    }


    public function update_alternatif($id)
    {
        $data['title'] = 'add alternatif';
        //sidebar active
        $data['menuActive'] = 'Alternatif';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['alternatif'] = $this->Admin_model->getAlternatifByID($id);

        $this->form_validation->set_rules('name_alternatif', 'Name_alternatif', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('Admin/update_alternatif', $data);
            $this->load->view('template/footer');
        } else {
            $this->Admin_model->updateAlternatif();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            New Update data Alternatif Succsess !
          </div>
        ');
            redirect('admin/alternatif');
        }
    }
    // end of alternatif



    //start kriteria 
    //tampilin data kriteria 
    public function kriteria()
    {
        $data['title'] = 'Kriteria';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        //sidebar active
        $data['menuActive'] = 'Kriteria';
        $data['kriteria'] = $this->Admin_model->getDataKriteria();
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('Admin/kriteria', $data);
        $this->load->view('template/footer');
    }

    //nambah kriteria
    public function add_kriteria()
    {
        $data['title'] = 'Add Kriteria';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        //sidebar active
        $data['menuActive'] = 'Kriteria';
        $data['kriteria'] = $this->Admin_model->getDataKriteria();

        $this->form_validation->set_rules('nama_kriteria', 'nama_kriteria', 'required');
        $this->form_validation->set_rules('tipe_kriteria', 'tipe_kriteria', 'required');
        $this->form_validation->set_rules('bobot', 'bobot', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('Admin/add_kriteria', $data);
            $this->load->view('template/footer');
        } else {
            $this->Admin_model->addKriteria();
            $this->session->set_flashdata('accept', '<div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Data Kriteria has been Added !
          </div>
        ');
            redirect($uri = 'admin/kriteria', $method = 'auto', $code = NULL);
        }
    }

    //update kriteria
    public function update_kriteria($id)
    {
        $data['title'] = 'Update Kriteria';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        //sidebar active
        $data['menuActive'] = 'Kriteria';
        $data['tipeKriteria'] = ['Benefit', 'Cost'];

        $data['kriteria'] = $this->Admin_model->getDataKriteriaById($id);
        $this->form_validation->set_rules('nama_kriteria', 'nama_kriteria', 'required');
        $this->form_validation->set_rules('tipe_kriteria', 'tipe_kriteria', 'required');
        $this->form_validation->set_rules('bobot', 'bobot', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('Admin/update_kriteria', $data);
            $this->load->view('template/footer');
        } else {
            $this->Admin_model->updateKriteria();
            redirect('admin/kriteria');
        }
    }

    // ngapus kriteria. btw disini kalo ngapus kriteria, sub kriterinya juga bakal ke hapus/cek Admin_model -> delete_kriteria
    public function delete_kriteria($id)
    {
        $this->Admin_model->deleteKriteria($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('accept', '<div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Data Kriteria has been deleted !
          </div>
        ');
        }
        redirect('admin/kriteria');
    }

    /// tampilin data sub kriteria berdasarkan kriteria di halaman kriteria, makanya sesuai id nya pas klik sub kriteria
    public function sub_kriteria($id)
    {
        $data['title'] = 'Sub Kriteria';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['kriteria'] = $this->Admin_model->getDataKriteriaById($id);
        $data['subkriteria'] = $this->Admin_model->subKriteria($id);
        //sidebar active
        $data['menuActive'] = 'Kriteria';

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('Admin/sub_kriteria', $data);
        $this->load->view('template/footer');
    }


    //tambah sub kriterianya pake 'model' makanya viewnya di sub_kriteria kaya yang di atas. btw masih bug di redirect kayanya perlu pake ajax
    public function add_subkriteria()
    {
        $data['title'] = 'Add Kriteria';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        //sidebar active
        $data['menuActive'] = 'Kriteria';
        //endside
        $data['kriteria'] = $this->Admin_model->getDataKriteria();
        $kriteria['kriteria'] = $this->Admin_model->getDataKriteria();

        $this->form_validation->set_rules('id_sub_kriteria', 'id_sub_kriteria', 'required');
        $this->form_validation->set_rules('variable', 'viariable', 'required');
        $this->form_validation->set_rules('nilai', 'nilai', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('Admin/sub_kriteria', $data);
            $this->load->view('template/footer');
        } else {
            $this->Admin_model->add_sub_kriteria();
        }
    }

    // hapus sub kriteria aja tapi bug redirect juga.
    public function delete_Sub_Kriteria($id)
    {
        $this->Admin_model->delete_Sub_Kriteria($id);
        if ($this->db->affected_rows() > 0) {
        }
        redirect($_SERVER['HTTP_REFERER']);
    }


    // proses penilaian
    public function getDataSubKriteria()
    {
        $id_kriteria = $this->input->post('id_kriteria');
        $data = $this->Admin_model->getSubKriteriaId($id_kriteria);
        echo json_encode($data);
    }

    public function penilaian()
    {
        $data['title'] = 'Proses nilai';
        //sidebar active
        $data['menuActive'] = 'penilaian';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        //get data buat from model
        $data['alternatif'] = $this->Admin_model->getAlternatif();
        $data['kriteria'] = $this->Admin_model->getDataKriteria();
        //
        $data['rel_alternatif'] = $this->Admin_model->get_rel_alternatif();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('Admin/penilaian', $data);
        $this->load->view('template/footer');
    }


    //tambah data selection
    public function add_selection()
    {
        $data['title'] = 'Proses SAW';
        //sidebar active
        $data['menuActive'] = 'SAW';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data = [
            'alternatif' => $this->input->post('alternatif'),
            'kriteria' => $this->input->post('kriteria'),
            'sub_kriteria' => $this->input->post('sub_kriteria')
        ];

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('Admin/saw', $data);
            $this->load->view('template/footer');
        } else {
            $this->db->insert('data_seleksi', $data);
        }
    }
}
