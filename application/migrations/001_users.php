<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Users extends CI_Migration
{
    protected $tableName  = 'users';

    public function up()
    {
        $this->dbforge->add_field([
            'id_user' => [
                'type'              => 'VARCHAR',
                'constraint'        => 25,
            ],
            'nim' => [
                'type'              => 'VARCHAR',
                'constraint'        => 25,
            ],
            'name' => [
                'type'              => 'VARCHAR',
                'constraint'        => 25,
            ],
            'email' => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'password' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'role_id' => [
                'type'              => 'VARCHAR',
                'constraint'        => 25
            ],
        ]);
        $this->dbforge->add_key('id_user', TRUE);
        $this->dbforge->add_key('nim', TRUE);
        $this->dbforge->create_table($this->tableName);

        //Inserting first row
        // $this->db->insert($this->tableName, [
        //     'username'   => 'murad_ali',
        //     'phone'      => '123-123-7834',
        //     'password'   => password_hash('123456', PASSWORD_BCRYPT),
        // ]);

        //Inserting two rows
        $data = [
            [
                'id_user'  => 'USR0915001',
                'nim'      => 'IDN0915001',
                'name'     => 'Admin',
                'email'    => 'admin@example.com',
                'password' => md5('12345'),
                'role_id'  => 'RL202409001'
            ],
            [
                'id_user'  => 'USR0915002',
                'nim'      => 'IDN0915002',
                'name'     => 'Publisher',
                'email'    => 'publisher@example.com',
                'password' => md5('12345'),
                'role_id'  => 'RL202409002'
            ],
            [
                'id_user'  => 'USR0915003',
                'nim'      => 'IDN0915003',
                'name'     => 'User',
                'email'    => 'user@example.com',
                'password' => md5('12345'),
                'role_id'  => 'RL202409003'
            ],
            // [
            //     'id_user'  => 'USR0915003',
            //     'nim'      => 'IDN0915003',
            //     'name'     => 'User',
            //     'email'    => 'user@example.com',
            //     'password' => password_hash('12345', PASSWORD_DEFAULT),
            //     'role_id'  => 'RL202409003'
            // ],
        ];

        $this->db->insert_batch($this->tableName, $data);
    }

    public function down()
    {
        $this->dbforge->drop_table($this->tableName);
    }
}
