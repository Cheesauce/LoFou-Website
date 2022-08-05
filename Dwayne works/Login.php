<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>Lofou Login</title>
</head>
<body>

    <!-- this is extra floating images -->
    <img id="float-img1" src="./image/images1.svg" alt="floating image">
    <img id="float-img2" src="./image/images2.svg" alt="floating image">
    <img id="float-img3" src="./image/images3.svg" alt="floating image">
    <img id="float-img4" src="./image/images4.svg" alt="floating image">

    <!-- this section is a container -->
    <section class="container-login">

    <!-- this is the logo -->
    <div class="logo_main">
        <img src="./image/logo_main1.svg">
    </div>

    <!-- login box -->
    <section class="form-box">
    
        <form action="../da dawg works/connect.php" method= "POST">
            <h1>Login Your Account</h1>
            <div class="input-box">
                <i class="fa fa-envelope"></i>
                <input type="email" placeholder="User/Email" id="Username" name="Username" >
            </div>
            <div class="input-box">
                <i class="fa fa-key"></i>
                <input type="password" id="InputPass" placehol  der="Password" id="Password" name="Password">
                <span class="eye" onclick="myFunction()">
                <i class="fa fa-eye" id="hide-eye"></i>
                <i class="fa fa-eye-slash" id="hide-slash"></i>
                </span>
            </div>
            <button class="login-button">
                <input type="hidden" class="btnText" name="login-button">Sign In
            </button>
            <div class="txt1">
                <span>
                    <br> Forget
                </span>
                <a class="txt1" href="#">
                    Username/Password?
                </a>
            </div>
            <div>
                <div class="txt1">
                    <a class="txt1" href="#">
                        <br> Create your Account
                        <i class="fa fa-long-arrow-right m-l-5"></i>
                    </a>
                </div>
            </div>
        </form>
    </section> 
    
    
    <!-- this is the password eye function -->
    <script>
            function myFunction() {
                var x = document.getElementById("InputPass");
                var y = document.getElementById("hide-eye");
                var z = document.getElementById("hide-slash");

                if(x.type === 'password'){
                    x.type = "text";
                    y.style.display = "block";
                    z.style.display = "none";
                }
                else{
                    x.type = "password";
                    y.style.display = "none";
                    z.style.display = "block";
                }
            }
    </script>
</body>
</html>