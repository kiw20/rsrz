<?php

class Template extends MY_Controller
{

	function __construct()
	{
		parent:: __construct();
	}

	function template_admin($data=NULL) //memanggil template admin view
	{
		$this->load->view('template/template_admin_v',$data);
	}

}
?>