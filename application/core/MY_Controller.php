<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//必须MY开头，在config.php 中配置，$config['subclass_prefix']='MY_'
class MY_Controller extends CI_Controller{  

	public function __construct(){
		parent::__construct();

		$username=$this->session->userdata('username');
		$uid=$this->session->userdata('uid');
		if(!$username || !$uid) {

			redirect('login/index');
		}

	}


}