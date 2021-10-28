<?php

namespace App\Controllers;
use App\Models\MovieModel;
use \CodeIgniter\Exceptions\PageNotFoundException;

class Home extends BaseController {
	public function index() {
		return view('welcome_message');
	}

	public function my_request() {
		$dataheader = [
			'title' => 'Request',
		];
		
		$r = $this->request;
		$r = \Config\Services::request();
		// var_dump($r);
		// echo $r->getIPAddress();

		echo view("dashboard/templates/header", $dataheader);
		echo view("home/my_request", ['request' => $r]);
		echo view("dashboard/templates/footer");
	}
	
	public function my_database() {
		$db = \Config\Database::connect();
		
		$dataheader = [
			'title' => 'Base de datos DATA',
		];
		
		echo view("dashboard/templates/header", $dataheader);
		echo view("home/my_database", ['db' => $db]);
		echo view("dashboard/templates/footer");
	}
	
	
	public function my_transaction() {
		$db = \Config\Database::connect();
		
		$movie = new MovieModel();
		
		$db->transStart();
		
		$movie->update(1, [
			'title' => 'New Title 7'
		]);
		
		$movie->update(2, [
			'title' => 'New Title 8'
		]);
		
		/* if ($db->transStatus()) {
			$db->transRollback();
		} */
		
		$db->transComplete();
		
		if ($db->transStatus()) {
			echo "Ëxito";
			$db->transRollback();
		}
	}

	function image($movieId = null, $image = null) {
		// abre el archivo en modo binario

		if (!$movieId) {
// $movieId== null
			$movieId = $this->request->getGet('movie_id');
		}

		if (!$image) {
// $image== null
			$image = $this->request->getGet('image');
		}

		if ($movieId == '' || $image == '') {
			throw PageNotFoundException::forPageNotFound();
		}

		$name = WRITEPATH . 'uploads/movies/' . $movieId . '/' . $image;

		if (!file_exists($name)) {
			throw PageNotFoundException::forPageNotFound();
		}

		$fp = fopen($name, 'rb');

		// envía las cabeceras correctas
		header("Content-Type: image/png");
		header("Content-Length: " . filesize($name));

		// vuelca la imagen y detiene el script
		fpassthru($fp);
		exit;
	}

	public function contacto($name = "Pepe") {
		$dataheader = [
			'title' => 'Contacto ' . $name,
		];

		echo view("dashboard/templates/header", $dataheader);
		echo view('welcome_message');
		echo view("dashboard/templates/footer");
	}
}
