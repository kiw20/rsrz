<?php 

class Mapel extends MY_Controller
{

	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_mapel');

		/*$this->load->module(['schedule_siswa','nilai_siswa',
		'materi_siswa','portofolio_siswa','pembayaran_siswa']);*/
		
	}
	function index()

	{
		
		$data['content_view'] = 'mapel/mapel_v';
		$data['materi_pembelajaran']=$this->m_mapel->index();
		$this->template->template_admin($data);
	}

	function tambahmapel()
	{
		
		$data['content_view'] = 'mapel/tambahmapel_v';
		$this->template->template_admin($data);
	}

	function post_mapel()
	{
			$in= array();
			$in['nama_materi']= $this->input->post('nama_materi');
			$in['level_id']= $this->input->post('level_id');
			$in['kelas_id']= $this->input->post('kelas_id');
			$in['file_materi']= $this->input->post('file_materi');

			$res= $this->m_mapel->tambahmapel($in);

			echo " <script>alert('Data Berhasil disimpan !!!');history.go(-1);</script>";
			redirect('mapel');
		}

	function edit_data($id)
		{
			// object - array
			// object => result() => $this->db->get->result()
			// array => result() => $this->db->get->row()

			$data['content_view']= 'mapel/editmapel_v';
			$this->db->select('*')->from('materi');
			$this->db->where('id',$id);
			// $data['sejarah']= $this->m_sejarah->edit_data($id);
			$data['materi']= $this->db->get()->row();
			// print_r($data['sejarah'])
			$this->template->template_admin($data);	

		}
 

	function update_data()
		{
			$nis = $this->input->post('id');
			$tb_user = $this->input->post('materi');
			$this->db->where('id',$id);
			$this->db->update('materi', array('id'=>$nis));
			// $in=array();

			// $in['sejarah']=$this->input->post('tentang');
			

			// $res= $this->m_sejarah->update_data($in);

			// echo " <script>alert('Data Berhasil diedit !!!');history.go(-1);</script>";
			redirect('mapel');
		}

	function hapus_data($id)
		{

			$this->m_mapel->hapus_data($id);
			
			
			redirect('mapel');
		}

}
?>