<div class="main-content">
  <div class="container">
    <div class="row">
    	<form action="" method="POST" enctype="multipart/form-data">
             <div class="col-sm-9" style="background:#ffffff;margin-right:20px;padding:15px;">
                
                   <div class="form-group">

                    <div class="panel panel-success">
                       <div class="panel-heading">
                          <h3 class="panel-title">所有文章:</h3>
                       </div>
                       <div class="panel-body">
                         <table class="table table-bordered">
                            <tr>
                              <td>Gid</td>
                              <td>文章标题</td>
                              <td>所属分类</td>
                              <td>发表时间</td>
                              <td>操作</td>
                            </tr>
                            <?php foreach($article as $v): ?>
                            <tr>
                              <td><?php echo $v['gid']; ?></td>
                              <td><?php echo $v['title']; ?></td>
                              <td><?php echo $v['sortname']; ?></td>
                              <td><?php echo date('Y-m-d',$v['date']); ?></td>
                              <td>
                                  [<a href="<?php echo site_url('article/edit_article/').'/'.$v['gid'] ?>">编辑</a>]
                                  [<a href="<?php echo site_url('article/del_art/').'/'.$v['gid'] ?>">删除</a>]
                              </td>
                            </tr>
                          <?php endforeach ?>
                          </table>
                         </div>

                       </div>
                       <div class="panel-footer">
                           <?php echo $links ?>
                       </div> 
                    </div> 
             </div>

             <div class="col-sm-2" >
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