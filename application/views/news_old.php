		<!-- Featured Post -->
							<div class="sidebar_featured_post">
							
								
								<?php foreach($news_old as $n):?>
								<img width='300' src="/uploads/<?php echo $n->img;?>"  />
			<div class="sidebar_featured_title"><a href="/assets/#"><?php if($this->uri->segment(1) == 'kk'): ?>
		        <div><p><?php echo anchor('news/show/'.$n->id, $n->title_kk);?></p>
		        <?php // echo word_limiter($n->text_kk, 10);?>
		<?php endif; ?>
	    <?php if($this->uri->segment(1) == 'en'): ?>
		        <div><p><?php echo anchor('news/show/'.$n->id, $n->title_en);?></p>
		        <?php // echo word_limiter($n->text_en, 10);?>
		<?php endif; ?>
	    <?php if($this->uri->segment(1) == 'ru'): ?>
		        <div><p><?php echo anchor('news/show/'.$n->id, $n->title_ru);?></p>
		        <?php // echo word_limiter($n->text_ru, 10);?>
		<?php endif; ?>
	    <?php if($this->uri->segment(1) == 'uz'): ?>
		        <div><p><?php echo anchor('news/show/'.$n->id, $n->title_uz);?></p>
		        <?php // echo word_limiter($n->text_uz, 10);?>
		<?php endif; ?></a></div> 
								
							</div>
							
						</div>
						<?php endforeach;?>
						

						</div>

						
						
					</div>
				</div>

		