<?php
    include "include/init.php";
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
<meta charset="UTF-8">
<meta name="description" content="Ogani Template">
<meta name="keywords" content="Ogani, unica, creative, html">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Ogani | Template</title>

<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="css/nice-select.css" type="text/css">
<link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="css/styles.css" type="text/css">
<script nonce="145b55d1-4da3-47ab-9ac4-936afa96bd38">(function(w,d){!function(f,g,h,i){f[h]=f[h]||{};f[h].executed=[];f.zaraz={deferred:[],listeners:[]};f.zaraz.q=[];f.zaraz._f=function(j){return function(){var k=Array.prototype.slice.call(arguments);f.zaraz.q.push({m:j,a:k})}};for(const l of["track","set","debug"])f.zaraz[l]=f.zaraz._f(l);f.zaraz.init=()=>{var m=g.getElementsByTagName(i)[0],n=g.createElement(i),o=g.getElementsByTagName("title")[0];o&&(f[h].t=g.getElementsByTagName("title")[0].text);f[h].x=Math.random();f[h].w=f.screen.width;f[h].h=f.screen.height;f[h].j=f.innerHeight;f[h].e=f.innerWidth;f[h].l=f.location.href;f[h].r=g.referrer;f[h].k=f.screen.colorDepth;f[h].n=g.characterSet;f[h].o=(new Date).getTimezoneOffset();if(f.dataLayer)for(const s of Object.entries(Object.entries(dataLayer).reduce(((t,u)=>({...t[1],...u[1]})))))zaraz.set(s[0],s[1],{scope:"page"});f[h].q=[];for(;f.zaraz.q.length;){const v=f.zaraz.q.shift();f[h].q.push(v)}n.defer=!0;for(const w of[localStorage,sessionStorage])Object.keys(w||{}).filter((y=>y.startsWith("_zaraz_"))).forEach((x=>{try{f[h]["z_"+x.slice(7)]=JSON.parse(w.getItem(x))}catch{f[h]["z_"+x.slice(7)]=w.getItem(x)}}));n.referrerPolicy="origin";n.src="https://preview.colorlib.com/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(f[h])));m.parentNode.insertBefore(n,m)};["complete","interactive"].includes(g.readyState)?zaraz.init():f.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>

<?php
    include "header.php";
?>


<section class="hero hero-normal">
<div class="container">
<div class="row">
<div class="col-lg-3">
<div class="hero__categories">
<div class="hero__categories__all">
<i class="fa fa-bars"></i>
<span>All departments</span>
</div>
<ul>
<li><a href="#">Fresh Meat</a></li>
<li><a href="#">Vegetables</a></li>
<li><a href="#">Fruit & Nut Gifts</a></li>
<li><a href="#">Fresh Berries</a></li>
<li><a href="#">Ocean Foods</a></li>
<li><a href="#">Butter & Eggs</a></li>
<li><a href="#">Fastfood</a></li>
<li><a href="#">Fresh Onion</a></li>
<li><a href="#">Papayaya & Crisps</a></li>
<li><a href="#">Oatmeal</a></li>
<li><a href="#">Fresh Bananas</a></li>
</ul>
</div>
</div>
<div class="col-lg-9">
<div class="hero__search">
<div class="hero__search__form">
<form action="#">
<div class="hero__search__categories">
All Categories
<span class="arrow_carrot-down"></span>
</div>
<input type="text" placeholder="What do yo u need?">
<button type="submit" class="site-btn">SEARCH</button>
</form>
</div>
<div class="hero__search__phone">
<div class="hero__search__phone__icon">
<i class="fa fa-phone"></i>
</div>
<div class="hero__search__phone__text">
<h5>+65 11.188.888</h5>
<span>support 24/7 time</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
<div class="container">
<div class="row">
<div class="col-lg-12 text-center">
<div class="breadcrumb__text">
<h2>Checkout</h2>
<div class="breadcrumb__option">
<a href="index-2.html">Home</a>
<span>Checkout</span>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="checkout spad">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
</h6>
</div>
</div>

<div class="checkout__form">
<h4>Billing Details</h4>
<?php 
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
?>
<form action="process/register.php" method="POST">
<div class="row">
<div class="col-lg-8 col-md-6">
<div class="row">
<div class="col-lg-6">

<div class="checkout__input">
<p>FullName<span>*</span></p>
<input name="name" type="text">
</div>
</div>

<div class="col-lg-6">
<div class="checkout__input">
<p>Email<span>*</span></p>
<input type="text" name="email">
</div>
</div>

<div class="col-lg-6">
<div class="checkout__input">
<p>Password<span>*</span></p>
<input type="text" name="password">
</div>
</div>

<div class="col-lg-6">
<div class="checkout__input">
<p>Confirm Password<span>*</span></p>
<input type="text" name="confirmpassword">
</div>
</div>
</div>
 <a href="#"> <button type="submit" name="submit" class="site-btn"> create Account</button> </a>
</div>


<div class="col-lg-4 col-md-6">
<div class="checkout__order">
<h4>Already have an account? <a href="login.php">Login</a> </h4>


<p>Lorem ipsum dolor sit amet, cjhg</p>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</section>


<footer class="footer spad">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="footer__about">
<div class="footer__about__logo">
<a href="index-2.html"><img src="img/logo.png" alt=""></a>
</div>
<ul>
<li>Address: 60-49 Road 11378 New York</li>
<li>Phone: +65 11.188.888</li>
<li>Email: <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1078757c7c7f50737f7c7f627c79723e737f7d">[email&#160;protected]</a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
<div class="footer__widget">
<h6>Useful Links</h6>
<ul>
<li><a href="#">About Us</a></li>
<li><a href="#">About Our Shop</a></li>
<li><a href="#">Secure Shopping</a></li>
<li><a href="#">Delivery infomation</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Our Sitemap</a></li>
</ul>
<ul>
<li><a href="#">Who We Are</a></li>
<li><a href="#">Our Services</a></li>
<li><a href="#">Projects</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">Innovation</a></li>
<li><a href="#">Testimonials</a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="footer__widget">
<h6>Join Our Newsletter Now</h6>
<p>Get E-mail updates about our latest shop and special offers.</p>
<form action="#">
<input type="text" placeholder="Enter your mail">
<button type="submit" class="site-btn">Subscribe</button>
</form>
<div class="footer__widget__social">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-instagram"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-pinterest"></i></a>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="footer__copyright">
<div class="footer__copyright__text"><p>
Copyright &copy;<script data-cfasync="false" src="https://preview.colorlib.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
</p></div>
<div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
</div>
</div>
</div>
</div>
</footer>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"79a5e77acd16b890","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.2.0","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/ogani/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Feb 2023 11:22:59 GMT -->
</html>