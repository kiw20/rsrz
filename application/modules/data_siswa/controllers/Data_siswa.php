<?php

class Data_siswa extends MY_Controller
{

	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_siswa');
		

		/*$this->load->module(['schedule_siswa','nilai_siswa',
		'materi_siswa','portofolio_siswa','pembayaran_siswa']);*/
		
	}
	function baru(){
		$this->load->view('template/templates');
	}
	function index()

	{ 
		
		$data['content_view'] = 'data_siswa/data_siswa_v';
		$data['siswa']=$this->m_siswa->index();
		$this->template->template_admin($data);
	}

	function tambahsiswa()
	{
		$data['kelas'] = $this->m_siswa->get_kelas();	
		$data['content_view'] = 'data_siswa/tambahsiswa_v';
		$this->template->template_admin($data);
	}

	function post_siswa()
	{
			$in= array();
			$in['nama_lengkap']= $this->input->post('nama_lengkap');
			$in['nama_panggilan']= $this->input->post('nama_panggilan');
			$in['tempat_lahir']= $this->input->post('nama_panggilan');
			$in['tempat_lahir']= $this->input->post('nama_panggilan');
			$in['tanggal_lahir']= $this->input->post('tanggal_lahir');
			$in['alamat']= $this->input->post('alamat');
			$in['hobi']= $this->input->post('hobi');
			$in['jenis_kelamin']= $this->input->post('jenis_kelamin');
			$in['kelas_id']= $this->input->post('kelas_id');
			// $in['foto_siswa']= $this->input->post('foto_siswa');
			$in['nama_ibu']= $this->input->post('nama_ibu');
			$in['nama_ayah']= $this->input->post('nama_ayah');
			$in['no_hp']= $this->input->post('no_hp');
			$in['email']= $this->input->post('email');
			$in['nama_fb']= $this->input->post('nama_fb');
			$in['nama_ig']= $this->input->post('nama_ig');
			
			print_r($in);
			$res= $this->m_siswa->tambahsiswa($in);

			echo " <script>alert('Data Berhasil disimpan !!!');history.go(-1);</script>";
			redirect('data_siswa');
	}

	function edit_data($nis)
		{
			// object - array
			// object => result() => $this->db->get->result()
			// array => result() => $this->db->get->row()
			$data['kelas'] = $this->m_siswa->get_kelas();	
			$data['content_view']= 'data_siswa/edit_data_v';
			$this->db->select('*')->from('tb_user');
			$this->db->where('nis',$nis);
			// $data['sejarah']= $this->m_sejarah->edit_data($id);
			$data['tb_user']= $this->db->get()->row();
			// print_r($data['sejarah'])
			$this->template->template_admin($data);	

		} 
 

		function update_data()
		{
			$res= $this->m_siswa->edit_data();
			print_r($res);
				echo " <script>alert('Data Berhasil diedit !!!');history.go(-1);</script>";
			redirect('data_siswa');
		}

		function hapus_data($nis)
		{

			$this->m_siswa->hapus_data($nis);
			
			
			redirect('data_siswa');
		}
	

	
}

?>