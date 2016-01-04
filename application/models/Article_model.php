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
       * delete
       */
	 public function del_art($gid){
      	$this->db->delete('blog',array('gid'=>$gid));
      }

	public function article_category(){
		$data=$this->db->select('gid,title,sortname,date')->from('blog')->join('sort','blog.sortid=sort.sid')->order_by('gid','desc')->get()->result_array();
		return $data;
	}

	/**
	 * 首页查询文章
	 */
	public function check(){
		$data['art']=$this->db->select('gid,title,date,excerpt,author,thumb,sortname,sortid')->from('blog')->join('sort','blog.sortid=sort.sid')->order_by('date','desc')->get()->result_array();
		//$data['news']=$this->db->select('aid,title')->order_by('time','desc')->get('article')->result_array();
		
		return $data;
	}

	/**
	 * 右侧文章查询
	 */
	public function title($limit){
		$data=$this->db->select('gid,title,date')->limit($limit)->order_by('date','desc')->get('blog')->result_array();
		return $data;
	}

	/**
	 * 分类文章阅读
	 */
	public function art_cate($sid){
         $data=$this->db->select('gid,title,author,date,excerpt,thumb')->order_by('date','desc')->get_where('blog',array('sortid'=>$sid))->result_array();
         return $data;
	}

	/**
	 * 首页文章阅读查询
	 */

	public function article_read($gid){

		$data=$this->db->select('gid,title,date,author,content,sortname')->join('sort','blog.sortid=sort.sid')->get_where('blog',array('gid'=>$gid))->result_array();
		return $data;
	}



}
