<?php
    include 'header.php';  
?>

    <main>
        <section class="login-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="login-area">
                            <h1 class="login-title">LOGIN</h1>
                            <form>
                                <div class="login-fields-area">
                                    <label class="login-field-title">Username</label>
                                    <div class="login-fields-inner-area">
                                        <i class="fa-solid fa-user"></i>
                                        <input class="login-field-input" placeholder="Type your username" type="text" name="" id="">
                                    </div>
                                </div>
                                <div class="login-fields-area mb-5">
                                    <label class="login-field-title">Password</label>
                                    <div class="login-fields-inner-area">
                                        <i class="fa-solid fa-lock"></i>
                                        <input class="login-field-input" placeholder="Type your password" type="text" name="" id="">
                                    </div>
                                </div>
                                <a class="forgot-pass-link" href="forgot-password.php">Forgot Password?</a>
                                <button type="submit" class="login-btn">LOGIN</button>
                                <p class="register-link">Have not account yet? <a href="#">Register Now</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
    include 'footer.php';  
?>
