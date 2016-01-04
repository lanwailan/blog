<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 后台用户
 */
class Login_model extends CI_Model{

    /**
     * 查询后台用户数据
     */
    public function check($username){

    	//$this->db->where->get();
    	$data=$this->db->get_where('user',array('username'=>$username))->result_array();
        //$data=$this->db->where(array('username'=>'oocco'))->get('user')->result_array();
    	return $data;

    }

    /**
     * 密码修改
     */
    public function change($uid,$data){
         $this->db->update('user',$data,array('uid'=>$uid));
    }

    /**
     * 
     */
}