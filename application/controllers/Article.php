<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends MY_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->helper(array('form','url'));
        $this->load->model('category_model','cate');
        $this->load->model('article_model','art');
        $this->load->library('pagination');

	}

	public function index(){
		//分页开始
		//$this->output->enable_profiler(TRUE); 
		$data['sort']=$this->cate->check();
        //配置项设置
         $perpage=3;
         $config['base_url']=site_url('article/index');
         $config['total_rows']=$this->db->count_all_results('blog');
         $config['per_page']=$perpage;
         $config['uri_segment']=3;
         $config['fist_link']='第一页';
         $config['last_link']='尾页';
         $config['prev_link']='上一页';
         $config['next_link']='下一页';

         $this->pagination->initialize($config);

         $data['links']=$this->pagination->create_links();
         //p($data);die;
         $offset=$this->uri->segment(3);
         $this->db->limit($perpage,$offset);


        

        $data['article']=$this->art->article_category();
       // p($data);die;
        $this->load->view('admin/header',$data);
        $this->load->view('admin/check_article');
        $this->load->view('admin/footer');

	}

	/**
	 * 发表文章模版显示
	 */
	public function send_article(){

        $data['sort']=$this->cate->check();
        $this->load->view('admin/header',$data);
		$this->load->view('admin/article');
		$this->load->view('admin/footer');
	}

	/**
	 * 发表文章动作
	 */

	public function send(){

		//文件上传配置
        $config['upload_path']='./uploads/';
        $config['allowed_types']='gif|jpg|png|jpeg|JPEG|JPG|GIF';
        $config['max_size']='1000';
        $config['max_width']='2048';
        $config['max_height']='1536';
        $config['file_name']=time().mt_rand(1000,9999);

        //载入上传类
         $this->load->library('upload',$config);
         $this->upload->initialize($config);
         $status=$this->upload->do_upload('thumb');

        if(!$status){
           error('请上传特色图片');
        }

        $wrong=$this->upload->display_errors();
        //p($wrong);die;
        if($wrong){
        	error($wrong);
        }

        //返回信息
        $info=$this->upload->data();
        
        //缩略图---------------
        //配置
        $arr['source_image'] = $info['full_path'];
        $arr['create_thumb'] = FALSE;
        $arr['maintain_ratio'] = TRUE;
        $arr['width']     = 680;
        $arr['height']   = 510;
        
        //载入缩略图类
        $this->load->library('image_lib', $arr);
        //执行缩放动作
        $status=$this->image_lib->resize();
            
        if(!$status){
          error('缩略图失败');
        }
		//载入表单验证类
		$this->load->library('form_validation');
		//设置规则
		//$this->form_validation->set_rules('title','文章标题','required|min_length[5]');
		//执行验证
		$status=$this->form_validation->run('article');

		if($status){
			$title=$this->input->post('title');
			$content=$this->input->post('content');
			$excerpt=$this->input->post('excerpt');
            $sortid=$this->input->post('sortid');
			$data=array(
                'title'=>$title,
                'date'=>time(),
                'content'=>$content,
                'excerpt'=>$excerpt,
                'author'=>'jesscia',
                'sortid'=>$sortid,
                'thumb'=>$info['file_name']
				);
			$this->art->add($data);
			success('article/index','发表成功!>>>>>>>>跳转到查看文章页面');

		}else {
            $this->load->view('admin/header');
		    $this->load->view('admin/article');
		    $this->load->view('admin/footer');
		}
		
	}

    /**
     * 编辑文章页面显示
     */
	public function edit_article(){
        $this->load->view('admin/header');
        $this->load->view('admin/edit_article');
        $this->load->view('admin/footer');
	}

	/**
	 * 编辑文章动作
	 */
	public function edit(){
		$this->load->library('form_validation');
		$status=$this->form_validation->run('article');

		if($status){
			echo '数据库更新操作';

		}else {
            $this->load->view('admin/header');
		    $this->load->view('admin/edit_article');
		    $this->load->view('admin/footer');
		}
	}
    /**
     * 删除文章操作
     */

    public function del_art(){

        $gid=$this->uri->segment(3);
        $status=$this->art->del_art($gid);
        success('article/index','删除文章成功');
        
    }
}