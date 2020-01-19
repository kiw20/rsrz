<?php

class Kontak extends MY_Controller
{ 

	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_kontak');

		/*$this->load->module(['schedule_siswa','nilai_siswa',
		'materi_siswa','portofolio_siswa','pembayaran_siswa']);*/
		
	}
	function index()

	{
		
		$data['content_view'] = 'kontak/kontak_v';
		$data['contact']=$this->m_kontak->index();
		$this->template->template_admin($data);
	}

	// function tambahkontak()
	// {
		
	// 	$data['content_view'] = 'kontak/tambahkontak_v';
	// 	$this->template->template_admin($data);
	// }

	// function post_kontak()
	// {
	// 		$in= array();
	// 		$in['contact']= $this->input->post('kontak');
			
			

	// 		$res= $this->m_kontak->tambahkontak($in);

	// 		echo " <script>alert('Data Berhasil disimpan !!!');history.go(-1);</script>";
	// 		redirect('kontak');
	// 	}

}
?>