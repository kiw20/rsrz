<?php
class m_pembayaran extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
	}

	function index()
		{
			$query= $this->db->query("SELECT * from tb_pembayaran order by id asc");
			return $query;

		}

	// function tambahmapel($in)
	// 	{
	// 		$this->db->insert('materi', $in);
	// 	}

	// function edit_data($in)
 //        {
 //            $this->db->select('*');
 //            $this->db->from('materi');
 //            $this->db->where('id', $id);

 //            $data= $this->db->get();
 //            return $data;
 //        }

 //    function update_data($in)
 //        {
 //            $this->db->where('id', $in['id']);
 //            $this->db->update('materi', $in);
 //        }
	 
 //    function hapus_data($id)
	// 	{

	// 		$this->db->where('id', $id);
	// 		$this->db->delete('materi');
	// 	}
}	
?>