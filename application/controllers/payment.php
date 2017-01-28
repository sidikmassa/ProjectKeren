<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Payment extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view("payment_v");
	}
		public function police()
	{
		$this->load->view("Payment");
	}
}
?>