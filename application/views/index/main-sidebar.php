
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
                    <h4 class="title">最新文章</h4>
                    <ul >
                    <?php foreach($title as $v): ?>
                        <a href="<?php echo site_url('home/article').'/'.$v['gid'] ?>"><li><?php echo $v['title'] ?></li></a>
                    <?php endforeach ?>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</div>
<!--end maincontent-->