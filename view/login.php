<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&family=Poppins:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./style/login.css">
    <!-- <link rel="stylesheet" href="script.js"> -->
</head>

<body>
    <div class="front-section">
        <div class="front-img">
          <img src="./img/login.jpg" alt="">
        </div>

        <div class="login-page">
            <h1>Login<span>Page</span></h1><br>
            <h3>Welcome Back</h3><br>
            <h4>Login to get Start</h4>
            <orm action="./../backend/login.php" method="post">
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" required> <br>
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password" required><br>
                <div class="forget">
                    <h6> <a href="./register.php"> Register Now?</a></h6>
                    <h6> <a href="#"> Forget Password</a> </h6>
                </div>

                <div class="login-inp">
                <button type = "submit" > <a href="./index.php">Login </a> </button>
                </div>
            </form>
        </div>
    </div>



</body>

</html>