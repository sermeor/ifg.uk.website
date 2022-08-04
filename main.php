<!DOCTYPE html>
<html>
<head>
<title>IFG UK</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="shortcut icon" type="image/x-icon" href="images/1.ico"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
.map-responsive{overflow:hidden;padding-bottom:56.25%;position:relative;height:0;}
.map-responsive iframe{left:0;top:0;height:100%;width:100%;position:absolute;}
a {text-decoration: none;}

#cycler img{z-index:1}
#cycler img.active{z-index:3}

</style>

</head>
<body>

<!-- Links (sit on top) -->

<div class="w3-top">
  <div class="w3-row w3-large w3-light-grey">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block">Home</a>
    </div>
    <div class="w3-col s3">
      <a href="#brands" class="w3-button w3-block">Brands</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block">About</a>
    </div>
    <div class="w3-col s3">
      <a href="#contact" class="w3-button w3-block">Contact</a>
    </div>
  </div>
</div>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="w3-half w3-container">
    <div class="w3-panel">
      <img src="images/IFG-LOGO-BLACK.png" style="width:25%">
      <h1><b>Welcome to International Fashion Group UK</b></h1>
      <p>International Fashion Group UK is a leading fasilitation Agency serving the UK Bridal industry. Encompassing Wedding Gowns and Bridesmaids. Our international brands have a proven reputation for success.</p>
      <p>It is our mission to share that success with our loyal UK stockists and consumers alike.</p>
      <p>We pride ourselves on our dedication to everyone we serve, and invite every stockist to experience the difference IFG UK can offer your business.</p>
    </div>
  </div>

<div class="w3-half w3-container">

  <div class="w3-panel" id="cycler" style="width:50%">
    <img class="active" src="images/1.png">
    <img src="images/2.png"/>
    <img src="images/3.png"/>
    <img src="images/4.png"/>
  </div>

</div>

  <!-- Grid -->
  <div class="w3-row-padding">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Portfolio Brands</span>
    </div>

    <div class="w3-third w3-margin-bottom" id="brands">
      <div class="w3-card-4">
        <img src="images/madi_example.jpg" alt="MADI LANE" style="width:100%">
        <div class="w3-container">
          <h3>MADI LANE</h3>
          <p class="w3-opacity">Bridal gowns</p>
          <p><a href="https://madilane.com/" target="_blank"><button class="w3-button w3-light-grey w3-block">Visit</button></a></p>
        </div>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="images/bill_example.jpg" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>BILL LEVKOFF</h3>
          <p class="w3-opacity">Bridesmaids & special occasion</p>
          <p><a href="https://www.billlevkoff.com/" target="_blank"><button class="w3-button w3-light-grey w3-block">Visit</button></a></p>
        </div>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="images/evie_example.jpg" alt="EVIE YOUNG" style="width:100%">
        <div class="w3-container">
          <h3>EVIE YOUNG</h3>
          <p class="w3-opacity">Bridal gowns</p>
          <p><a href="https://evieyoung.com/" target="_blank"><button class="w3-button w3-light-grey w3-block">Visit</button></a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <div class="w3-center w3-padding-64">
    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Contact</span>
    </div>
    <div class="w3-row">
        <p></p>
        <i class="fa fa-map-marker" style="width:30px"></i> <b>Address</b>: Unit 4, Performance Park, Clovelly Road Ind Est., Bideford, Devon, United Kingdom, EX39 3FW
        <p></p>
        <i class="fa fa-phone" style="width:30px"></i> <b>Phone</b>: 01237723047 / 07759226220
        <p></p>
        <i class="fa fa-envelope" style="width:30px"> </i> <b>Email</b>: <a href = "mailto: enquiries@ifg-uk.com">enquiries@ifg-uk.com</a>
        <p></p>
    </div>
    <div class="w3-row">
      <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2510.3266641539794!2d-4.238004682556151!3d51.01011370000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486c3fa3942e21a7%3A0xf4837e81321ec7af!2sIFG-UK!5e0!3m2!1ses!2suk!4v1658933066965!5m2!1sen!2sus" width="600" height = "400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>


</div>

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>

  <div class="w3-section">
    <p>&copy;2022 IFG-UK LTD</p>
  </div>

  <div class="w3-section">
    <a href="/privacy_policy.php">Privacy Policy</a>
  </div>

</footer>


<script>

function cycleImages(){
      var $active = $('#cycler .active');
      var $next = ($active.next().length > 0) ? $active.next() : $('#cycler img:first');
      $next.css('z-index',2);//move the next image up the pile
      $active.fadeOut(1500,function(){//fade out the top image
	  $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
          $next.css('z-index',3).addClass('active');//make the next image the top one
      });
    }

$(document).ready(function(){
// run every 7s
setInterval('cycleImages()', 7000);
})

</script>


</body>
</html>
