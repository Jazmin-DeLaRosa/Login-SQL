<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Personajes extends Migration
{
    public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'nombre'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '250',
                        ],
                        'especie'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '250',
                        ],
                        'alimentacion'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '250',
                        ],
                        'periodo'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '250',
                        ],
                ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('personajes');
        }

        public function down()
        {
                $this->forge->dropTable('personajes');
        }
}
