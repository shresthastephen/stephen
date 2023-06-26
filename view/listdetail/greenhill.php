<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../style/detailstyle.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&family=Poppins:ital@0;1&display=swap"
    rel="stylesheet" />
</head>

<body>
  <div class="navigation">
    <label class="branding" > <a href="./../index.php">Bipanako<span>Ghar</span></a></label>
    <ul>
      <li>
        <a href="./../explore.php">Explore</a>
      </li>
      <li>
        <a href="./../upload.php">Upload</a>
      </li>
      <li>
        <a href="./../login.php"><i class="fa-solid fa-circle-user fa-xl" style="color: #f6f7f9"></i></a>
      </li>
    </ul>
  </div>

  <div class="main-section">
    <h1>GreenHill City</h1>

    <div class="container">
      <div class="mySlides">
        <img src="../img/greenhill.jpg" />
      </div>

      <div class="mySlides">
        <img src="../img/greehill2.jpg" />
      </div>

      <div class="mySlides">
        <img src="../img/greenhill3.jpg" />
      </div>

      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>

      <div class="row">
        <div class="column">
          <img class="demo cursor" src="../img/greenhill.jpg" onclick="currentSlide(1)" />
        </div>


        <div class="column">
          <img class="demo" src="../img/greehill2.jpg" onclick="currentSlide(2)" />
        </div>

        <div class="column">
          <img class="demo" src="../img/greenhill3.jpg" onclick="currentSlide(3)" />
        </div>

      </div>
    </div>
    
    <div class="detail-info">
      <h3>Description</h3>
      
      <div class="detail">
        
        <p><span>ID: </span>GH 101</p>
        <p><span>Area(R-A-P-D): </span>0-5-1-0</p>
        <p><span>Location: </span>Imdaol, Lalitpur</p>
        <p><span>Road Size: </span>13FT</p>
      </div>

      <div class="map">
        <h3>Location</h3>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1955.019808854735!2d85.34864102772944!3d27.651850084141927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb178d043d3913%3A0xb3a2556b8355018a!2sThe%20Green%20Hill%20City!5e0!3m2!1sen!2snp!4v1686202140027!5m2!1sen!2snp"
          width="800" height="450" style="border: 0" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

  </div>

  <div class="footer">
    <div class="foot-img">
      <img src="./img/footer.jpg" alt="" />
    </div>
    <div class="main_foot">Copyright &copy; 2022 BipanakoGhar</div>
  </div>

  <script src="../js/detail.js"></script>
</body>

</html>