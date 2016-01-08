<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->helper('form');
		$this->load->model('category_model','cate');
	}

	public function index(){

		$data['sort']=$this->cate->check();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/category.html');
		$this->load->view('admin/footer');
	}

     /**
      * 添加栏目
      */

     public function add_cate(){

     	//$this->output->enable_profiler(TRUE);
     	$this->load->view('admin/header');
     	$this->load->view('admin/add_category.html');
     	$this->load->view('admin/footer');
     }

     public function add(){
     	$this->load->library('form_validation');
		$status=$this->form_validation->run('sort');

		if($status){
			//echo '数据库更新操作';
			$data=array(
                'sortname'=>$this->input->post('sortname'),
                'description'=>$this->input->post('description')

				);
			$this->cate->add($data);
			success('category/index','添加成功');


		}else {
            $this->load->view('admin/header');
		    $this->load->view('admin/add_cate');
		    $this->load->view('admin/footer');
		}
     }

     /**
      * 编辑删除分类栏目
      */

     public function edit_cate(){
        
        $sid=$this->uri->segment(3);
        $data['check_cate']=$this->cate->check_cate($sid);
     	$data['sort']=$this->cate->check();
     	$this->load->view('admin/header',$data);
     	$this->load->view('admin/edit_category.html');
     	$this->load->view('admin/footer');
     }

     public function edit(){
     	$this->load->library('form_validation');
		$status=$this->form_validation->run('sort');
        $data['sort']=$this->cate->check();

		if($status){
			$sid=$this->input->post('sid');
			$sortname=$this->input->post('sortname');
			$description=$this->input->post('description');
			$data=array(
                'sid'=>$sid,
                'sortname'=>$sortname,
                'description'=>$description
				);
			$this->cate->update_cate($sid,$data);

			success('category/index','更新栏目名称成功');

		}else {
            $this->load->view('admin/header',$data);
		    $this->load->view('admin/edit_cate');
		    $this->load->view('admin/footer');
		}
     }

     public function del_cate(){

     	$sid=$this->uri->segment(3);
     	$this->cate->del_cate($sid);
     	success('category/index','删除成功!');
     }


}