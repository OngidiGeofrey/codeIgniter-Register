<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('Auth/login');
	}

	public function register()
	{

		$this->load->view('Auth/register');

	}

	public function registration_form()
	{
		echo '<script>alert("clicked")</script>';
	}


	public function login_form()
	{
		echo '<script>alert("clicked")</script>';
	}
}
