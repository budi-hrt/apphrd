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
    public function getmenu($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('user_menu');

        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function updatemenu()
    {
        $id = $this->input->post('menu_id');
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
        $query = "SELECT `sub`.`id` as `sub_id`,`sub`.`menu_id`,`sub`.`title`,`sub`.`url`, `user_menu`.`menu` 
        FROM `user_sub_menu` as`sub` JOIN `user_menu` ON `sub`.`menu_id` = `user_menu`.`id` ORDER BY `sub`.`menu_id`
                ";
        return $this->db->query($query);
    }

    public function addSubmenu()
    {
        $field = array(
            'menu_id' => $this->input->post('menu'),
            'title' => $this->input->post('title'),
            'url' => $this->input->post('url'),
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


    public function getsub($id)
    {
        $this->db->select('s.id as sub_id, s.menu_id , s.title, s.url,s.sc,s.sb_title,s.sub_menu_id,s.icon, m.menu');
        $this->db->from('user_sub_menu s');
        $this->db->join('user_menu m', 'm.id=s.menu_id');
        $this->db->where('s.id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function get_sb_induk()
    {
        $this->db->where('sc', 'parent');
        $query = $this->db->get('user_sub_menu');
        return $query;
        // if ($query->num_rows() > 0) {
        //     return $query;
        // } else {
        //     return false;
        // }
    }



    public function updatesubmenu()
    {
        $id = $this->input->post('sb_id');
        $field = array(
            'menu_id' => $this->input->post('menu'),
            'title' => $this->input->post('title'),
            'url' => $this->input->post('url'),
            'sc' => $this->input->post('sc'),
            'sub_menu_id' => $this->input->post('sb'),
            'icon' => $this->input->post('icon'),
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
