					<nav id="nav">
						<ul>
						<?php if(!session()->get('logged_in')) { ?>
							<li><a href="<?= base_url('/login');?>" class="button">Masuk</a></li>
							<li><a href="<?= base_url('/register');?>" class="button">Daftar</a></li>
						<?php } else { ?>
							<li><a href="<?= base_url('/photo'); ?>">Galeri</a></li>
							<!--
							<li>
								<a href="#" class="icon solid fa-angle-down">Username</a>
								<ul>
									<li><a href="<?= base_url(); ?>/photo/upload">Unggah Foto</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="elements.html">Elements</a></li>
									<li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Option One</a></li>
											<li><a href="#">Option Two</a></li>
											<li><a href="#">Option Three</a></li>
											<li><a href="#">Option Four</a></li>
										</ul>
									</li>
								</ul>
							</li>
							-->				
							<li><a href="<?= base_url('/photo/upload');?>" class="button">Unggah Foto</a></li>
							<li><a href="<?= base_url('/login/logout');?>" class="button">Keluar</a></li>
						<?php } ?>
						</ul>
					</nav>