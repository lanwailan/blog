<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Api_model extends CI_Model{

	public function find_num($num){
		 $ch = curl_init();
         $url = 'http://apis.baidu.com/apistore/mobilenumber/mobilenumber?phone='.$num;
         $header = array(
           'apikey: **********************',
         );
         // 添加apikey到header
        curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
        // 添加apikey到header

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
         // 执行HTTP请求
        curl_setopt($ch , CURLOPT_URL , $url);
        $res = curl_exec($ch);
        $data=json_decode($res,TRUE);
        return $data;
	}
}
