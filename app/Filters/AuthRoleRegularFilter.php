<?php namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthRoleRegularFilter implements FilterInterface {
	public function before(RequestInterface $request, $arguments = null) {
		$session = session();

		if ($session->type != "regular") {
			return redirect()->route('user_login_get');
		}
	}

	//--------------------------------------------------------------------

	public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {
		// Do something here
	}
}