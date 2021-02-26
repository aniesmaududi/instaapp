<?= $this->extend('layout/template-generic') ?>

<?= $this->section('top-content') ?>
			
<?= $this->endSection() ?>

<?= $this->section('main-content') ?>
					<div class="row aln-center">
						<div class="col-8">
							<!-- Form -->
								<section class="box">	
									<header class="major">
										<h2>Daftar</h2>										
									</header>	
						
									<hr />
									<?php if(isset($validation)):?>
					                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
					                <?php endif;?>
									<form method="post" action="<?=base_url();?>/register/save">
										<div class="row gtr-uniform gtr-50">
											<div class="col-12">
												<input type="text" name="name" id="name" value="" placeholder="Nama" value="<?= set_value('name') ?>"/>
											</div>
											<div class="col-12">
												<input type="email" name="email" id="email" value="" placeholder="Email" value="<?= set_value('email') ?>"/>
											</div>
											<div class="col-12">
												<input type="password" name="password" id="password" value="" placeholder="Password" />
											</div>
											<div class="col-12">
												<input type="password" name="confpassword" id="confpassword" value="" placeholder="Ulang Password" />
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