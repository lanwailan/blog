<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

		public function __construct(){

		parent::__construct();
		$this->load->helper(array('form','url'));
        $this->load->model('login_model','login');

	}

   public function index(){

   	//载入验证码辅助函数
		 $this->load->helper('captcha');
         //$this->output->enable_profiler(TRUE);
         $speed='kjasdakjdhfui898387892kjhf';
         $word='';
         for($i=0;$i<4;$i++){
         	$word.=$speed[mt_rand(0,strlen($speed)-1)];
         }
         //echo $word;die;
		//配置项
		$vals=array(
            'word'=>$word,
			'img_path'=>'./captcha/',
			'img_url' =>base_url() . '/captcha/',
			'img_width'=>65,
			'img_height'=>25,
			'expiration'=>50
			);

        //创建验证码
		$capt=create_captcha($vals);
		$data['captcha']=$capt['image'];  //得到图片
        if(!isset($_SESSION)){
        	session_start();
        }
		$_SESSION['code']=$capt['word'];

		$this->load->view('admin/login',$data);
   }


   public function login_in(){

		$code=$this->input->post('captcha');

		if(!isset($_SESSION)){
			session_start();
		}

		if($code==NULL){
			error('请输入验证码');die;
		}
		if($code!=$_SESSION['code']){
			error('验证码错误，请再输入一次！');
		}
        //$this->output->enable_profiler(TRUE);
		$username=$this->input->post('username');
        //p($username);

		
		$userdata=$this->login->check($username);
		
		//p($userdata);die;
		$passwd=$this->input->post('passwd');
		//p($userdata[0]['password']);
		//echo '<hr />';
		//p(md5($passwd));die;
        
        if(!$userdata || $userdata[0]['password']!=md5($passwd)){

        	error('用户名或者密码不正确！');
        }
        $sessiondata=array(
        	'username'=>$username,
        	'uid'=>$userdata[0]['uid'],
        	'logintime'=>time()

        	);
        $this->session->set_userdata($sessiondata);  //写入session
        //$data=$this->session->userdata('username');
        success('admin/index','登录成功！>>>>>>>>>>');
	}

	/**
	 * 登录退出
	 */

	public function login_out(){

		$this->session->sess_destroy();
		success('login/index','退出成功！');
	}

}