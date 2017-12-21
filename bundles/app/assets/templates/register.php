<?= $this->layout('app:layout'); ?>

<section>
    <div class="wall-container">
        <h3>Welcome to the Gateway</h3>
        <div class="inner-container">
            <div class="col-1-1">
                <div class="top-dash no-margin"></div>
                <div class="login-field">
                    <form action="" method="post">
                        <div class="form-group">
                            <label class="label-container">Your Fullame: </label>
                            <input type="text" name = "fullname" class="form-control" placeholder="Enter Your Full Name">
                        </div>
                        <div class="form-group">
                            <label class="label-container">Address</label>
                            <textarea name="address" id="" cols="8" rows="5" class="form-control" placeholder="Enter Address"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="label-container">Email Address: </label>
                            <input type="email" name = "useremail" class="form-control" placeholder="Enter Your Email Address">
                        </div>
                        <div class="form-group">
                            <label class="label-container">Password: </label>
                            <input type="password" name = "userpass" class="form-control" placeholder="Enter Your password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class = "btn btn-submit" name = "login">Register Me</button>
                        </div>
                        <span><a href="<?= $this->httpPath('app.login'); ?>">Already Registered? Login</a></span>
                    </form>
                    <!-- <div class = "alert danger">
                         <span></span>-->
                </div>
            </div>
        </div>
    </div>
</section>
