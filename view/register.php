<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./style/register.css">
    <link rel="stylesheet" href="./js/register.js">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&family=Poppins:ital@0;1&display=swap" rel="stylesheet">

</head>

<body>
    <div class="signup">
        <div class="front-img">
            <img src="./img/register.jpg" alt="">
        </div>

        <div class="signup-page">
            <h1>Sign<span>Up</span></h1><br>
            <h3>Fill up form to SignUp</h3>
            <form action="./../backend/createUser.php" method="post">

                <label for="">Name:</label><br>
                <input type="text" id="uname" name="uname" required><br>
                <label for="">Email:</label><br>
                <input type="email" id="email" name="email" required><br>
                <label for="">Password:</label><br>
                <input type="password" id="password" name="password" required><br>
                <div class="signup-inp">                    
                        <button type = "submit" > <a href="./login.php">SignUp </a> </button>    
                </div>

            </form>
        </div>

    </div>



   

</body>

</html>