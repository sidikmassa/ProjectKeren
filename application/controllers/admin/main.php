<?php
	Class Main extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model(array('barang_m'));
			$this->load->library('pagination');
		}
		function index(){
			$data["main"] = "admin/home_v";
			$this->load->view("admin/main_v",$data);
		}
	}
?>