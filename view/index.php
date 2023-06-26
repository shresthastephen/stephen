<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BipanakoGhar</title>
    <link rel="stylesheet" href="./style/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
    <?php session_start(); ?>
    <div class="navigation">
        <!-- <nav class="navi"> -->
        <label class="branding">Bipanako<span>Ghar</span></label>
        <div class="right">
          <a href="./explore.php">Explore</a>
          <a href="./upload.php">Upload</a>
          <?php 
          if($_SESSION && $_SESSION['loggedin']==true) { ?>
            <span><?php echo $_SESSION['username']; ?></span>
            <a class="login" href="./../backend/logout.php">Log Out</a>
             <?php
           } 
           else { ?>
                <a class="login" href="./login.php">Log In</a>
                <?php 
            } 
           ?>

        </div>
        <!-- </nav> -->
    </div>

    <div class="front-section">
        <div class="front-img">
            <img src="img/main-photo.jpg" alt="" width="100%">
        </div>


        <div class="search-box">
            <input type="text" placeholder="Kathmandu">
            <i class="fa-solid fa-search"></i>
        </div>

        <div class="recent">
            <h3>Recent Listing</h3>
            <div class="recent-inner">
                <div class="listing">
                    <div class="list-img">
                        <img src="./img/greenhill.jpg" alt="">
                    </div>

                    <div class="list-text">
                        <h3>Imadol, Lalitpur</h3>
                        <div class="list-subtext">
                            <span>Price: </span>450000 <br>
                            <span>Area: </span>0-4-0-1 <br>

                        </div>
                    </div>
                    <button class= "list-btn" >View</button>
                </div>


                <div class="listing">
                    <div class="list-img">
                        <img src="./img/rosevilla.jpg" alt="">
                    </div>

                    <div class="list-text">
                        <h3>Imadol, Lalitpur</h3>
                        <div class="list-subtext">
                            <span>Price: </span>450000 <br>
                            <span>Area: </span>0-4-0-1 <br>

                        </div>
                    </div>
                    <button class= "list-btn" >View</button>
                </div>





            </div>


        </div>
    </div>


    <div class="footer">
        <div class="foot-img">
            <img src="img/footer.jpg" alt="">
        </div>
        <div class="main_foot">
            Copyright &copy; 2022 BipanakoGhar

        </div>
    </div>


</body>

</html>