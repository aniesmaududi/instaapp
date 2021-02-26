<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PagePost extends Migration
{
        public function up()
        {
                $this->forge->addField([
                        'post_id' => [
                                'type' => 'VARCHAR',
                                'constraint' => 20,                                                       
                        ],
                        'text' => [
                                'type' => 'TEXT',
                                'null' => true,
                        ],
                        'post_text' => [
                                'type' => 'TEXT',
                                'null' => true,
                        ],
                        'shared_text' => [
                                'type' => 'TEXT',
                                'null' => true,
                        ],
                        'time' => [
                                'type' => 'DATETIME',
                                'null' => true,
                        ],
                        'image' => [
                                'type' => 'TEXT',
                                'null' => true,
                        ],
                        'video' => [
                                'type' => 'TEXT',
                                'null' => true,
                        ],
                        'video_thumbnail' => [
                                'type' => 'TEXT',
                                'null' => true,
                        ],
                        'video_id' => [
                                'type' => 'VARCHAR',
                                'constraint' => 20,
                                'null' => true,
                        ],
                        'likes' => [
                                'type' => 'INT',
                                'constraint' => 5,
                        ],
                        'comments' => [
                                'type' => 'INT',
                                'constraint' => 5,
                        ],
                        'shares' => [
                                'type' => 'INT',
                                'constraint' => 5,
                        ],
                        'post_url' => [
                                'type' => 'TEXT',
                                'null' => true,
                        ],
                        'link' => [
                                'type' => 'TEXT',
                                'null' => true,                                
                        ],
                        'user_id' => [
                                'type' => 'VARCHAR',
                                'constraint' => 20,
                                'null' => true,
                        ],
                        'username' => [
                                'type' => 'VARCHAR',
                                'constraint' => 50,
                                'null' => true,
                        ],
                        'is_live' => [
                                'type' => 'BOOLEAN',
                                'null' => true,                          
                        ],
                        'images' => [
                                'type' => 'TEXT',
                                'null' => true,                                
                        ],
                ]);
                $this->forge->addKey('post_id', true);
                $this->forge->createTable('pagepost');
        }

        public function down()
        {
                $this->forge->dropTable('pagepost');
        }
}