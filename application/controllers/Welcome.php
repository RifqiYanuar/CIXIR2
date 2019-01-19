<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function dashboard($nama, $portofolio)
	{
		$data['nama_lengkap']=$nama;
		$data['portofolio']=$portofolio;
		$this->load->view('beranda',$data);
	}
	public function tentang()
	{
		$this->load->view('tentang');
	}
	public function homepage()
	{
		$this->load->view('homepage');
	}
	public function tutorial()
	{
		$this->load->view('tutorial');
	}
	// public function gallery()
	// {
	// 	$this->load->view('gallery');
	// }
	// public function contact()
	// {
	// 	$this->load->view('contact');
	// }
}
