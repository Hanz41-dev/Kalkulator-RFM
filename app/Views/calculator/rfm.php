<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-6">
        <h3> Calclulator RFM</h3>
        <hr>
            <?php $session = session(); 
                $login = '';
                if ($session->get('logged_in') == 1){
                    $login = 'disabled';
                }
            ?>
            <form action="/rfm/count" method="get">
                <div class="mb-3">
                    <label for="InputForTB" class="form-label">Tinggi Badan</label>
                    <input type="text" name="tinggi_badan" class="form-control" id="InputForTB" value="<?= $tinggi_badan; ?>">
                    <small id="passwordHelpInline" class="text-muted">
                        in Centimeters (Cm).
                    </small>
                </div>
                <div class="mb-3">
                    <label for="InputForLP" class="form-label">Lingkar Pinggang</label>
                    <input type="text" name="lingkar_pinggang" class="form-control" id="InputForLP" value="<?= $lingkar_pinggang; ?>">
                    <small id="passwordHelpInline" class="text-muted">
                        in Centimeters (Cm).
                    </small>
                </div>
                <fieldset class="form-group row" <?php echo $login;?>>
                    <legend class="col-form-label col-sm-2 float-sm-left pt-0">Gender</legend>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="P" <?php if($session->get('gender') == 'P'){echo ' checked';}?>>
                            <label class="form-check-label" for="inlineRadio1">Pria</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="W" <?php if($session->get('gender') == 'W'){echo ' checked';}?>>
                            <label class="form-check-label" for="inlineRadio2">Wanita</label>
                        </div>
                    </div>
                </fieldset>
                <button type="submit" class="btn btn-primary">Calculate</button>
            </form>
        </div>
    </div>
</div>