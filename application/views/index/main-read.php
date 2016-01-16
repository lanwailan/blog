<script type="text/javascript" charset="utf-8" src="<?php echo base_url() ?>org/simditor/scripts/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url() ?>org/simditor/scripts/module.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url() ?>org/simditor/scripts/hotkeys.js"></script>
<script type="text/javascript"  charset="utf-8" src="<?php echo base_url() ?>org/simditor/scripts/uploader.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url() ?>org/simditor/scripts/simditor.js"></script>

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
                            <span class="author">作者：<?php echo $v['username'] ?></span>|
                            <time class="post-date" datetime="<?php echo date('Y-m-d',$v['date']) ?>" title="<?php echo date('Y-m-d',$v['date']) ?>"><?php echo date('Y-m-d',$v['date']) ?></time>
                        </div>
                    </div>
                    
                    <div class="post-content">
                        <p><?php echo $v['content'] ?></p>
                    </div>

                    <footer class="post-footer clearfix">
                        
                    </footer>
                </article>
            
            

            <!-- comments-->

            <article class="post">
                    <?php foreach($comment_read as $c): ?>
                    <blockquote>
                         <p><?php echo $c['comment']?></p>
                         <footer>Someone : <cite title="Source Title"><?php echo date('Y-m-d H:i',$c['date']) ?></cite></footer>
                    </blockquote>
                    <?php endforeach ?>
                <form action="<?php echo site_url('home/comment_add').'/'.$v['gid'] ?>" method="POST">
                    <div class="post-content">
                        <textarea id="editor" name="comment" ></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" onclick="getContent()">Submit</button>
                </form>
                    <script type="text/javascript">
                            var editor = new Simditor({
                                   textarea: $('#editor'),
                                });
                    </script>
            </article>
            <?php endforeach ?>
         </main>