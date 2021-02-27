<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-6">
            <h3> Sign In </h3>
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
                <form action="/login/auth" method="post">
                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="InputForEmail" value="<?= set_value('username') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="InputForPassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    Tidak punya akun ? 
                    <a cclass="btn btn-link" href="/register" role="button">Register</a>
                </form>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>