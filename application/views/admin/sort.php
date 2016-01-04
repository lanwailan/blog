<div class="main-content">
  <div class="container">
    <div class="row">
    	<form action="" method="POST" enctype="multipart/form-data">
             <div class="col-sm-7" style="background:#ffffff;margin-right:20px;padding:15px;">
                
                   <div class="form-group">

                    <div class="panel panel-success">
                       <div class="panel-heading">
                          <h3 class="panel-title">分类查看:</h3>
                       </div>
                       <div class="panel-body">
                         <table class="table table-bordered">
                            <tr>
                              <td>Sid</td>
                              <td>分类名称</td>
                              <td>分类描述</td>
                              <td>操作</td>
                            </tr>
                            <?php foreach($sort as $v): ?>
                            <tr>
                              <td><?php echo $v['sid']; ?></td>
                              <td><?php echo $v['sortname']; ?></td>
                              <td><?php echo $v['description']; ?></td>
                              <td>
                                  [<a href="<?php echo site_url('category/edit_cate/').'/'.$v['sid'] ?>">编辑</a>]
                                  [<a href="<?php echo site_url('category/del_cate/').'/'.$v['sid'] ?>">删除</a>]
                              </td>
                            </tr>
                          <?php endforeach ?>
                          </table>
                         </div>

                       </div>
                       <div class="panel-footer">
                          
                       </div> 
                    </div> 
             </div>

             <div class="col-sm-4" >
               <div class="row">
             <!--文章发布-->
                <div class="col-sm-12" style="background:#ffffff;padding:15px;margin-bottom:5px;">
                  <div class="panel panel-success">
                     <div class="panel-heading">
                        <h3 class="panel-title">所有分类目录</h3>
                     </div>
                     <div class="panel-body">
                        <ul>
                        <?php foreach($sort as $v): ?>
                          <li><?php echo $v['sortname']; ?></li>
                        <?php endforeach ?>
                        </ul>
                     </div>
                     
                  </div>
               </div>
            </div>
           </div>
    	</form>
    </div>
  </div>
</div>