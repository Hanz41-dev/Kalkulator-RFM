<?php
	$session = session();
	if($session->get('logged_in') == TRUE){
		$this->extend('layout/account_layout');
	}else{
		$this->extend('layout/page_layout') ;
	}
?>

<?= $this->section('content') ?>
	<div class="container">
		<div class="row  justify-content-md-center">
			<div class="col-md-12">
				<p style="text-align:justify"> Relative Fat Mass (RFM) dianggap sebagai salah satu metode berat badan ideal yang lebih akurat dibandingkan BMI dalam memprediksi risiko kesehatan seseorang. 
				Angka yang diperoleh melalui perhitungan RFM merupakan angka body fat percentage. 
				Sama dengan body fat percentage, angka normal bagi pria adalah 18–24% sementara angka normal bagi wanita adalah 25–31%
				</p>
				<h5> Ingin coba hitung presentasi lemak ditubuhmu ? Cobalah hitung dengan kalkulator dibawah</h5>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<?php echo view('calculator/rfm'); ?>
				</div>
			</div>
		</div>
	</div>
<?= $this->endSection() ?>