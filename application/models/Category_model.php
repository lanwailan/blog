<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

      public function add($data){
      	$this->db->insert('sort',$data);
      }

      /**
       * 或查看栏目
       */

      public function check(){

      	$data=$this->db->get('sort')->result_array();
      	return $data;
      }
      /**
       * 查询对应的栏目
       */

      public function check_cate($sid){
      	$data=$this->db->where(array('sid'=>$sid))->get('sort')->result_array();
      	return $data;
      }

      /**
       * 更新栏目名称
       */
      public function update_cate($sid,$data){
         $this->db->update('sort',$data,array('sid'=>$sid));

      }

      /**
       * delete
       */
      public function del_cate($sid){
      	$this->db->delete('sort',array('sid'=>$sid));
      }

}