<!--start maincontent-->
<div class="content-wrap">
    <div class="container">
        <div class="row">
            <main class="col-md-8 main-content">                
                <?php foreach($article_read as $v): ?>
                <article class="post">
                    <div class="post-head">
                        <h1 class="post-title"><?php echo $v['title'] ?></h1>
                        <div class="post-meta">
                            <span class="author">作者：<?php echo $v['author'] ?><a href="#"></a></span>|
                            <time class="post-date" datetime="2015年12月22日星期二凌晨3点58分" title="2015年12月22日期二凌晨3点58分"><?php echo date('Y-m-d',$v['date']) ?></time>
                        </div>
                    </div>
                    
                    <div class="post-content">
                        <p><?php echo $v['content'] ?></p>
                    </div>

                    <footer class="post-footer clearfix">
                        
                    </footer>
                </article>
            <?php endforeach ?>
            </main>