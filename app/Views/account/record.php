<?= $this->extend('layout/account_layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-md-center">
        <h2> Data Rekaman RFM-mu </h2> 
        <div class="col-md-12 my-2 card">
            <table class="table">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Tinggi Badan</th>
                        <th>Lebar Pinggang</th>
                        <th>Hasil</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($record as $data): ?>
                        <tr>
                            <!-- tanggal -->
                            <td>
                                <strong><?= $data['tanggal'] ?></strong>
                            </td>
                            <!-- tinggi -->
                            <td>
                                <?= $data['tinggi'] ?>
                            </td>
                            <!-- pinggang -->
                            <td>
                                <?= $data['pinggang'] ?>
                            </td>
                            <!-- hasil -->
                            <td>
                                <strong><?= $data['hasil'] ?>%</strong><br>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <h6 style="text-align:right"> Hasil pada tabel merupakan persentase lemak pada tubuh anda </h6>
        </div>
    </div>
</div>
<?= $this->endSection() ?>