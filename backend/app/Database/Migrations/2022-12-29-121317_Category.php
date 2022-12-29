<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Category extends Migration
{
    public function up(){
        
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'cat_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('Categories');

    }

    public function down(){
        $this->forge->dropTable('Categories');
    }
}
