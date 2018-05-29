<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require __DIR__ . '/../core/PCenter.php';

class Menu extends PCenter {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['page'] = 'setting/menu/index';
        $data['seturl'] = !isset($_POST['loginUrl']) ? 0 : $_POST['loginUrl'];
        $this->load->view('layout/layoutDF', $data);
    }

    public function edit() {
        $this->load->view('setting/menu/edit');
    }

    public function findMenu() {
        $qryMenu = $this->db->select('RowKey AS key,'
                        . ' Menu,'
                        . ' Description,'
                        . ' Icon,'
                        . ' Url,'
                        . ' Seq')
                ->get('USRMenu');
        echo json_encode($qryMenu->result());
    }

}
