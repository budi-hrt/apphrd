<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('menu_model', 'menu');
    }

    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['icons'] = $this->db->get('icons')->result_array();
        $data['mn'] = 'Menu';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/index', $data);
    }

    public function showAllMenu()
    {
        $data = $this->menu->showAllMenu();
        echo json_encode($data);
    }

    public function addMenu()
    {

        $result = $this->menu->addMenu();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    // getmenu
    public function getmenu()
    {
        $result = $this->menu->getmenu();
        echo json_encode($result);
    }

    public function updatemenu()
    {

        $result = $this->menu->updatemenu();
        $msg['success'] = false;
        $msg['type'] = 'update';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }


    public function deletemenu()
    {
        $result = $this->menu->deletemenu();
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }




    // =====Submenu
    public function submenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['mn'] = 'Menu';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/submenu', $data);
        $this->load->view('templates/footer');
    }
    // ShowSubmenu
    public function showAllSubmenu()
    {
        $data = $this->menu->getSubMenu();
        echo json_encode($data);
    }
    // AddSubmenu
    public function addSubmenu()
    {
        $result = $this->menu->addSubmenu();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function getsubmenu()
    {
        $result = $this->menu->getsub();
        echo json_encode($result);
    }

    public function updatesubmenu()
    {
        $result = $this->menu->updatesubmenu();
        $msg['success'] = false;
        $msg['type'] = 'update';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function deletesubmenu()
    {
        $result = $this->menu->deletesubmenu();
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function user_submenu()
    {
        $data['title'] = 'User Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['data_user'] = $this->db->get('user')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/user_submenu', $data);
        $this->load->view('templates/footer');
    }


    public function submenuAccess($user_id)
    {
        $this->load->model('Menu_model', 'menu');
        $data['title'] = 'Submenu Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['datauser'] = $this->db->get_where('user', ['id' => $user_id])->row_array();

        // $this->db->where('id !=', 1);
        $data['submenu'] = $this->db->get('user_sub_menu')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/user_submenu_access', $data);
        $this->load->view('templates/footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $submenu_id = $this->input->post('submenuId');
        $user_id = $this->input->post('userId');

        $data = [
            'user_id' => $user_id,
            'submenu_id' => $submenu_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_sub_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_sub_menu', $data);
        } else {
            $this->db->delete('user_access_sub_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
    }

    public function staff()
    {
        $this->load->view('backend/staff');
    }
}