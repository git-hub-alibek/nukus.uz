<h2><?php echo lang('news_list_heading'); ?></h2>
<?php foreach($news as $n):?>
    <div class="news-item">
        <div class="pull-left"><img src="/uploads/<?php echo $n->img;?>" width="150" class="image-thumbnail" /></div>
        <div><h3><?php echo anchor('news/show/'. $n->id, $n->title_kk);?></h3>
        <?php echo word_limiter($n->text_kk, 50);?>
        </div>
    </div>
<?php endforeach;?>