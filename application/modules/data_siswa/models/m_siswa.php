<?php

class M_siswa extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
    }

    function index()
        {
            $query= $this->db->query("SELECT * from tb_user INNER JOIN tb_kelas ON tb_kelas.id=tb_user.kelas_id  order by nis asc");
            return $query;

        }
    function get_kelas(){
        $this->db->select('*')->from('tb_kelas');
        $data = $this->db->get();
        return $data->result();
    }

    function tambahsiswa($in)
        {
            $this->db->insert('tb_user', $in);
        }
 
    function edit_data()
        {
            // $this->db->select('*');
            // $this->db->from('tb_user');
            $nis=$this->input->post('nis');
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
            $this->db->where('nis', $nis);
            return $this->db->update('tb_user', $in);
            // $data= $this->db->get();
            // return $data;
        }

    function update_data($in)
        {
            $this->db->where('nis', $in['nis']);
            $this->db->update('tb_user', $in);
        }

    function hapus_data($nis)
		{

			$this->db->where('nis', $nis);
			$this->db->delete('tb_user');
		}
}     
?>