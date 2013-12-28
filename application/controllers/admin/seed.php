<?php
/**
 * Created by PhpStorm.
 * User: kangmoonseok
 * Date: 12/27/13
 * Time: 2:26 AM
 */

class seed extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function insertData(){
        $this->load->model('contacts');
        $this->contacts->insertData();
    }

} 