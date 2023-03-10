
<?php
    include "include/init.php";
    include "include/properties.php";
?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/ogani/shop-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Mar 2023 15:10:49 GMT -->
<head>
<meta charset="UTF-8">
<meta name="description" content="Ogani Template">
<meta name="keywords" content="Ogani, unica, creative, html">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title> <?= $title;?></title>

<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="css/nice-select.css" type="text/css">
<link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="css/styles.css" type="text/css">
<script nonce="0b65a1dc-8c91-47dd-bbb6-88720f0c8c7b">(function(w,d){!function(bv,bw,bx,by){bv[bx]=bv[bx]||{};bv[bx].executed=[];bv.zaraz={deferred:[],listeners:[]};bv.zaraz.q=[];bv.zaraz._f=function(bz){return function(){var bA=Array.prototype.slice.call(arguments);bv.zaraz.q.push({m:bz,a:bA})}};for(const bB of["track","set","debug"])bv.zaraz[bB]=bv.zaraz._f(bB);bv.zaraz.init=()=>{var bC=bw.getElementsByTagName(by)[0],bD=bw.createElement(by),bE=bw.getElementsByTagName("title")[0];bE&&(bv[bx].t=bw.getElementsByTagName("title")[0].text);bv[bx].x=Math.random();bv[bx].w=bv.screen.width;bv[bx].h=bv.screen.height;bv[bx].j=bv.innerHeight;bv[bx].e=bv.innerWidth;bv[bx].l=bv.location.href;bv[bx].r=bw.referrer;bv[bx].k=bv.screen.colorDepth;bv[bx].n=bw.characterSet;bv[bx].o=(new Date).getTimezoneOffset();if(bv.dataLayer)for(const bI of Object.entries(Object.entries(dataLayer).reduce(((bJ,bK)=>({...bJ[1],...bK[1]})))))zaraz.set(bI[0],bI[1],{scope:"page"});bv[bx].q=[];for(;bv.zaraz.q.length;){const bL=bv.zaraz.q.shift();bv[bx].q.push(bL)}bD.defer=!0;for(const bM of[localStorage,sessionStorage])Object.keys(bM||{}).filter((bO=>bO.startsWith("_zaraz_"))).forEach((bN=>{try{bv[bx]["z_"+bN.slice(7)]=JSON.parse(bM.getItem(bN))}catch{bv[bx]["z_"+bN.slice(7)]=bM.getItem(bN)}}));bD.referrerPolicy="origin";bD.src="https://preview.colorlib.com/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bv[bx])));bC.parentNode.insertBefore(bD,bC)};["complete","interactive"].includes(bw.readyState)?zaraz.init():bv.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>

<div id="preloder">
<div class="loader"></div>
</div>

<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
<div class="humberger__menu__logo">
<a href="#"><img src="img/logo.png" alt=""></a>
</div>
<div class="humberger__menu__cart">
<ul>
<li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
<li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
</ul>
<div class="header__cart__price">item: <span>$150.00</span></div>
</div>
<div class="humberger__menu__widget">
<div class="header__top__right__language">
<img src="img/language.png" alt="">
<div>English</div>
<span class="arrow_carrot-down"></span>
<ul>
<li><a href="#">Spanis</a></li>
<li><a href="#">English</a></li>
</ul>
</div>
<div class="header__top__right__auth">
<a href="#"><i class="fa fa-user"></i> Login</a>
</div>
</div>
<nav class="humberger__menu__nav mobile-menu">
<ul>
<li class="active"><a href="index-2.php">Home</a></li>
<li><a href="shop-grid.php">Shop</a></li>
<li><a href="#">Pages</a>
<ul class="header__menu__dropdown">
<li><a href="shop-details.php">Shop Details</a></li>
<li><a href="shoping-cart.php">Shoping Cart</a></li>
<li><a href="checkout.php">Check Out</a></li>
<li><a href="blog-details.php">Blog Details</a></li>
</ul>
</li>
<li><a href="blog.php">Blog</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</nav>
<div id="mobile-menu-wrap"></div>
<div class="header__top__right__social">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
<a href="#"><i class="fa fa-pinterest-p"></i></a>
</div>
<div class="humberger__menu__contact">
<ul>
<li><i class="fa fa-envelope"></i> <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="056d6069696a45666a696a77696c672b666a68">[email&#160;protected]</a></li>
<li>Free Shipping for all Order of $99</li>
</ul>
</div>
</div>


<header class="header">
<div class="header__top">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="header__top__left">
<ul>
<li><i class="fa fa-envelope"></i> <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3b535e5757547b585457544957525915585456">[email&#160;protected]</a></li>
<li>Free Shipping for all Order of $99</li>
</ul>
</div>
</div>
<div class="col-lg-6">
<div class="header__top__right">
<div class="header__top__right__social">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
<a href="#"><i class="fa fa-pinterest-p"></i></a>
</div>
<div class="header__top__right__language">
<img src="img/language.png" alt="">
<div>English</div>
<span class="arrow_carrot-down"></span>
<ul>
<li><a href="#">Spanis</a></li>
<li><a href="#">English</a></li>
</ul>
</div>
<div class="header__top__right__auth">
<a href="login.php"><i class="fa fa-user"></i> Login</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-lg-3">
<div class="header__logo">
<a href="index-2.php"><img src="img/logo.png" alt=""></a>
</div>
</div>
<div class="col-lg-6">
<nav class="header__menu">
<ul>
<li><a href="index.php">Home</a></li>
<li class="active"><a href="shop.php">Shop</a></li>
<li><a href="#">Pages</a>
<ul class="header__menu__dropdown">
<li><a href="shop-details.php">Shop Details</a></li>
<li><a href="shoping-cart.php">Shoping Cart</a></li>
<li><a href="checkout.php">Check Out</a></li>
<li><a href="blog-details.php">Blog Details</a></li>
</ul>
</li>
<li><a href="blog.php">Blog</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</nav>
</div>
<div class="col-lg-3">
<div class="header__cart">
<ul>
<li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
<li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
</ul>
<div class="header__cart__price">item: <span>$150.00</span></div>
</div>
</div>
</div>
<div class="humberger__open">
<i class="fa fa-bars"></i>
</div>
</div>
</header>


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
<h5><?= $phone;?></h5>
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
<h2><?= $title?></h2>
<div class="breadcrumb__option">
<a href="index.php">Home</a>
<span>Shop</span>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="product spad">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-5">
<div class="sidebar">
<div class="sidebar__item">
<h4>Department</h4>
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
</ul>
</div>


<!--Price slider!-->
<div class="sidebar__item">
<h4>Price</h4>
<div class="price-range-wrap">
<div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="540">
<div class="ui-slider-range ui-corner-all ui-widget-header"></div>
<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
</div>
<div class="range-slider">
<div class="price-input">
<input type="text" id="minamount">
<input type="text" id="maxamount">
</div>
</div>
</div>
</div>



<!--Latest Products!-->

<div class="sidebar__item">
<div class="latest-product__text">
<h4>Latest Products</h4>
<div class="latest-product__slider owl-carousel">
<div class="latest-prdouct__slider__item">
<?php
    if($app->Products()['status']==200){
        foreach($app->Products()['data'] as $data){
?>
<a href="#" class="latest-product__item">
<div class="latest-product__item__pic">
<img src="img/latest-product/lp-1.jpg" alt="">
</div>
<div class="latest-product__item__text">
<h6><?= $data['_Name']; ?></h6>
<span><?= $data['_NPrice']; ?></span>
</div>
</a>
<?php }}
          else{
            "Nill";
          } ?>
</div>
</div>
  </div>
  </div>
    </div>
    </div>



<!--Sales Off!-->

<div class="col-lg-9 col-md-7">
<div class="product__discount">
<div class="section-title product__discount__title">
<h2>Sale Off</h2>
</div>



<?php
    if($app->Products ()['status']== 200){
      foreach($app->Products ()['data'] as $data){

?>

<div class="row">
<div class="product__discount__slider owl-carousel">
<div class="col-lg-4">
<div class="product__discount__item">
<div class="product__discount__item__pic set-bg" data-setbg="img/product/pd-3.jpeg">
<div class="product__discount__percent">-20%</div>
<ul class="product__item__pic__hover">
<li><a href="#"><i class="fa fa-heart"></i></a></li>
<li><a href="#"><i class="fa fa-retweet"></i></a></li>
<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
</ul>
</div>
<div class="product__discount__item__text">
<span>Dried Fruit</span>
<h5><a href="#"><?= $data['_Name'];?></a></h5>
<div class="product__item__price"><?= $app->percentageOff(10, 600);?><span><?= $data['_NPrice'];?></span>
</div>
</div>
</div>
</div>
</div>
</div>


<?php } 
  }else{
    echo "No Products Yet available!";
  }?>
</div>



<div class="filter__item">
<div class="row">
<div class="col-lg-4 col-md-5">
<div class="filter__sort">
<span>Sort By</span>
<select>
<option value="0">Default</option>
<option value="0">Default</option>
</select>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="filter__found">
  <h6><span>16</span> Products found</h6>
</div>
</div>
<div class="col-lg-4 col-md-3">
<div class="filter__option">
<span class="icon_grid-2x2"></span>
<span class="icon_ul"></span>
</div>
</div>
</div>
</div>


<!-- Products starts-->
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="product__item">
<div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg">
<ul class="product__item__pic__hover">
<li><a href="#"><i class="fa fa-heart"></i></a></li>
<li><a href="#"><i class="fa fa-retweet"></i></a></li>
<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
</ul>
</div>
<div class="product__item__text">
 <h6><a href="#">Crab Pool Security</a></h6>
<h5>$30.00</h5>
</div>
</div>
</div>
</div>
<!-- Products ends-->


<div class="product__pagination">
<a href="#">1</a>
<a href="#">2</a>
<a href="#">3</a>
<a href="#"><i class="fa fa-long-arrow-right"></i></a>
</div>
</div>
</div>
</div>
</section>



<!-- footer starts-->

<footer class="footer spad">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="footer__about">
<div class="footer__about__logo">
<a href="index.php"><img src="img/logo.png" alt=""></a>
</div>
<ul>
<li><?= $address;?></li>
<li><?=$phone?></li>
<li><?=$email;?> </ul>
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
Copyright &copy;</p></div>
<div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
</div>
</div>
</div>
</div>
</footer>

<!-- footer end-->

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
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7a543e354d1eb942","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.2.0","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/ogani/shop-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Mar 2023 15:10:49 GMT -->
</html>