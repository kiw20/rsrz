<?php

class M_sejarah extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
	}

	function index()
		{
			$query= $this->db->query("SELECT * from tentang order by sejarah asc");
			return $query;

		}

	function tambahsejarah($in)
		{
			$this->db->insert('tentang', $in);
		}

	function hapus_data($sejarah)
		{

			$this->db->where('id', $sejarah);
			$this->db->delete('tentang');
		}

	function edit_data($sejarah)
		{
			$this->db->select('*');
			$this->db->from('tentang');
			$this->db->where('sejarah', $sejarah);

			$data= $this->db->get();
			return $data;
		}

		function update_data($in)
		{
			$this->db->where('sejarah', $in['sejarah']);
			$this->db->update('tentang', $in);
		}


}
?>	