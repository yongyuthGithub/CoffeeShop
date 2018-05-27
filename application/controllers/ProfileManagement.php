<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require __DIR__ . '/../core/PCenter.php';

class ProfileManagement extends PCenter {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['page'] = 'setting/profilemanagement/index';
        $data['seturl'] = !isset($_POST['loginUrl']) ? 0 : $_POST['loginUrl'];
        $this->load->view('layout/layoutDF', $data);
    }

}
