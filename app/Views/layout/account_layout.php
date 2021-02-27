<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kalkulaotr RFM</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>
	<?php $session = session(); ?>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url('/dashboard') ?>"> <?php echo $session->get('username'); ?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('dashboard/'.$session->get('account_id').'/record') ?>">Record</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('dashboard/'.$session->get('account_id').'/edit')?>">Edit Account</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('/login/logout') ?>">Logout</a>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>


	<header class="jumbotron jumbotron-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="h1">Welcome, <?php echo $session->get('surename'); ?></h1>
					<hr>
				</div>
			</div>
		</div>
    </header>
    
    <?= $this->renderSection('content') ?>

	<footer class="jumbotron jumbotron-fluid mt-5 mb-0">
		<div class="container text-center">Copyright &copy <?= Date('Y') ?> Hanz41 Project</div>
	</footer>

	<!-- Jquery dan Bootsrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>