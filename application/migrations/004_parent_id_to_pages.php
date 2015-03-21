<?php

class Migration_Parent_id_to_pages extends CI_Migration{

    public function up(){
        $fields = [
            'parent_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'default' => 0
            ],
        ];

       
        $this->dbforge->add_column('pages', $fields);            
    }

    public function down(){
        $this->dbforge->drop_column('pages', 'parent_id');
    }

}