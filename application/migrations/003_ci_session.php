<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_CI_Session extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type'       => 'VARCHAR',
                'constraint' => '128',
                'null'       => FALSE,
            ),
            'ip_address' => array(
                'type'       => 'VARCHAR',
                'constraint' => '45',
                'null'       => FALSE,
            ),
            'timestamp' => array(
                'type'       => 'INT',
                'constraint' => '10',
                'unsigned'   => TRUE,
                'null'       => FALSE,
            ),
            'data' => array(
                'type'       => 'BLOB',
                'null'       => FALSE,
            ),
        ));
        $this->dbforge->add_key('timestamp');
        $this->dbforge->create_table('ci_session');
    }

    public function down()
    {
        $this->dbforge->drop_table('ci_session');
    }
}