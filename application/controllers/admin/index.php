<?php
/**
 * Created by PhpStorm.
 * User: kangmoonseok
 * Date: 12/25/13
 * Time: 12:04 PM
 */

class index  extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index() {
        $this->load->view('index');
    }

} 