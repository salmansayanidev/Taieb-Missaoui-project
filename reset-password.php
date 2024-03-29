<?php
    include 'header.php';  
?>

    <main>
        <section class="login-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="login-area position-relative">
                            <h1 class="login-title forgot-title">Reset your password?</h1>
                            <p class="forgot-discrip">Create a new password. Then re-enter to confirm your new password.</p>
                            <form>
                                <div class="login-fields-area">
                                    <label class="forget-field-title">NEW PASSWORD</label>
                                    <div class="login-fields-inner-area">
                                        <input class="login-field-input myInput" placeholder="Type your password" type="password" name="">
                                        <button type="button" class="eye-btn"><i class="toggleIcon fa-solid fa-eye-slash"></i></button>
                                    </div>
                                </div>
                                <div class="login-fields-area">
                                    <label class="forget-field-title">CONFIRM PASSWORD</label>
                                    <div class="login-fields-inner-area">
                                        <input class="login-field-input myInput" placeholder="Type your password" type="password" name="">
                                        <button type="button" class="eye-btn"><i class="toggleIcon fa-solid fa-eye-slash"></i></button>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="login-btn send-btn">Save New Password</button>
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