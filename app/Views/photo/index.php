<?= $this->extend('layout/template-generic') ?>

<?= $this->section('top-content') ?>
			
<?= $this->endSection() ?>

<?= $this->section('main-content') ?>					
					<div class="row">
					<?php 
					if($feed){ 
						foreach($feed as $photo):
						$photo_id = $photo['photo_id'];
						$photo_url = base_url('/photos/'.$photo['name']);
						$photo_user_id = $photo['user_id'];	
						$photo_user_name = 'Username'; //$photo['user_name']
						$photo_user_pp = base_url('/images/avatar/user1.jpg'); //$photo['user_pp']
						$photo_date = $photo['created_at'];
						$photo_likes = 100;
						$photo_comments = 5;
					?>				
										
						<div class="col-6 col-12-narrower">							
							<section class="box">
								<div class="top-row">
									<div><img src="<?= $photo_user_pp;?>" class="pp"></div>
									<div class="ptext">
										<h4><?= $photo_user_name;?></h4>
										<div class="psmall"><?= $photo_date; ?></div>		
									</div>									
								</div>								
								<span class="image featured">
									<a href="<?= base_url('/photo/view/'.$photo_id);?>">
										<img src="<?= $photo_url;?>" alt="" />
									</a>
								</span>
								<div class="bottom-row">
									<div style="margin-top:30px;padding:2px;border-top:1px solid #eee;">
										<span style="float:left; width:30%; text-align: center;">likes: <?= $photo_likes;?></span>
										<span style="float:left; width:30%; text-align: center;">comments: <?= $photo_comments;?></span>				
									</div>
								</div>
							</section>							
						</div>
					<?php endforeach; ?>
					</div>
					<?php } ?>
<?= $this->endSection() ?>