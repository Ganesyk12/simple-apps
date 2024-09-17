<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Product extends CI_Migration
{
    protected $tableName  = 'products';

    public function up()
    {
        $this->dbforge->add_field([
            'id_product' => [
                'type'              => 'VARCHAR',
                'constraint'        => 25,
            ],
            'name_product' => [
                'type'              => 'VARCHAR',
                'constraint'        => 30,
                'null'              => TRUE,
            ],
            'price' => [
                'type'              => 'INT',
                'null'              => TRUE,
            ],
            'image' => [
                'type'              => 'VARCHAR',
                'constraint'        => 100,
                'null'              => TRUE,
            ],
            'status' => [
                'type'              => 'VARCHAR',
                'constraint'        => 10,
                'null'              => TRUE,
            ]
        ]);
        $this->dbforge->add_key('id_product', TRUE);
        $this->dbforge->create_table($this->tableName);
    }

    public function down()
    {
        $this->dbforge->drop_table($this->tableName);
    }
}
