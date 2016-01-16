
            <aside class="col-md-4 sidebar">
                <div class="widget">
                    <h4 class="title">最新文章</h4>
                    <ul >
                    <?php foreach($title as $v): ?>
                        <a href="<?php echo site_url('home/article').'/'.$v['gid'] ?>"><li><?php echo $v['title'] ?></li></a>
                    <?php endforeach ?>
                    </ul>
                </div>

                <div class="widget">
                    <h4 class="title">标签云</h4>
                    <div class="content tag-cloud">
                       <a href="#">CI</a>
                       <a href="#">php</a>
                       <a href="#">css</a>
                       <a href="#">js</a>
                    </div>
                </div>

                <div class="widget">
                    <h4 class="title">api测试</h4>
                
                    <label>输入手机号码：</label>
                    <input type="text" id="number">
                    <p id="txtHint"></p>
                    <button class="btn btn-default" id="button">查询手机归属地</button>
                   
                   
                </div>
                <script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
                <script>
                   $(document).ready(function(){
                    $("#button").click(function(){
                        var number=$("#number").val();
                         if(number==""){
                           alert('号码不能为空');
                            return false;
                          }
                          if(number.length!=11){
                             alert('请输入11位号码啊');
                             return false;
                          }
                       var oajax= $.ajax({
                          type:'GET',
                          url:'<?php echo site_url('home/api/number')?>'+'/'+number,
                          dataType:'html',
                          success:function(data){
                            
                             $('#txtHint').html(data);
                            return true;
                          },
                          error:function(){
                            alert('failed');
                            return false;
                          } 
                        });
                      
                       
                    });
                   });
                </script>
            </aside>
        </div>
    </div>
</div>
<!--end maincontent-->