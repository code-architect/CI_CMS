<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Templates_to_pages extends CI_Migration {

public function up(){
        $fields = [
            'template' => [
                'type' => 'VARCHAR',
                'constraint' => 25,               
            ],
        ];

       
        $this->dbforge->add_column('pages', $fields);            
    }

    public function down(){
        $this->dbforge->drop_column('pages', 'template');
    }
}