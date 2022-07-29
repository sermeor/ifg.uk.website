<!DOCTYPE html>
<html>
<head>
<title>IFG UK</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/x-icon" href="images/1.ico"/>
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
.map-responsive{overflow:hidden;padding-bottom:56.25%;position:relative;height:0;}
.map-responsive iframe{left:0;top:0;height:100%;width:100%;position:absolute;}
</style>
</head>

<body>
<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="w3-panel">
    <h3><b>Privacy Policy</b></h3>
    <p>This privacy policy sets out how International Fashion Group UK uses and protetcs any information that you give International Fashion Group UK when you use this website.</p>
    <p>International Fashion Group UK is committed to ensuring that your privacy is protected. Should we ask you to provide certain information by which you can be identified when using this website, then you can be assured that it will only be used in accordance with this privacy statement.</p>
    <p>International Fashion Group UK may change this policy from time to time by updating this page. You should check this page from time to time to ensure that you are happy with any changes. This policy is effective from 01/05/2018.</p>
  </div>

  <div class="w3-panel">
    <h3><b>what we collect</b></h3>
    <p>We may collect the following information:</p>
    <ul>
      <li>name</li>
      <li>contact information including email address</li>
      <li>demographic information such as postcode, preferences and interests</li>
      <li>other information relevant to customer surveys and/or offers</li>
    </ul>

</div>

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-light-grey w3-center">

</footer>


<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-white";
}
</script>

</body>
</html>
