<body class="bodylogin">
    <p class="tip"></p>
    <div class="cont">
        <form class="form sign-in" action="<?php echo site_url('profile/login_action/') ?>" method="POST">
            <h2 class = "imgH2">Welcome back, sign in to enter</h2>
            <label>
                <span>Email</span>
                <input class="textfield" type="email" name="email" required />
            </label>
            <label>
                <span>Password</span>
                <input class="textfield" type="password" name="password" required />
            </label>
            <p href="#" class="forgot-pass">Forgot password?</p>
            <button type="submit" class="submit" style="text-align: center;">Sign In</button>
        </form>

        <div class="sub-cont">
            <div class="mainImg">
                <div class="img__text m--up">
                    <h2 class = "imgH2">Don't have an account?</h2>
                    <p>Sign up and discover great studying opportunities ready to be learned in Kata Pijar!</p>
                </div>
                <div class="img__text m--in">
                    <h2 class = "imgH2">Already have an account?</h2>
                    <p>Just click "Sign In" if you already have an account. Enjoy the great studying opportunity in Kata Pijar!</p>
                </div>
                <div class="change_btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>
            <form class="form sign-up" action="<?php echo site_url('profile/registration_action/') ?>" method="POST">
                <h2 class = "imgH2">Sign Up today to proceed</h2>
                <label>
                    <span>Display Name</span>
                    <input class="textfield" type="text" name="name" required />
                </label>
                <label>
                    <span>Email</span>
                    <input class="textfield" type="email" name="email" required />
                </label>
                <label>
                    <span>Password</span>
                    <input class="textfield" type="password" id="password" name="password" required />
                </label>
                <label>
                    <span>Confirm Password</span>
                    <input class="textfield" type="password" id="confirm_password" name="conf_password" required />
                </label>
                <p href="#" class="forgot-pass">Need help Signing Up?</p>
                <button type="submit" class="submit" style="text-align: center;">Sign Up</button>

            </form>
        </div>
    </div>



    <script type = "text/javascript">
        document.querySelector('.change_btn').addEventListener('click', function() {
        document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>

    <script type="text/javascript">
        var password = document.getElementById("password"),
            confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match. Enter the same password");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
</body>