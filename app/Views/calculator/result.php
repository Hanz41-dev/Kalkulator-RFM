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
        <div class="row justify-content-md-center"> 
            <div class="col-md-12 my-2 card">
                <div class="card-body">
                    <?php echo view('calculator/rfm'); ?>
                </div>
            </div>
            <div class="col-md-12 my-2 card">
                <div class="card-body">
                    <h3> Result</h3>
                    <hr>

                    Kamu memiliki lemak sebanyak <b><?= substr($hasil,0,5) .'% ';?></b>didalam tubuhmu.<br>
                    Keterangan : <?= $keterangan; ?> </br><hr>
                    Simpan hasil perhitungan ini ? <a class="btn btn-primary" href=" <?= base_url('rfm/save/'.$tinggi_badan.'/'.$lingkar_pinggang.'/'.substr($hasil,0,5));?>" role="button">Simpan</a>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>