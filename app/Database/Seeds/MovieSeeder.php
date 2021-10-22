<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MovieSeeder extends Seeder {
	public function run() {
		$this->db->table('movies')->where('id >', 1)->delete();

		// Simple Queries
		// $this->db->query("INSERT INTO movies (title, description) VALUES(:title:, :description:)", $data);

		// Using Query Builder
		for ($i = 1; $i <= 20; $i++) {
			$data = [
				'title' => "Movie $i",
				'category_id' => 1,
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac lorem aliquam, blandit risus vitae, efficitur sapien. Phasellus vulputate, arcu et egestas malesuada, dolor elit suscipit nibh, ac semper lacus nisi eget neque. Pellentesque libero odio, mattis nec enim a, cursus rhoncus velit.',
			];

			$this->db->table('movies')->insert($data);
		}
	}
}