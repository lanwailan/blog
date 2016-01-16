<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	public function index(){

        $data['comment_count']=$this->db->count_all_results('comment');
        $data['article_count']=$this->db->count_all_results('blog');

		$this->load->view('admin/header',$data);
		$this->load->view('admin/index.html');
		$this->load->view('admin/footer');
	}

	/**
	 * 修改密码模版显示
	 */

	public function code(){
		$this->load->view('admin/header');
		$this->load->view('admin/code.html');
		$this->load->view('admin/footer');
	}

    /**
     * 修改密码
     */
	public function change_passwd(){

    	$this->load->model('login_model','admin');

    	$username=$this->session->userdata('username');
    	$userData=$this->admin->check($username);
        $passwd=$this->input->post('passwd');
    	if($userData[0]['password']!=md5($passwd)){
    		error('原始密码不正确');
    	}

    	$passwdF=$this->input->post('passwdF');
    	$passwdC=$this->input->post('passwdC');

    	if($passwdF!=$passwdC || $passwdF==''){
    		error('两次密码不一致！或密码输入为空');
    	}

    	$uid=$this->session->userdata('uid');
    	$passwd=$this->input->post('passwdF');
    	$data=array(
            'password'=>md5($passwd)
    		);

    	$this->admin->change($uid,$data); 
    	success('admin/code','修改密码成功！');

    }

    /**
     * system info
     */

    public function systeminfo(){
    	
    	$this->load->view('admin/header');
    	$this->load->view('admin/systeminfo.html');
    	$this->load->view('admin/footer');
    }
}