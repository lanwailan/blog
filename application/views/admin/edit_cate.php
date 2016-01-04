<div class="main-content">
  <div class="container">
    <div class="row">
    	<form action="<?php echo site_url('category/edit') ?>" method="POST" enctype="multipart/form-data">
             <div class="col-sm-7" style="background:#ffffff;margin-right:20px;padding:15px;">
                <table class="table table-bordered">
                   <div class="form-group">

                    <div class="panel panel-success">
                       <div class="panel-heading">
                          <h3 class="panel-title">编辑分类:</h3>
                       </div>
                       <div class="panel-body">  
                          <tr>
                            <td>修改前</td>
                            <td>修改后</td>
                          </tr>                    
                         <tr>
                           <td><?php echo $check_cate[0]['sortname'] ?></td>
                           <td><input type="text" class="form-control" placeholder="你确定这里是空？" name="sortname" value=""></td>
                         </tr>
                         <tr>
                           <td ><?php echo $check_cate[0]['description'] ?></td>
                           <td > <textarea class="form-control" rows="2" name="description" placeholder=""><?php echo set_value('description') ?></textarea></td>
                         </tr>
                          <tr>
                            <input type="hidden" name="sid" value="<?php echo $check_cate[0]['sid'] ?>">
                            <td colspan="10"><button type="submit" class="btn btn-default">确定修改</button></td>
                          </tr>

                       </div>
                    </div> 

                </table>
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