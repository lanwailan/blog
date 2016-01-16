<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Article_model extends CI_Model{

	/**
	 * 插入文章操作
	 */

	public function add($data){
		$this->db->insert('blog',$data);
	}
	 /**
       * update article
       */
      public function update_article($gid,$data){
         $this->db->update('blog',$data,array('gid'=>$gid));
      }
	  /**
       * article delete
       */
	 public function del_art($gid){
      	$this->db->delete('blog',array('gid'=>$gid));
      }
      /**
       * admin article view
       */
      /**
       * article tag
       */
      public function tag_add($data){
      	$this->db->insert_batch('tag',$data);
      }
      public function view($gid){

      	$data=$this->db->get_where('blog',array('gid'=>$gid))->result_array();
      	return $data;
      }

	public function article_category(){
		$data=$this->db->select('gid,title,sortname,date')->from('blog')->join('sort','blog.sortid=sort.sid')->order_by('gid','desc')->get()->result_array();
		return $data;
	}

	/**
	 * index-article
	 */
	public function check(){
		$data['art']=$this->db->select('gid,title,date,excerpt,username,thumb,sortname,sortid')->from('blog')->join('sort','blog.sortid=sort.sid')->join('user','blog.author=user.uid')->order_by('date','desc')->get()->result_array();
		//$data['news']=$this->db->select('aid,title')->order_by('time','desc')->get('article')->result_array();
		
		return $data;
	}

	/**
	 * sidebar article list
	 */
	public function title($limit){
		$data=$this->db->select('gid,title,date')->limit($limit)->order_by('date','desc')->get('blog')->result_array();
		return $data;
	}

	/**
	 * category article
	 */
	public function art_cate($sid){
         $data=$this->db->select('gid,title,username,date,excerpt,thumb')->join('user','blog.author=user.uid')->order_by('date','desc')->get_where('blog',array('sortid'=>$sid))->result_array();
         return $data;
	}

	/**
	 * index article read
	 */

	public function article_read($gid){

		//$data=$this->db->select('gid,title,author,date,content,sortname')->join('sort','blog.sortid=sort.sid')->get_where('blog',array('gid'=>$gid))->result_array();
		//return $data;
		$this->db->select('gid,title,username,date,content,sortname');
		$this->db->from('blog');
		$this->db->where('gid',$gid);
		$this->db->join('sort','blog.sortid=sort.sid');
		$this->db->join('user','blog.author=user.uid');
		$data=$this->db->get()->result_array();
        
        return $data;

	}

	/**
	 * article comment
	 */

	public function comment_read($gid){
		$data=$this->db->select('date,comment')->order_by('date','desc')->get_where('comment',array('gid'=>$gid))->result_array();
		return $data;
	}

	/**
	 * article comment add
	 */

	public function comment_add($data){
          $this->db->insert('comment',$data);
	}

	/**
	 * admin comment read
	 */

	public function comment_show(){
		//$data=$this->db->select('cid,gid,date,title,comment')->order_by('date','desc')->join('blog','comment.gid=blog.gid')->from('comment')->get()->result_array();
        //return $data;

        $this->db->select('cid,comment.gid,poster,title,comment.date,comment');
		$this->db->from('comment');
		$this->db->join('blog','comment.gid=blog.gid');
		$data=$this->db->get()->result_array();
        
        return $data;
	}

	/**
	 * admin comment delete
	 */
	public function comment_dele($cid){
		$this->db->delete('comment',array('cid'=>$cid));
	}



}
