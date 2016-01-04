<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){

        parent::__construct();
        $this->load->model('category_model','cate');  //载入模型
        $this->load->model('article_model','art');
    }
    /**
     * 前台首页
     */
	public function index(){
        
        $data=$this->art->check();

        $this->load->view('index/header',$data);
        $this->load->view('index/main-post');

        $data['title']=$this->art->title('10');
        $this->load->view('index/main-sidebar',$data);

        $data['ftitle']=$this->art->title('3');
        $this->load->view('index/footer',$data);
	}

	/**
	 * 分类页文章
	 */

	public function category(){
       
        $sid=$this->uri->segment(3);

        $data['art_cate']=$this->art->art_cate($sid);

		$this->load->view('index/header',$data);
        $this->load->view('index/main-sort');

         $data['title']=$this->art->title('10');
        $this->load->view('index/main-sidebar',$data);

        $data['ftitle']=$this->art->title('3');
        $this->load->view('index/footer',$data);
	}

	/**
     * 文章查看
     */

	public function article(){
        
        $gid=$this->uri->segment(3);
        $data['article_read']=$this->art->article_read($gid);

        $this->load->view('index/header',$data);
        $this->load->view('index/main-read');

        $data['title']=$this->art->title('10');
        $this->load->view('index/main-sidebar',$data);
        
        $data['ftitle']=$this->art->title('3');
        $this->load->view('index/footer',$data);

	}


}