<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$client = new Raven_Client('https://e8a10daf1f5c4b6dbc1398e77840afb1@o4505121571209216.ingest.sentry.io/4505121575534592');
		$this->load->view('welcome_message');
		$error_handler = new Raven_ErrorHandler($client);
	}
}
