<?php
    include 'header.php';  
?>

    <main>
        <section class="login-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="login-area position-relative">
                            <a class="back-login-link" href="login.php">Back to Login</a>
                            <h1 class="login-title forgot-title">Forgot your password?</h1>
                            <p class="forgot-discrip">We will send a link or One Time Password (OTP) on your registered email to reset your password.</p>
                            <form>
                                <div class="login-fields-area">
                                    <label class="forget-field-title">ENTER ONE TIME PASSWORD (OTP)</label>
                                    <div class="login-fields-inner-area">
                                        <input class="login-field-input forgot-field" placeholder="Enter Your 6 Digit OTP Here" type="number" name="" id="">
                                    </div>
                                </div>
                                <button type="submit" class="login-btn send-btn">Send</button>
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