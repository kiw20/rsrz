<?php

class portofolio extends MY_Controller
{

	function __construct()
	{
		parent:: __construct();
	}


	function index()

	{
		
		$data['content_view'] = 'portofolio/portofolio_v';
		$this->template->template_admin($data);
	}
}
?>