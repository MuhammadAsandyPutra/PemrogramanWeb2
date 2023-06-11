<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use function PHPSTORM_META\type;

class Crud extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type" => "INT",
                "constraint" => 5,
                "auto_increment" => true
            ],
            "judul"=>[
                "type" => "VARCHAR",
                "constraint" => 255,

            ],
            "penulis"=>[
                "type" => "VARCHAR",
                "constraint" => 255
            ],
            "penerbit"=>[
                "type" => "VARCHAR",
                "constraint" => 255
            ],
            "tahun_terbit"=>[
                "type" => "VARCHAR",
    
            ]
        ];
        $this->forge->addField($fields);
        $this->forge->addKey("id", true);
        $this->forge->createTable("buku");
    }

    public function down()
    {
        $this->forge->dropTable("buku", true);
        
    }
}
