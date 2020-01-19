<?php

class M_mapel extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
	}

	function index()
		{
			$query= $this->db->query("SELECT * from materi INNER JOIN tb_kelas ON tb_kelas.id=materi.kelas_id INNER JOIN tb_level ON tb_level.id=materi.level_id order by materi.id asc");
			return $query;

		}

	function tambahmapel($in)
		{
			$this->db->insert('materi', $in);
		}

	function edit_data($in)
        {
            $this->db->select('*');
            $this->db->from('materi');
            $this->db->where('id', $id);

            $data= $this->db->get();
            return $data;
        }

    function update_data($in)
        {
            $this->db->where('id', $in['id']);
            $this->db->update('materi', $in);
        }
	 
    function hapus_data($id)
		{

			$this->db->where('id', $id);
			$this->db->delete('materi');
		}
}	
?>