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
        $data['comment_read']=$this->art->comment_read($gid);

        $this->load->view('index/header',$data);
        $this->load->view('index/main-read');

        $data['title']=$this->art->title('10');
        $this->load->view('index/main-sidebar',$data);
        
        $data['ftitle']=$this->art->title('3');
        $this->load->view('index/footer',$data);

	}

    /**
      * send comment
      */

     public function comment_add(){

            $gid=$this->uri->segment(3);
            $comment=$this->input->post('comment');
            $data=array(
               'gid'=>$gid,
               'date'=>time(),
               'comment'=>$comment,
            );
            if($comment==''){
                error('Not NULL');
            }
            $this->art->comment_add($data);
            success('home/article/'.$gid,'success！----->');        

     }

   public function api(){
        
 
     $segments=$this->uri->uri_to_assoc();    //默认是3
     $this->load->model('api_model','api');
     $data['find_num']=$this->api->find_num($segments['number']);
     if($data['find_num']['errNum'] ==0){
        echo '该手机号码来自：'.$data['find_num']['retData']['city'].'<br />';
        echo '运营商为：'.$data['find_num']['retData']['supplier'];
     }else{
        echo '错误：'.$data['find_num']['retMsg'];
     };

  
    }

    /**
     * about me
     */
    public function about_me(){

        $data=$this->art->check();

        $this->load->view('index/header',$data);
        $this->load->view('index/main-post');

        $data['title']=$this->art->title('10');
        $this->load->view('index/main-sidebar',$data);

        $data['ftitle']=$this->art->title('3');
        $this->load->view('index/footer',$data);
    }


}