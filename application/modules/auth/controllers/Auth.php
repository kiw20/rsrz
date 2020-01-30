<?php 
/**
 * 
 */
class Auth extends MY_Controller
{
	function index(){
		$this->load->view('v_auth');
	}
	function login(){
		if (isset($_POST['submit'])) {
			$this->db->select('*')->from('member');
			$this->db->join('tb_role','member.role_id=tb_role.id');
			$this->db->join('tb_user','member.user_id=tb_user.nis');
			$this->db->where('username',$this->input->post('username'));
			$this->db->where('password',md5($this->input->post('password')));
			$data = $this->db->get()->row_array();
			$this->session->set_userdata($data);
			// print_r($data);
			// print_r($this->session->userdata('nama_lengkap'));
			redirect('Home_admin');
			
		}else{
			redirect('Auth');
		}
	}
	function register(){

	}
	function logout(){
		$this->session->sess_destroy();
		redirect('Auth/login');
	}
}