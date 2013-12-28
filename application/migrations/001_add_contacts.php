<?php
/**
 * Created by PhpStorm.
 * User: kangmoonseok
 * Date: 12/27/13
 * Time: 1:42 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_contacts extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
            ),
            'first_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'last_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'description' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
            'email_address' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            )
        ));
        $this->dbforge->add_key('id', TRUE);

        $this->dbforge->create_table('contacts');
    }

    public function down()
    {
        $this->dbforge->drop_table('contacts');
    }
}