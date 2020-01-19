<?php 

class Pembayaran extends MY_Controller
{

	function __construct()
	{
		parent:: __construct();
		// $this->load->model('m_mapel');

		/*$this->load->module(['schedule_siswa','nilai_siswa',
		'materi_siswa','portofolio_siswa','pembayaran_siswa']);*/
		
	}
	function index()
 
	{
		
		$data['content_view'] = 'pembayaran/pembayaran_v';
		// $data['pembayaran']=$this->m_pembayaran->index();
		$this->template->template_admin($data);
	}

	

}
?>