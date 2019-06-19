<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Semnasti extends CI_Controller {

	function index()
	{
		echo "ini index cek";
	}

	function pemrograman(){
		$this->load->view('admin/index') ;
	}

	function semnas(){
		return redirect(site_url('welcome'));
	}


}
