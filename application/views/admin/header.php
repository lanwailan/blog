<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Lanwailan- 个人博客后台管理系统</title>
    <meta name="description" content="Lanwailan- web 学习个人博客" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'style/admin/'?>css/admin.css">
    <!-- Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="<?php echo base_url() . 'style/index/'?>css/bootstrap.min.css">
<base target="iframe"/>
</head>
<body>
    

<!-- Navigation -->
<div class="main-nav">

  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <nav class="navbar navbar-green navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Lanwailan后台管理系统</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Lanwailan <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Profile</a>
                        </li>
                        <li>
                            <a href="#">Inbox</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('login/login_out') ?>">Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse" id="navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="">
                        <a href="<?php echo site_url('admin/index') ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 主面板</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#smenu"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> 常用菜单 +</a>
                        <ul id="smenu" class="collapse">
                            <li>
                                <a href="<?php echo base_url() ?>"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>__前台首页</a>
                            </li>
                            <li>
                                <a href="#"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>__系统信息</a>
                            </li>
                            <li>
                                <a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>__添加管理员</a>
                            </li>
                            <li>
                                <a href="#"><span class="glyphicon glyphicon-leaf" aria-hidden="true"></span>__密码修改</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#sarticle"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> 文章管理 +</a>
                        <ul id="sarticle" class="collapse">
                            <li>
                                <a href="<?php echo site_url('article/send_article') ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>__新建文章</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('article/index') ?>"><span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span>__查看文章</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#category"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 分类管理 +</a>
                        <ul id="category" class="collapse">
                            <li>
                                <a href="<?php echo site_url('category/add_cate') ?>"><span class="glyphicon glyphicon-copy" aria-hidden="true"></span>__添加分类</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('category/index') ?>"><span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span>__查看分类</a>
                            </li>
                        </ul>
                    </li>
    
                </ul>
            </div>
<!-- /.navbar-collapse -->
         </nav>
      </div>
    </div>
  </div>
</div>
<!-- 右侧 -->