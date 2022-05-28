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

        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $total = $this->admin->total_employee();
        $permanent = $this->admin->permanent();
        // $data['its_time'] = $this->admin->jatuh_tempo();
        // $data['grafik'] = $this->admin->get_grafiktahunan();
        $data = array(
            'title' => 'Dashboard',
            'mn' => 'Home',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'total' => $total,
            'permanent' => $permanent,
            // Set plugin js
            'list_js_plugin' => array(
                'jquery.easypiechart.min.js',
                'jquery.flot.min.js',
                'jquery.flot.pie.min.js',
                'jquery.flot.resize.min.js'
            ),
            'app_js' => array('dashboard.js'),
            'page_content' => 'admin/v_dashboard'
        );
        $this->load->view('templates/v_main', $data);
    }

    public function skin()
    {
        $skin = $this->input->post('skin');
        $id_user = $this->input->post('id_user');
        $this->admin->update_skin($skin, $id_user);
    }
}
