<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\I18n\Time;
use CodeIgniter\Files\File;

class MyLibraries extends BaseController {

	public function curl_get() {
		$client = \Config\Services::curlrequest();
		
		$res = $client->get('http://test-codeigniter4.test/rest-movie', 
		[
			'headers' => [
				'Accept' => 'application/json'
			]
		]);
		
		echo $res->getBody();
		
		// echo $res->getStatusCode();
		// $body = json_decode($res->getBody());
		// var_dump($body->data[0]->id);
	}
	
	public function curl_remove() {
		$client = \Config\Services::curlrequest();
		
		$res = $client->delete('http://test-codeigniter4.test/rest-movie/5', 
		[
			'headers' => [
				'Accept' => 'application/xml'
			]
		]);
		
		echo $res->getBody();
		
		// echo $res->getStatusCode();
		// $body = json_decode($res->getBody());
		// var_dump($body->data[0]->id);
	}
	
	public function curl_post() {
		$client = \Config\Services::curlrequest();
		
		$res = $client->post('http://test-codeigniter4.test/rest-movie', 
		[
			'form_params' => [
				'category_id' => 1,
				'title' => 'Título nueva peli',
				'description' => 'Every day is taco ipsum tuesday.'
			]
		]);
		
		// $body = json_decode($res->getBody());
		echo $res->getBody();
	}
	
	public function curl_put() {
		$client = \Config\Services::curlrequest();
		
		$res = $client->put('http://test-codeigniter4.test/rest-movie/22', 
		[
			'form_params' => [
				'category_id' => 1,
				'title' => 'New Title',
				'description' => 'Shrimp tacos are tasty tacos! Say taco one more time.'
			]
		]);
		
		// $body = json_decode($res->getBody());
		echo $res->getBody();
	}
	
	public function agent() {
		$agent = $this->request->getUserAgent();
		// var_dump($agent);
		
		$dataheader = [
			'title' => 'Agent',
		];
		
		echo view("dashboard/templates/header", $dataheader);
		echo view("home/my_agent", ['agent' => $agent]);
		echo view("dashboard/templates/footer");
	}
	
	public function email() {
		$email = \Config\Services::email();
		
		$config['protocol'] = 'smtp';
		$config['SMTPHost'] = 'smtp.mailtrap.io';
		$config['SMTPPort']  = 2525;
		$config['SMTPUser']  = '6fa34b2b7a20e9';
		$config['SMTPPass']  = '9d692dee86bdee';
		$config['CRLF']  = "\r\n";
		$config['newline'] = "\r\n";
		$config['mailType'] = "html";

		$email->initialize($config);
		
		$email->setFrom('andres@gmail.com', 'Andres');
		$email->setTo('someone@example.com');
		// $email->setCC('another@another-example.com');
		// $email->setBCC('them@their-example.com');

		$email->setSubject('Hola de nuevo');
		$email->setMessage('<h1>Hola, bienvenido!.</h1> <p>Cuerpo del mensaje</p>');

		$email->send();
	}
	
	public function encrypter() {
		$encrypter = \Config\Services::encrypter();
		
		$cadena = "Hola mundo de prueba";
		
		$encript = $encrypter->encrypt($cadena);
		
		echo $encrypter->decrypt($encript);
	}
	
	public function time() {
		$time = new Time('+3 week');
		$time = Time::parse('+3 week');
		$time = Time::parse('now');
		$time = Time::parse('+3 year');
		$time = Time::parse('+3 day');
		$time = Time::parse('-3 day');
		$time = Time::parse('-3 day', 'America/Chicago', 'en_US');
		
		/* echo $time->year . ' '; // 2016
		echo $time->month . ' '; // 8
		echo $time->day . ' '; // 12
		echo $time->hour . ' '; // 16
		echo $time->minute . ' '; // 15
		echo $time->second . ' '; // 23 */
		
		// $time = Time::parse('March 10, 2017', 'America/Chicago');
		
		echo $time->humanize();
	}
	
	public function uri() {
		$uri = $this->request->uri;
		
		$uri = new \CodeIgniter\HTTP\URI('https://www.desarrollolibre.net:80/blog/flask/preparar-el-entorno-para-empezar-a-desarrollar-nuestras-aplicaciones-en-flask?user=1&pass=contrasena#hola');
		
		// echo $uri;
		
		$agent = $this->request->getUserAgent();
		// var_dump($agent);
		
		$dataheader = [
			'title' => 'Uri',
		];
		
		echo view("dashboard/templates/header", $dataheader);
		echo view("home/uri", ['uri' => $uri]);
		echo view("dashboard/templates/footer");
	}
	
	public function file() {
		// echo dirname(__DIR__, 2);
		$file = new File('C:\laragon\www\codeigniter4\public\image.png');
		$file = new File(dirname(__DIR__, 2) . '\public\image.png');
		$file = new File(dirname(__DIR__, 2) . '\writable\uploads\imagemanipulation\image_rotate.png');
		// var_dump($file->getRealPath());
		
		$dataheader = [
			'title' => 'File',
		];
		
		echo view("dashboard/templates/header", $dataheader);
		echo view("home/file", ['file' => $file]);
		echo view("dashboard/templates/footer");
	}
}
?>