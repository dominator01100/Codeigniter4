<?php namespace App\Controllers\dashboard;
use App\Controllers\BaseController;
use App\Models\MovieModel;

class MovieController extends BaseController {

	public function index() {
		$dataheader = [
			'title' => 'Listado de películas',
		];

		$data = [
			'movies' => array(0, 1, 2, 3, 4),
		];

		echo view("dashboard/templates/header", $dataheader);
		echo view("dashboard/movie/index", $data);
		echo view("dashboard/templates/footer");
	}

	public function test($name = "Andres") {
		$dataheader = [
			'title' => 'Listado de películas ' . $name,
		];

		$data = [
			'movies' => array(0, 1, 2, 3, 4),
		];

		echo view("dashboard/templates/header", $dataheader);
		echo view("dashboard/movie/index", $data);
		echo view("dashboard/templates/footer");
	}

	public function show() {
		$movie = new MovieModel();
		var_dump($movie->get(47)['id']);
	}
}