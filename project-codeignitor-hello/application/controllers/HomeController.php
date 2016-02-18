<?php
	/**
	* 
	*/
	class HomeController extends CI_Controller
	{
		
		public function index()
		{
			$data['val'] = array("navee", "test");
			$this->load->view('HomeView', $data);
		}
	}
?>