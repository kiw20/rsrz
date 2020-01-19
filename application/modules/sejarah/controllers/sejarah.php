<?php

class Sejarah extends MY_Controller
{

	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_sejarah');
		$this->load->library('session');

		/*$this->load->module(['schedule_siswa','nilai_siswa',
		'materi_siswa','portofolio_siswa','pembayaran_siswa']);*/
		
	}
	function index()

	{
		
		$data['content_view'] = 'sejarah/sejarah_v';
		$data['sejarah']=$this->m_sejarah->index();
		$this->template->template_admin($data);
	}

	function tambahsejarah()
	{
		
		$data['content_view'] = 'sejarah/tambahsejarah_v';
		$this->template->template_admin($data);
	}

	function post_sejarah()
	{
			$in= array();
			$in['sejarah']= $this->input->post('sejarah');
			
			

			$res= $this->m_sejarah->tambahsejarah($in);

			$this->session->set_flashdata('success', 'Data Berhasil ditambah');
			redirect('sejarah');
		}
	

	function hapus_data($id)
		{

			$this->m_sejarah->hapus_data($id);
			
			
			redirect('sejarah');
		}

	function edit_data($id)
		{
			// object - array
			// object => result() => $this->db->get->result()
			// array => result() => $this->db->get->row()

			$data['content_view']= 'sejarah/edit_data_v';
			$this->db->select('*')->from('tentang');
			$this->db->where('id',$id);
			// $data['sejarah']= $this->m_sejarah->edit_data($id);
			$data['sejarah']= $this->db->get()->row();
			// print_r($data['sejarah'])
			$this->template->template_admin($data);	

		}


		function update_data()
		{
			$id = $this->input->post('id_sejarah');
			$sejarah = $this->input->post('sejarah');
			$this->db->where('id',$id);
			$this->db->update('tentang', array('sejarah'=>$sejarah));
			// $in=array();

			// $in['sejarah']=$this->input->post('tentang');
			

			// $res= $this->m_sejarah->update_data($in);

			// echo " <script>alert('Data Berhasil diedit !!!');history.go(-1);</script>";
			redirect('sejarah');
		}


	

	// function materi_siswa()
	// {
	// 	$this->materi_siswa->index();
	// }

	// function portofolio_siswa()
	// {
	// 	$this->portofolio_siswa->index();
	// }

	// function pembayaran_siswa()
	// {
	// 	$this->pembayaran_siswa->index();

	// }
}

?>