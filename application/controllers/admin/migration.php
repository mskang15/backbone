<?php
/**
 * Created by PhpStorm.
 * User: kangmoonseok
 * Date: 12/27/13
 * Time: 1:51 AM
 */

class migration extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function migrate(){
        $this->load->library('migration');

        if ( ! $this->migration->current())
        {
            show_error($this->migration->error_string());
        } else {
            echo 'It worked!';
        }
    }

} 