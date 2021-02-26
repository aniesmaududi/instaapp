<?= $this->include('layout/header') ?>
	
	<body class="landing is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="<?= base_url();?>">InstaApp</h1>
					<!-- Navbar -->
					<?= $this->include('layout/nav') ?>
				</header>
				
				<?= $this->renderSection('top-content') ?>	
			
			<!-- Main -->
				<section id="main" class="container">

					<?= $this->renderSection('main-content') ?>					

				</section>

			<?= $this->renderSection('bottom-content') ?>			

			<?= $this->include('layout/footer') ?>

		</div>

		<!-- Scripts -->
			<script src="<?= base_url();?>/assets/js/jquery.min.js"></script>
			<script src="<?= base_url();?>/assets/js/jquery.dropotron.min.js"></script>
			<script src="<?= base_url();?>/assets/js/jquery.scrollex.min.js"></script>
			<script src="<?= base_url();?>/assets/js/browser.min.js"></script>
			<script src="<?= base_url();?>/assets/js/breakpoints.min.js"></script>
			<script src="<?= base_url();?>/assets/js/util.js"></script>
			<script src="<?= base_url();?>/assets/js/main.js"></script>

	</body>
</html>