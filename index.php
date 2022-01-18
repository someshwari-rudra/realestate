<?php
include 'registration.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/registration.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Real Estate</title>
</head>

<body>
    <div class="header">
        <nav>
            <img src="images/real estate logo.png" alt="logo" class="logo">
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Buy</a></li>
                <li><a href="#">Sell</a></li>
                <li><a href="#">Find Agent</a></li>
                <li id="Show-login" class="btn"><a href="#"> Sign In</a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
        <div class="image-background"></div>
        <div class="black_background">
            <div class="content">
                <h1>Discover a place you'll love to live.</h1>
                <form>
                    <input type="text" placeholder="Type a place">
                    <button id="Show-login" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>

    <!-- ========================================login model====================================== -->

    <div class="model_container" id="model_container">
        <div class="popup">
            <div id="close-btn">&times;</div>
            <div class="form">
                <h2>Login</h2>
                <div class="form-element">
                    <input type="text" name="login_email" id="login_email" class="mainLoginInput" placeholder="&#61447;   Email">
                </div>
                <div class="form-element">
                    <input type="password" name="login_password" id="login_password" class="mainLoginInput" placeholder="&#61475;   password">
                </div>
                <!-- <div class="form-element">
                    <input type="checkbox" id="checkbox">
                    <label for="remember-me">Remember Me</label>
                </div> -->
                <div class="form-element">
                    <a href="#">Forget Password?</a>
                </div>
                <div class="form-element">
                    <button class="button1">Sign In</button>
                </div>
                <h4 class="horizontal_line">or</h4>
                <div class="links">
                    <button class="google"><i class="fab fa-google"></i></button>
                    <button class="facebook"><i class="fab fa-facebook"></i></button>
                    <button class="apple"><i class="fab fa-apple"></i></button>
                </div>
                <h5 class="account" id="show_registration">don't have an account? create now</h5>
            </div>
        </div>
    </div>

    <div class="model_container" id="model_container1">
        <div class="popup1">
            <div id="close-btn1">&times; </div>
            <div class="form" id="registration">
                <h2>Registration</h2>
                <form action="registration.php" method="post" target="_blank" id="myform">
                    <div class="form-element">
                        <input type="text" name="username" id="username" class="mainLoginInput" placeholder="&#61447;   User Name">
                        <div class="error"></div>
                    </div>
                    <div class="form-element">
                        <input type="email" name="email" id="emailRegistration" class="mainLoginInput" placeholder="&#61447;   Email">
                        <div class="error"></div>
                    </div>
                    <div class="form-element">
                        <input type="password" name="password" id="passwordRegistration" class="mainLoginInput" placeholder="&#61475;   password">
                        <div class="error"></div>
                    </div>
                    <div class="form-element">
                        <input type="password" name="confirmPassword" id="confirmPassword" class="mainLoginInput" placeholder="&#61475;   Confirm password">
                        <div class="error"></div>
                    </div>
                    <div class="form-element">
                        <button class="button1" id="signup" type="submit" name="reg_btn">Sign Up</button>
                    </div>
                    <h4 class="horizontal_line">or</h4>
                    <div class="links">
                        <button class="google"><i class="fab fa-google"></i></button>
                        <button class="facebook"><i class="fab fa-facebook"></i></button>
                        <button class="apple"><i class="fab fa-apple"></i></button>
                    </div>
                    <h5 class="account" id="Show-login-back">All ready have an account? Login</h5>

                </form>
            </div>
        </div>
    </div>



    <script src="js/app.js"></script>
</body>

</html>