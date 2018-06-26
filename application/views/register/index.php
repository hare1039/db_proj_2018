<section>
    <h1>註冊</h1>
    <!-- main content output -->
    <div>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script src="<?php echo URL; ?>public/js/register/password_confirm.js"  defer></script>
        <script src="<?php echo URL; ?>public/js/register/check_user_id.js"  defer></script>
        <script src="<?php echo URL; ?>public/js/register/register_check.js"  defer></script>
        <form action="<?php echo URL; ?>register/signup" method="POST">
            <label>ID</label>
            <input type="text" id="user_id" name="user_id" value="" required>
            <span id="user_id_msg"></span><br>
            <label>Name</label>
            <input type="text" name="user_name" value="" required><br>
            <label>E-mail</label>
            <input type="email" name="user_email" value="" required><br>
            <label>Password</label>
            <input type="password" id="user_pw" name="user_pw" value="" required><br>
            <label>Confirm Password</label>
            <input type="password" id="user_pw_conf" name="user_pw_conf" value="" required>
            <span id="user_pw_msg"></span><br>
            <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY?>"></div><br>
            <input type="submit" id="submit_signup_account" name="submit_signup_account" value="確定" onclick="return registerCheck()"/>
            <button style="float:right;" onclick='location.href="<?php echo URL; ?>";'>取消</button>
        </form>
    </div>
</section>
