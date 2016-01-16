<!--start maincontent-->
<div class="content-wrap">
    <div class="container">
        <div class="row">
            <main class="col-md-8 main-content">                
                <?php foreach($art_cate as $v): ?>
                <article class="post">
                    <div class="post-head">
                        <h1 class="post-title"><a href="<?php echo site_url('home/article').'/'.$v['gid'] ?>"><?php echo $v['title'] ?></a></h1>
                        <div class="post-meta">
                            <span class="author">作者:<?php echo $v['username'] ?><a href="#"></a></span>|
                            <time class="post-date" datetime="2015年12月22日星期二凌晨3点58分" title="2015年12月22日期二凌晨3点58分"><?php echo date('Y-m-d',$v['date']) ?></time>
                        </div>
                    </div>
                    <div class="post-media">
                        <a href="<?php echo site_url('home/article').'/'.$v['gid'] ?>"><img src="<?php echo base_url() .'/uploads/'.$v['thumb'] ?>" alt="CI3.0.0正式发布"></a>
                    </div>
                    <div class="post-content">
                        <p><?php echo $v['excerpt'] ?></p>
                    </div>
                    <div class="post-read">
                        <a href="<?php echo site_url('home/article').'/'.$v['gid'] ?>" class="btn btn-default">阅读全文</a>
                    </div>

                    <footer class="post-footer clearfix">
                    
                    </footer>
                </article>
            <?php endforeach ?>
            </main>