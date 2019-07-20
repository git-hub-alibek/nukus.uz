<h2><?php echo lang('news_list_heading'); ?></h2>
<?php foreach($news as $n):?>
    <div class="news-item">
        <div class="pull-left"><img src="/uploads/<?php echo $n->img;?>" width="150" class="image-thumbnail" /></div>
	    
	    <?php if($this->uri->segment(1) == 'kk'): ?>
		        <div><h3><?php echo anchor('news/show/'.$n->id, $n->title_kk);?></h3>
		        <?php echo word_limiter($n->text_kk, 50);?>
		<?php endif; ?>
	    <?php if($this->uri->segment(1) == 'en'): ?>
		        <div><h3><?php echo anchor('news/show/'.$n->id, $n->title_en);?></h3>
		        <?php echo word_limiter($n->text_en, 50);?>
		<?php endif; ?>
	    <?php if($this->uri->segment(1) == 'ru'): ?>
		        <div><h3><?php echo anchor('news/show/'.$n->id, $n->title_ru);?></h3>
		        <?php echo word_limiter($n->text_ru, 50);?>
		<?php endif; ?>
	    <?php if($this->uri->segment(1) == 'uz'): ?>
		        <div><h3><?php echo anchor('news/show/'.$n->id, $n->title_uz);?></h3>
		        <?php echo word_limiter($n->text_uz, 50);?>
		<?php endif; ?>

        
        </div>
    </div>
<?php endforeach;?>