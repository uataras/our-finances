<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Users extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'null'           => FALSE,
                'auto_increment' => TRUE
            ),
            'username' => array(
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => FALSE,
            ),
            'email' => array(
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => FALSE,
            ),
            'password' => array(
                'type'       => 'VARCHAR',
                'constraint' => '60',
                'null'       => FALSE,
            ),
            'first_name' => array(
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ),
            'last_name' => array(
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ),
            'is_admin' => array(
                'type'       => 'INT',
                'constraint' => 1,
                'unsigned'   => TRUE,
                'default'    => '0',
            ),
            'is_confirmed' => array(
                'type'       => 'INT',
                'constraint' => 1,
                'unsigned'   => TRUE,
                'default'    => '0',
            ),
            'is_deleted' => array(
                'type'       => 'INT',
                'constraint' => 1,
                'unsigned'   => TRUE,
                'default'    => '0',
            ),
            'gender' => array(
                'type'       => 'INT',
                'constraint' => 1,
                'unsigned'   => TRUE,
            ),
            'created_at' => array(
                'type'       => 'DATETIME',
                'null'       => FALSE,
            ),
            'updated_at' => array(
                'type'       => 'DATETIME',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');
    }


    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}