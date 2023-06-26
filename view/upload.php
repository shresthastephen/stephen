<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=0, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/uploadstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&family=Poppins:ital@0;1&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="navigation">
    <label class="branding" > <a href="./index.php">Bipanako<span>Ghar</span></a></label>
        <ul>
            <li>
                <a href="./explore.php">Explore</a>
            </li>
            <li>
                <a href="./upload.php">Upload</a>
            </li>
            <li>
                <a href="./login.php"><i class="fa-solid fa-circle-user fa-xl" style="color: #f6f7f9;"></i></a>
            </li>
        </ul>

    </div>

    <!-- Main-section -->

    <div class="main-section">
        <form action="">
            <h1>List your Property</h1>
            <div class="info-detail">
                <div class="property-detail">

                    <h3>Details about Property</h3>

                    <label for="">Listing Name</label><br>
                    <input type="text" name="name" placeholder="Godawari Property"><br><br>

                    <label for="">Address</label><br>
                    <input type="text" name="address" placeholder="Behind Godawari Village"><br><br>

                    <label for="">Total Area(Pefer R-A-P-D)</label><br>
                    <input type="number" name="area" placeholder="1-8--5-1"><br><br>

                    <label for="">Price</label><br>
                    <input type="number" name="price"><br><br>

                    <label for="">Property Photo</label><br>
                    <input type="file"><br><br>

                </div>

                <div class="personal-detail">
                    <h3>Your Personal Details</h3>

                    <label for="">Name</label><br>
                    <input type="text" name="fname" placeholder="Full Name"><br><br>

                    <label for="">Phone</label><br>
                    <input type="number" name="number"><br><br>

                    <label for="">Email</label><br>
                    <input type="email" name="email" placeholder="email@gmail.com"><br><br>


                </div>
            </div>

            
            <div class="img">
                <img src="/img/greenhill.jpg" alt="">
            </div>
            
            
            
            <div class="button">
                <input type="submit">
            </div>

        </form>


    </div>
    <footer>
        <div class="foot-img">
            <img src="footer.jpg" alt="">
        </div>
        <div class="main_foot">
            Copyright &copy; 2022 BipanakoGhar

        </div>

    </footer>

</body>

</html>