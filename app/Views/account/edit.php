<?= $this->extend('layout/account_layout') ?>

<?= $this->section('content') ?>
<form action="<?= base_url('dashboard/'.$account['account_id'].'/update')?>" method="post" id="text-editor">
    <div class="container">
        <div class="justify-content-md-center">
            <div class="mb-3">
                <label for="InputForName" class="form-label">Full Name</label>
                <input type="text" name="surename" class="form-control" id="InputForName" value="<?= $account['surename'] ?>">
                <small id="passwordHelpInline" class="text-muted">
                Must be 6-50 characters long.
                </small>
            </div>
            <div class="mb-3">
                <label for="InputForName" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="InputForName" value="<?= $account['username'] ?>">
                <small id="passwordHelpInline" class="text-muted">
                Must be 3-25 characters long.
                </small>
            </div>
            <div class="mb-3">
                <label for="InputForConfPassword" class="form-label">Password</label>
                <input type="password" name="confpassword" class="form-control" id="InputForConfPassword">
                <small id="passwordHelpInline" class="text-muted">
                Fill if you want to change your password.
                </small>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>


<?= $this->endSection() ?>