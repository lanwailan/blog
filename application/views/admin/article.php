<script type="text/javascript" charset="utf-8" src="<?php echo base_url() ?>org/ueditor/ueditor.config.js"></script>
<script type="text/javascript"  charset="utf-8" src="<?php echo base_url() ?>org/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url() ?>org/ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
         window.UEDITOR_HOME_URL="<?php echo base_url() ?>org/ueditor1/";
         window.onload=function(){
      
            UE.getEditor('editor1');
         }
</script>

<div class="main-content">
  <div class="container">
    <div class="row">
    <form action="<?php echo site_url('article/send') ?>" method="POST" enctype="multipart/form-data">
      <div class="col-sm-7" style="background:#ffffff;margin-right:20px;padding:15px;">
             <table class="table table-bordered">
                <div class="form-group">
                    <label for="name">输入文章标题:<span style="color:#f00;"><?php echo form_error('title') ?></span></label>
                    <input type="text" class="form-control" placeholder="文章标题从这里开始...." name="title" value="<?php echo set_value('title') ?>">
                    
                </div>
                
               <div class="form-group">
                     <label for="name">摘要:<span style="color:#f00;"><?php echo form_error('excerpt') ?></span></label>
                     <textarea class="form-control" rows="3" name="excerpt"><?php echo set_value('excerpt') ?></textarea>
                     
                </div>
                <div class="form-group">
                     <label for="name">文章内容:<span style="color:#f00;"><?php echo form_error('content') ?></span></label>
                     <div id="editor1"name="content" style="width:100%;height:500px;"><?php echo set_value('content') ?></div>
                    
                </div>
             </table>
      </div>
      <div class="col-sm-4" >
          <div class="row">
             <!--文章发布-->
             <div class="col-sm-12" style="background:#ffffff;padding:15px;margin-bottom:5px;">
                 <div class="panel panel-success">
                     <div class="panel-heading">
                        <h3 class="panel-title">发布</h3>
                     </div>
                     <div class="panel-body">
                        这是一个基本的面板
                     </div>
                     <div class="panel-footer">
                        <button type="submit" class="btn btn-default" onclick="getContent()">发布文章</button>
                     </div>
                </div>
             </div>

             <!--文章分类选择-->
             <div class="col-sm-12" style="background:#ffffff;padding:15px;margin-bottom:5px;">
                  <div class="panel panel-success">
                      <div class="panel-heading">
                         <h3 class="panel-title">分类栏目</h3>
                      </div>
                      <div class="panel-body">
                         <ul id="myTab" class="nav nav-tabs">
                            <li class="active">
                               <a href="#allsort" data-toggle="tab">
                                  所有分类栏目
                               </a>
                            </li>
                            <li><a href="#categorymostuse" data-toggle="tab">最常用</a></li>
                          </ul>
                          <div id="myTabContent" class="tab-content">
                              <div class="tab-pane fade in active" id="allsort">
                                 <select class="form-control" name="sortid">
                                  <?php foreach($sort as $v): ?>
                                      <option value="<?php echo $v['sid'] ?>"><?php echo $v['sortname'] ?></option>
                                  <?php endforeach ?>
                                 </select>
                              </div>
                              <div class="tab-pane fade" id="categorymostuse">
                                 <p>iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                                 TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。</p>
                             </div>
                          </div>                        
                      </div>
                
                  </div>
             </div>
             <!--文章缩略图-->
             <div class="col-sm-12" style="background:#ffffff;padding:15px;">
                 <div class="panel panel-success">
                     <div class="panel-heading">
                        <h3 class="panel-title">文章缩略图</h3>
                     </div>
                     <div class="panel-body">
                        <div class="form-group">
                              <label class="sr-only" for="inputfile">文件输入</label>
                              <input type="file" id="inputfile" name="thumb">
                        </div>
                     </div>
                </div>
             </div>


          </div>            
      </div>
      </form>
     </div>
    </div>
  </div>
</div>