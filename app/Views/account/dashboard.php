<?= $this->extend('layout/account_layout') ?>

<?= $this->section('content') ?>
	<div class="container">
        <div class="row justify-content-md-center">
			<?php echo view('/calculator/rfm') ?>
		</div>
	</div>

<?= $this->endSection() ?>