<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_404 extends CI_Controller {

	public function index()
	{
		$this->load->view('page_404');
	}
}
