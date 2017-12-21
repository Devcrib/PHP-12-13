<?php $this->layout('app:layout');?>
<section class = "landing">
    <div class = "overlay"></div>
    <div class = "inner-section">
        <div class = "left-circle"></div>
        <div class = "right-circle"></div>
        <article>
          Welcome to PHP

        </article>
        <div class = "login-signup">
            <a href="<?=$this->httpPath('app.login'); ?>" class = "btn btn-login">Login</a>
            <a href="<?=$this->httpPath('app.register'); ?>" class="btn btn-up">Sign Up</a>
        </div>
    </div>
</section>
