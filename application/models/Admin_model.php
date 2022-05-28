<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function update_skin($skin, $id_user)
    {
        $data = array(
            'skin' => $skin
        );
        $this->db->where('id', $id_user);
        $this->db->update('user', $data);
    }

    //   total employee

    public function total_employee()
    {
        $this->db->where('aktif', 1);
        $query = $this->db->get('tb_karyawan');
        $total = $query->num_rows();
        return $total;
    }
    // end total employee


    // total permanent
    public function permanent()
    {
        $this->db->where('id_status', 1);
        $query = $this->db->get('tb_karyawan');
        $total = $query->num_rows();
        return $total;
    }
    // end total permanen

    public function get_grafiktahunan()
    {
        $result = array();
        $tahun = date('Y');
        $query = $this->db->query("SELECT `tanggal_absen`, SUM(`id_ket`=1) AS sakit,SUM(`id_ket`=3) AS `cuti`,SUM(`id_ket`=10) AS alpa FROM `absen` WHERE YEAR(`tanggal_absen`)= $tahun GROUP BY MONTH(`tanggal_absen`)");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
        return $result;
    }
}