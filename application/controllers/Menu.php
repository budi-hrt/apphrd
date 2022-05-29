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

        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $icons = $this->db->get('icons')->result_array();
        $menu = $this->db->get('user_menu')->result_array();
        $data = array(
            'title' => 'Menu Management',
            'mn' => 'Menu',
            'user' => $user,
            'icons' => $icons,
            'menu' => $menu,

            // Set plugincss
            'list_css_plugin' => array(
                'jquery-ui.custom.min.css',
                'jquery.gritter.min.css'
            ),

            // Set plugin js
            'list_js_plugin' => array(
                'jquery.dataTables.min.js',
                'jquery.dataTables.bootstrap.min.js',
                'dataTables.buttons.min.js',
                'buttons.flash.min.js',
                'buttons.html5.min.js',
                'buttons.print.min.js',
                'buttons.colVis.min.js',
                'dataTables.select.min.js',
                'bootbox.js',
                'jquery-ui.custom.min.js',
                'jquery.gritter.min.js'
            ),
            'app_js' => array('menu.js'),
            'page_content' => 'menu/index'
        );
        $this->load->view('templates/v_main', $data);
    }

    public function showAllMenu()
    {
        $data = $this->menu->showAllMenu();
        echo json_encode($data);
    }


    public function create()
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $icons = $this->db->get('icons')->result_array();

        $data = array(
            'title' => 'Tambah Menu baru',
            'mn' => 'Menu',
            'user' => $user,
            'icons' => $icons,

            // Set plugincss
            'list_css_plugin' => array(
                'jquery-ui.custom.min.css',
                'jquery.gritter.min.css'
            ),


            // Set plugin js
            'list_js_plugin' => array(
                'jquery-ui.custom.min.js',
                'jquery.gritter.min.js'

            ),
            'app_js' => array('menu_create.js'),
            'page_content' => 'menu/create'
        );
        $this->load->view('templates/v_main', $data);
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
    public function update()
    {
        $id = $this->uri->segment(3);
        $menu = $this->menu->getmenu($id);
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $icons = $this->db->get('icons')->result_array();

        $data = array(
            'title' => 'Update menu',
            'mn' => 'Menu',
            'menu' => $menu,
            'user' => $user,
            'icons' => $icons,

            // Set plugincss
            'list_css_plugin' => array(
                'jquery-ui.custom.min.css',
                'jquery.gritter.min.css'
            ),


            // Set plugin js
            'list_js_plugin' => array(
                'jquery-ui.custom.min.js',
                'jquery.gritter.min.js'

            ),
            'app_js' => array('menu_create.js'),
            'page_content' => 'menu/update'
        );
        $this->load->view('templates/v_main', $data);
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
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $submenu = $this->menu->getSubMenu()->result_array();
        $data = array(
            'title' => 'Subemenu',
            'mn' => 'Menu',
            'user' => $user,
            'submenu' => $submenu,
            // Set plugincss
            'list_css_plugin' => array(
                'jquery-ui.custom.min.css',
                'jquery.gritter.min.css'
            ),

            // Set plugin js
            'list_js_plugin' => array(
                'jquery.dataTables.min.js',
                'jquery.dataTables.bootstrap.min.js',
                'dataTables.buttons.min.js',
                'buttons.flash.min.js',
                'buttons.html5.min.js',
                'buttons.print.min.js',
                'buttons.colVis.min.js',
                'dataTables.select.min.js',
                'bootbox.js',
                'jquery-ui.custom.min.js',
                'jquery.gritter.min.js'
            ),
            'app_js' => array('submenu.js'),
            'page_content' => 'menu/submenu'
        );
        $this->load->view('templates/v_main', $data);
    }

    public function create_sb()
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $menu = $this->db->get('user_menu')->result_array();
        $data = array(
            'title' => 'Tambah Submenu baru',
            'mn' => 'Menu',
            'user' => $user,
            'menu' => $menu,

            // Set plugincss
            'list_css_plugin' => array(
                'jquery-ui.custom.min.css',
                'jquery.gritter.min.css',
                'chosen.min.css'
            ),


            // Set plugin js
            'list_js_plugin' => array(
                'jquery-ui.custom.min.js',
                'jquery.gritter.min.js',
                'chosen.jquery.min.js'

            ),
            'app_js' => array('submenu_create.js'),
            'page_content' => 'menu/create_sb'
        );
        $this->load->view('templates/v_main', $data);
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


    public function update_sb()
    {
        $id = $this->uri->segment(3);
        $submenu = $this->menu->getsub($id);
        $menu = $this->db->get('user_menu')->result_array();
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data = array(
            'title' => 'Update submenu',
            'mn' => 'Menu',
            'id_submenu' => $id,
            'sub' => $submenu,
            'menu' => $menu,
            'user' => $user,

            // Set plugincss
            'list_css_plugin' => array(
                'jquery-ui.custom.min.css',
                'jquery.gritter.min.css',
                'chosen.min.css'
            ),


            // Set plugin js
            'list_js_plugin' => array(
                'jquery-ui.custom.min.js',
                'jquery.gritter.min.js',
                'chosen.jquery.min.js'

            ),
            'app_js' => array('submenu_create.js'),
            'page_content' => 'menu/update_sb'
        );
        $this->load->view('templates/v_main', $data);
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
