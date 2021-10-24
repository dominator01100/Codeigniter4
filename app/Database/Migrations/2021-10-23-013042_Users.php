<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration {
	public function up() {
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'username' => [
				'type' => 'VARCHAR',
				'constraint' => '20',
				'unique' => true,
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
				'unique' => true,
			],
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'type' => [
				'type' => 'ENUM',
				'constraint' => ['admin', 'regular'],
				'default' => 'regular',
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('users');
	}

	public function down() {
		$this->forge->dropTable('users');
	}
}
