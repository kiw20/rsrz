<?php

class M_kontak extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
	}

	function index()
		{
			$query= $this->db->query("SELECT * from contact order by id_contact asc");
			return $query;

		}

	// function tambahsejarah($in)
	// 	{
	// 		$this->db->insert('contact', $in);
	// 	}

}	
?>