<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('admin_model', 'admin');
    }



    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['total'] = $this->admin->total_employee();
        $data['permanent'] = $this->admin->permanent();
        // $data['its_time'] = $this->admin->jatuh_tempo();
        $data['grafik'] = $this->admin->get_grafiktahunan();

        // $data['expire'] = $this->admin->contract_expire()->result_array();
        $data['title'] = 'Dashboard';
        $data['mn'] = 'Home';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/home', $data);
        // $this->load->view('templates/footer');
    }

    public function skin()
    {
        $skin = $this->input->post('skin');
        $id_user = $this->input->post('id_user');
        $this->admin->update_skin($skin, $id_user);
    }
}