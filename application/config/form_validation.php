<?php
$config =array(

	'article'=> array(
		array(
			'field'=>'title',
			'label'=>'标题',
			'rules'=>'required'
		),
		array(
           'field'=>'sortid',
			'label'=>'栏目',
			'rules'=>'integer'
		),
		array(
           'field'=>'excerpt',
			'label'=>'摘要',
			'rules'=>'required|max_length[240]'
		),
		array(
           'field'=>'content',
			'label'=>'文章内容',
			'rules'=>'required'
		)
	),
	'sort'=>array(
        array(
            'field'=>'sortname',
            'label'=>'分类名称',
            'rules'=>'required|max_length[20]'

        	),
        array(
        	'field'=>'description',
        	'label'=>'分类详细描述',
            'rules'=>'max_length[144]'
        	)
	),
	'comments'=>array(
		array(
			'field'=>'comment',
			'label'=>'评论',
			'rules'=>'required|maxlength[144]'
			)

		)
	
);