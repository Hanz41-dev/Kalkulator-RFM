<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <h3> Sign Up </h3>
                <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>
                <form action="/register/save" method="post">
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">Full Name</label>
                        <input type="text" name="surename" class="form-control" id="InputForName" value="<?= set_value('surename') ?>">
                        <small id="passwordHelpInline" class="text-muted">
                        Must be 6-50 characters long.
                        </small>
                    </div>
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="InputForName" value="<?= set_value('username') ?>">
                        <small id="passwordHelpInline" class="text-muted">
                        Must be 3-25 characters long.
                        </small>
                    </div>
                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="InputForPassword">
                        <small id="passwordHelpInline" class="text-muted">
                        Must be 6-50 characters long.
                        </small>
                    </div>
                    <div class="mb-3">
                        <label for="InputForConfPassword" class="form-label">Confirm Password</label>
                        <input type="password" name="confpassword" class="form-control" id="InputForConfPassword">
                        <small id="passwordHelpInline" class="text-muted">
                        Must be same as password field.
                        </small>
                    </div>
                    <fieldset class="form-group row">
                        <legend class="col-form-label col-sm-2 float-sm-left pt-0">Gender</legend>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="P">
                                <label class="form-check-label" for="inlineRadio1">Pria</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="W">
                                <label class="form-check-label" for="inlineRadio2">Wanita</label>
                            </div>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>