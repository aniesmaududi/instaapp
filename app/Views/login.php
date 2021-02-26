<?= $this->extend('layout/template-generic') ?>

<?= $this->section('top-content') ?>
			
<?= $this->endSection() ?>

<?= $this->section('main-content') ?>
					<div class="row aln-center">
						<div class="col-8">
							<!-- Form -->
								<section class="box">	
									<header class="major">
										<h2>Masuk</h2>										
									</header>	
						
									<hr />
									<?php if(session()->getFlashdata('msg')):?>
				                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
				                	<?php endif;?>
									<form method="post" action="<?=base_url('/login/auth');?>">
										<div class="row gtr-uniform gtr-50">
											<div class="col-12">
												<input type="email" name="email" id="email" value="" placeholder="Email" />
											</div>
											<div class="col-12">
												<input type="password" name="password" id="password" value="" placeholder="Password" />
											</div>
											<div class="col-6">
												<ul class="actions">
													<li><input type="submit" value="Kirim" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section>

						</div>
					</div>
<?= $this->endSection() ?>