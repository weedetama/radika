<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mnotif extends CI_Model
{
    // Notif jumlah data pada topbar
    public function Notification()
    {
        $notif = $this->db->query("SELECT `tb_invoice`.`status` FROM `tb_invoice` WHERE `status` = 0 ");
        return $notif;
    }
}
