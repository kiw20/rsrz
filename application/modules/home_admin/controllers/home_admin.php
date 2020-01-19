<?php

class Home_admin extends MY_Controller
{

	function __construct()
	{
		parent:: __construct();
		/*$this->load->module(['schedule_siswa','nilai_siswa',
		'materi_siswa','portofolio_siswa','pembayaran_siswa']);*/
		$this->load->module(['sejarah']);
	}

	function index()
	{
		
		$data['content_view'] = 'home_admin/home_admin_v';
		$this->template->template_admin($data);
	}

	function sejarah()
	{
		$this->sejarah->index();
	}

	function tembahsejarah()
	{
		$this->sejarah->tambahsejarah();
	}
	
	/*

	function materi_siswa()
	{
		$this->materi_siswa->index();
	}

	function portofolio_siswa()
	{
		$this->portofolio_siswa->index();
	}

	function pembayaran_siswa()
	{
		$this->pembayaran_siswa->index();
	}*/
}

?>