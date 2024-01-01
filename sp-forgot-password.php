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
                            <h1 class="login-title forgot-title">SP Forgot Password</h1>
                            <p class="forgot-discrip">No worries! Enter you email and we will send you a reset.</p>
                            <form>
                                <div class="login-fields-area">
                                    <label class="forget-field-title">EMAIL ADDRESS</label>
                                    <div class="login-fields-inner-area">
                                        <input class="login-field-input forgot-field" placeholder="Please enter your registered email address here" type="email" name="" id="">
                                    </div>
                                </div>
                                <p class="frgot-btm-para">Enter the email address associated with your account, and we'll email you a link to reset your password.</p>
                                <div class="text-center">
                                    <button type="submit" class="login-btn send-btn">Send</button>  
                                </div>
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