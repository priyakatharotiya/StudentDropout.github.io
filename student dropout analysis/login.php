<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style-login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Poppins:wght@200;300;400;500;600;700&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head> 
<body>
<?php
    <header class="head" style="background-color: white;">

        <nav class="nav1">
            <div>
                <a class="navbar-brand" href="#"><img src="images/logo.png" style="float:left;padding-right:50px;"></a>
            </div>

            <div>
                <a href="index.php" class="link">HOME</a>
                <a href="#" class="link">SIGN IN</a>
                <a href="#" class="link">CONTACT US</a>
            </div>
        </nav>
        
    </header>
    <div class="background"></div>
    <div class="container">
        <!-- <div class="text">
            <h2>WELCOME!!</h2>
            <H3>TO OUR LOGIN PAGE</H3>
            <BR>
            <H3 style="color:black;">PLEASE LOG IN TO GET YOUR WORK SAVED </H3>
            
        </div> -->
        <div class="login">
            <div class="form-box">
                <form method="post" action="/login">
                    <h2>Log In</h2>
                    <div class="input-box">
                        <label>User Id</label>
                        <input type="text" name="userID" id="userid" required>
                        
                    </div>
                    <div class="input-box">
                        <label>Password</label>
                        <input type="password" name="password" id="password" required>

                        
                    </div>
                    <div class="remember">
                        
                        <a href="#" class="link3">Forgot Password?</a>
                    </div>
                    <br>
                    <button type="submit" class="btn">LOG IN</button>
                </form>
            </div>
        </div>
    </div>
?>
</body>
</html>
