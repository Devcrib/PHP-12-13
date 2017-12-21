<?php
$this->layout('app:layout');
?>

<section>
    <div class="wall-container">
        <h3>Welcome to the Gateway</h3>
        <div class="inner-container">
            <div class="form-group <?=$this->if($loginForm->fieldError('useremail'), "has-danger")?>">


                <!--Output the error if there is one-->
                <?php if($error = $loginForm->fieldError('useremail', 'userpass')): ?>
                    <div class="form-control-feedback"><?=$error?></div>
                <?php endif;?>

            </div>
            <div class="col-1-1">
                <div class="top-dash no-margin"></div>
                <div class="login-field">
                    <form action="" method="post">
                        <div class="form-group">
                            <label class="label-container">Email Address: </label>
                            <input type="email" name = "useremail" class="form-control" placeholder="Enter Your Email Address">
                        </div>
                        <div class="form-group">
                            <label class="label-container">Password: </label>
                            <input type="password" name = "userpass" class="form-control" placeholder="Enter Your password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class = "btn btn-submit" name = "login">Grant Me Access</button>
                        </div>
                        <span class="text-center"><a href="<?= $this->httpPath('app.register'); ?>">New User? Register Here</a></span>
                    </form>
                   <!-- <div class = "alert danger">
                        <span></span>-->
                    </div>
                </div>
            </div>
        </div>
</section>
