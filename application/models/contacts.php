<?php
/**
 * Created by PhpStorm.
 * User: kangmoonseok
 * Date: 12/27/13
 * Time: 2:19 AM
 */

class Contacts extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function insertData(){
        $data = array(
            array(
                'first_name' => 'John',
                'last_name' => 'Doe' ,
                'description' => 'best friend',
                'email_address' => 'john@example.com'
            ),
            array(
                'first_name' => 'Jane',
                'last_name' => 'Doe' ,
                'description' => 'best friend\'s wife',
                'email_address' => 'jane@example.com'
            ),
            array(
                'first_name' => 'Moon',
                'last_name' => 'Kang' ,
                'description' => 'me',
                'email_address' => 'moon@example.com'
            ),
        );

        $this->db->insert_batch('contacts', $data);
    }
}