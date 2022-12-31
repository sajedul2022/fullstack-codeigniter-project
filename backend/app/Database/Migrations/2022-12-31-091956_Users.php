<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Users extends Migration{

    public function up(){
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'unique' => true
            ],
            'password' => [
                'type' => 'CHAR',
                'constraint'     => 64
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'default' => new RawSql(('CURRENT_TIMESTAMP'))
                
            ],
            
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down(){
        $this->forge->dropTable('users');
        
    }
}
