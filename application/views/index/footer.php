<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="widget">
                    <h4 class="title">最新文章</h4>
                    <div class="recent-post">
                       <?php foreach($ftitle as $v): ?>
                        <div class="recent-single-post">
                            <a href="<?php echo site_url('home/article').'/'.$v['gid'] ?>" class="post-title"><?php echo $v['title'] ?></a>
                            <div class="date"><?php echo date('Y',$v['date']) ?>年<?php echo date('m',$v['date']) ?>月<?php echo date('d',$v['date']) ?>日</div>
                        </div>
                    <?php endforeach ?>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="widget">
                    <h4 class="title">标签云</h4>
                    <div class="content tag-cloud">
                       <a href="#">CI</a>
                       <a href="#">php</a>
                       <a href="#">css</a>
                       <a href="#">js</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="widget">
                    <h4 class="title">合作伙伴</h4>
                    <div class="content tag-cloud friend-links">
                            <a href="http://www.bootcss.com" title="Bootstrap中文网" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'bootcsscom'])" target="_blank">Bootstrap中文网</a>
                            <a href="http://www.bootcdn.cn" title="开放CDN服务" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'bootcdncn'])" target="_blank">开放CDN服务</a>
                            <a href="http://www.gruntjs.net" title="Grunt中文网" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'gruntjsnet'])" target="_blank">Grunt中文网</a>
                            <a href="http://www.gulpjs.com.cn/" title="Gulp中文网" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'gulpjscomcn'])" target="_blank">Gulp中文网</a>
                            <a href="http://lodashjs.com/" title="Lodash中文文档" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'lodashjscom'])" target="_blank">Lodash中文文档</a>
                            <a href="http://www.jquery123.com/" title="jQuery中文文档" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'jquery123com'])" target="_blank">jQuery中文文档</a>
                            <a href="https://www.upyun.com/" title="又拍云" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'upyun'])" target="_blank">又拍云</a>
                            <a href="http://www.ucloud.cn/" title="UCloud" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'ucloud'])" target="_blank">UCloud</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--copyright-->
<div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <span>@Power By DongYi.lan--<a href="http://www.lanwailan.com/">蓝外蓝博客</a></span>
                </div>
            </div>
        </div>
</div>
 <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="<?php echo base_url() . 'style/index/'?>js/bootstrap.min.js"></script>   
</body>
</html>