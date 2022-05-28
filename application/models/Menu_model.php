<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function ShowAllMenu()
    {
        $query = $this->db->get('user_menu');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    // addmenu
    public function addMenu()
    {
        $field = array(
            'menu' => $this->input->post('menu'),
            'icon' => $this->input->post('icon')
        );
        $this->db->insert('user_menu', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    // getmenu
    public function getmenu()
    {
        $id = $this->input->get('id');
        $this->db->where('id', $id);
        $query = $this->db->get('user_menu');

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function updatemenu()
    {
        $id = $this->input->post('idmenu');
        $field = array(
            'menu' => $this->input->post('menu'),
            'icon' => $this->input->post('icon')
        );
        $this->db->where('id', $id);
        $this->db->update('user_menu', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deletemenu()
    {
        $id = $this->input->get('id');
        $this->db->where('id', $id);
        $this->db->delete('user_menu');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }


    // ======Submenu
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                  FROM `user_sub_menu` JOIN `user_menu`
                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                  ORDER BY `user_sub_menu`.`menu_id`
                ";
        return $this->db->query($query)->result();
    }

    public function addSubmenu()
    {
        $field = array(
            'menu_id' => $this->input->post('menu'),
            'title' => $this->input->post('submenu'),
            'url' => $this->input->post('submenuUrl'),
            'icon' => 'fa-user',
            'is_active' => 1
        );
        $this->db->insert('user_sub_menu', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function getsub()
    {
        $id = $this->input->get('id');
        $this->db->where('id', $id);
        $query = $this->db->get('user_sub_menu');

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }



    public function updatesubmenu()
    {
        $id = $this->input->post('idsubmenu');
        $field = array(
            'menu_id' => $this->input->post('menu'),
            'title' => $this->input->post('submenu'),
            'url' => $this->input->post('submenuUrl')
        );
        $this->db->where('id', $id);
        $this->db->update('user_sub_menu', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deletesubmenu()
    {
        $id = $this->input->get('id');
        $this->db->where('id', $id);
        $this->db->delete('user_sub_menu');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}