<div class="main-content">
  <div class="container">
    <div class="row">
    	<form action="<?php echo site_url('category/add') ?>" method="POST" enctype="multipart/form-data">
             <div class="col-sm-7" style="background:#ffffff;margin-right:20px;padding:15px;">
                <table class="table table-bordered">
                   <div class="form-group">

                    <div class="panel panel-success">
                       <div class="panel-heading">
                          <h3 class="panel-title">添加分类:</h3>
                       </div>
                       <div class="panel-body">
                          <input type="text" class="form-control" placeholder="添加分类...." name="sortname" value="<?php echo set_value('title') ?>">
                          <span style="color:#f00;"><?php echo form_error('sortname') ?></span>
                          <div class="form-group">
                               <label for="name">分类详细描述:<span style="color:#f00;"><?php echo form_error('description') ?></span></label>
                               <textarea class="form-control" rows="3" name="description"><?php echo set_value('description') ?></textarea>
                     
                         </div>

                       </div>
                       <div class="panel-footer">
                          <button type="submit" class="btn btn-default">添加分类</button>
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