<?php
  include "include/init.php";
  include "include/properties.php";
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
<meta charset="UTF-8">
<meta name="description" content="Ogani Template">
<meta name="keywords" content="Ogani, unica, creative, html">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title> <?php echo $title; ?></title>

<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="css/nice-select.css" type="text/css">
<link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
<script nonce="19aa94c8-186f-48ad-b12c-7196de93e350">(function(w,d){!function(f,g,h,i){f[h]=f[h]||{};f[h].executed=[];f.zaraz={deferred:[],listeners:[]};f.zaraz.q=[];f.zaraz._f=function(j){return function(){var k=Array.prototype.slice.call(arguments);f.zaraz.q.push({m:j,a:k})}};for(const l of["track","set","debug"])f.zaraz[l]=f.zaraz._f(l);f.zaraz.init=()=>{var m=g.getElementsByTagName(i)[0],n=g.createElement(i),o=g.getElementsByTagName("title")[0];o&&(f[h].t=g.getElementsByTagName("title")[0].text);f[h].x=Math.random();f[h].w=f.screen.width;f[h].h=f.screen.height;f[h].j=f.innerHeight;f[h].e=f.innerWidth;f[h].l=f.location.href;f[h].r=g.referrer;f[h].k=f.screen.colorDepth;f[h].n=g.characterSet;f[h].o=(new Date).getTimezoneOffset();if(f.dataLayer)for(const s of Object.entries(Object.entries(dataLayer).reduce(((t,u)=>({...t[1],...u[1]})))))zaraz.set(s[0],s[1],{scope:"page"});f[h].q=[];for(;f.zaraz.q.length;){const v=f.zaraz.q.shift();f[h].q.push(v)}n.defer=!0;for(const w of[localStorage,sessionStorage])Object.keys(w||{}).filter((y=>y.startsWith("_zaraz_"))).forEach((x=>{try{f[h]["z_"+x.slice(7)]=JSON.parse(w.getItem(x))}catch{f[h]["z_"+x.slice(7)]=w.getItem(x)}}));n.referrerPolicy="origin";n.src="https://preview.colorlib.com/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(f[h])));m.parentNode.insertBefore(n,m)};["complete","interactive"].includes(g.readyState)?zaraz.init():f.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>

<?php
  include "header.php";
?>
<section class="hero">
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
<h5><?php echo $phone;?></h5>
<span>support 24/7 time</span>
</div>
</div>
</div>
<div class="hero__item set-bg" data-setbg="img/hero/banner.jpeg">
<div class="hero__text">
<span>FRUIT FRESH</span>
<h2>Vegetable <br />100% Organic</h2>
<p>Free Pickup and Delivery Available</p>
<a href="login.php" class="primary-btn">SHOP NOW</a>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="categories">
<div class="container">
<div class="row">
<div class="categories__slider owl-carousel">
<div class="col-lg-3">
<div class="categories__item set-bg" data-setbg="img/categories/cat-1.jpeg">
<h5><a href="#">Fresh Fruit</a></h5>
</div>
</div>
<div class="col-lg-3">
<div class="categories__item set-bg" data-setbg="img/categories/cat-2.jpeg">
<h5><a href="#">Dried Fruit</a></h5>
</div>
</div>
<div class="col-lg-3">
<div class="categories__item set-bg" data-setbg="img/categories/cat-3.jpeg">
<h5><a href="#">Vegetables</a></h5>
</div>
</div>
<div class="col-lg-3">
<div class="categories__item set-bg" data-setbg="img/categories/cat-4.jpeg">
<h5><a href="#">drink fruits</a></h5>
</div>
</div>
<div class="col-lg-3">
<div class="categories__item set-bg" data-setbg="img/categories/cat-5.jpeg">
<h5><a href="#">drink fruits</a></h5>
</div>
</div>
</div>
</div>
</div>
</section>




<!-- Query for featured Products starts here -->
<section class="featured spad">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title">
<h2>Our Product</h2>
</div>
<div class="featured__controls">
<ul>
<li class="active" data-filter="*">All</li>
<li data-filter=".oranges">Oranges</li>
<li data-filter=".fresh-meat">Fresh Meat</li>
<li data-filter=".vegetables">Vegetables</li>
<li data-filter=".fastfood">Fastfood</li>
</ul>
</div>
</div>
</div>


<div class="row featured__filter">
<?php
  if($app->featuredProduct()['status']==200){
    foreach($app->featuredProduct()['data'] as $data){
?>
<div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
<div class="featured__item">
<div class="featured__item__pic set-bg" data-setbg="img/featured/feature-3.jpeg">
<ul class="featured__item__pic__hover">
<li><a href="#"><i class="fa fa-heart"></i></a></li>
<li><a href="#"><i class="fa fa-retweet"></i></a></li>
<li><a onclick="addToCart(<?php echo $data['PId']; ?>"><i class="fa fa-shopping-cart"></i></a></li>
</ul>
</div>
<div class="featured__item__text">
<h6><a href="#"><?= $data['_Name'];?></a></h6>
<h5><?= $data['_NPrice'];?></h5> 
</div>
</div>
</div>

<?php } 
  }else{
    echo "No Products Yet available!";
  }?>
</section>





<section class="featured spad">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title">
<h2>Featured Product</h2>
</div>
<div class="featured__controls">
<ul>
<li class="active" data-filter="*">All</li>
<li data-filter=".oranges">Oranges</li>
<li data-filter=".fresh-meat">Fresh Meat</li>
<li data-filter=".vegetables">Vegetables</li>
<li data-filter=".fastfood">Fastfood</li>
</ul>
</div>
</div>
</div>


<div class="row featured__filter">
<?php
  if($app->featuredProduct()['status']==200){
    foreach($app->featuredProduct()['data'] as $data){
?>
<div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
<div class="featured__item">
<div class="featured__item__pic set-bg" data-setbg="img/featured/feature-1.jpeg">
<ul class="featured__item__pic__hover">
<li><a href="#"><i class="fa fa-heart"></i></a></li>
<li><a href="#"><i class="fa fa-retweet"></i></a></li>
<li><a onclick="addToCart(<?php echo $data['PId']; ?>"><i class="fa fa-shopping-cart"></i></a></li>
</ul>
</div>
<div class="featured__item__text">
<h6><a href="#"><?= $data['_Name'];?></a></h6>
<h5><?= $data['_NPrice'];?></h5>
</div>
</div>
</div>
  <?php } 
  }else{
    echo "No Featured Products Yet available!";
  }?>
</section>


<!-- Query for products category starts here !-->
<section class="featured spad">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title">
<h2>Product Category</h2>
</div>
<div class="featured__controls">
<ul>
<li class="active" data-filter="*">All</li>
<li data-filter=".oranges">Oranges</li>
<li data-filter=".fresh-meat">Fresh Meat</li>
<li data-filter=".vegetables">Vegetables</li>
<li data-filter=".fastfood">Fastfood</li>
</ul>
</div>
</div>
</div>

<div class="row featured__filter">
<?php
    if($app->productCategory()['status']==200){
      foreach($app->productCategory()['data'] as $data){
?>
<div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
<div class="featured__item">
<div class="featured__item__pic set-bg" data-setbg="img/featured/feature-1.jpeg">
<ul class="featured__item__pic__hover">
<li><a href="#"><i class="fa fa-heart"></i></a></li>
<li><a href="#"><i class="fa fa-retweet"></i></a></li>
<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
</ul>
</div>
<div class="featured__item__text">
<h6><a href="#"><?= $data['_Name'];?></a></h6>
<h5><?= $data['_NPrice'];?></h5>
</div>
</div>
</div>
<?php } 
   } else{
      echo "No products Category Available yet!";
    }
?>
</section>


<!--Query for Latest Products starts here !-->
<section class="featured spad">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title">
<h2> Latest Products</h2>
</div>
<div class="featured__controls">
<ul>
<li class="active" data-filter="*">All</li>
<li data-filter=".oranges">Oranges</li>
<li data-filter=".fresh-meat">Fresh Meat</li>
<li data-filter=".vegetables">Vegetables</li>
<li data-filter=".fastfood">Fastfood</li>
</ul>
</div>
</div>
</div>


<div class="row featured__filter">
<?php 
    if($app->Products()['status']==200){
        foreach($app->Products()['data'] as $data){
?>
<div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
<div class="featured__item">
<div class="featured__item__pic set-bg" data-setbg="img/featured/feature-1.jpeg">
<ul class="featured__item__pic__hover">
<li><a href="#"><i class="fa fa-heart"></i></a></li>
<li><a href="#"><i class="fa fa-retweet"></i></a></li>
<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
</ul>
</div>
<div class="featured__item__text">
<h6><a href="#"><?= $data['_Name'];?></a></h6>
<h5><?=$data['_OPrice'];?></h5>
</div>
</div>
</div>
    <?php }
    }else{
        echo "No Latest Products Added!";
      }
    ?>
</section>



<!--Query for Top Related Products!-->
<section class="featured spad">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title">
<h2>Top Rated Products</h2>
</div>
<div class="featured__controls">
<ul>
<li class="active" data-filter="*">All</li>
<li data-filter=".oranges">Oranges</li>
<li data-filter=".fresh-meat">Fresh Meat</li>
<li data-filter=".vegetables">Vegetables</li>
<li data-filter=".fastfood">Fastfood</li>
</ul>
</div>
</div>
</div>


<div class="row featured__filter">
<?php
    if($app->Products()['status']==200){
        foreach($app->Products()['data'] as $data){

?>
<div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
<div class="featured__item">
<div class="featured__item__pic set-bg" data-setbg="img/featured/feature-1.jpeg">
<ul class="featured__item__pic__hover">
<li><a href="#"><i class="fa fa-heart"></i></a></li>
<li><a href="#"><i class="fa fa-retweet"></i></a></li>
<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
</ul>
</div>
<div class="featured__item__text">
<h6><a href="#"><?= $data['_Name'];?></a></h6>
<h5><?= $data['_NPrice'];?></h5>
</div>
</div>
</div>
          <?php }}
          else{
            "Nill";
          } ?>
</section>

<div class="banner">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="banner__pic">
<img src="img/banner/banner-1.jpg" alt="">
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="banner__pic">
<img src="img/banner/banner-2.jpg" alt="">
</div>
</div>
</div>
</div>
</div>




<section class="latest-product spad">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="latest-product__text">
<h4>Latest Products</h4>
<div class="latest-product__slider owl-carousel">
<div class="latest-prdouct__slider__item">
<a href="#" class="latest-product__item">
<div class="latest-product__item__pic">
<img src="img/latest-product/lp-1.jpg" alt="">
</div>
<div class="latest-product__item__text">
<h6>Crab Pool Security</h6>
<span>$30.00</span>
</div>
</a>
</div>


<div class="latest-prdouct__slider__item">
<a href="#" class="latest-product__item">
<div class="latest-product__item__pic">
<img src="img/latest-product/lp-1.jpg" alt="">
</div>
<div class="latest-product__item__text">
<h6>Crab Pool Security</h6>
<span>$30.00</span>
</div>
</a>
</div>
</div>
</div>
</div>



<div class="col-lg-4 col-md-6">
<div class="latest-product__text">
<h4>Top Rated Products</h4>
<div class="latest-product__slider owl-carousel">
<div class="latest-prdouct__slider__item">
<a href="#" class="latest-product__item">
<div class="latest-product__item__pic">
<img src="img/latest-product/lp-1.jpg" alt="">
</div>
<div class="latest-product__item__text">
<h6>Crab Pool Security</h6>
<span>$30.00</span>
</div>
</a>
</div>


<div class="latest-prdouct__slider__item">
<a href="#" class="latest-product__item">
<div class="latest-product__item__pic">
<img src="img/latest-product/lp-1.jpg" alt="">
</div>
<div class="latest-product__item__text">
<h6>Crab Pool Security</h6>
<span>$30.00</span>
</div>
</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="latest-product__text">


<h4>Review Products</h4>
<div class="latest-product__slider owl-carousel">
<div class="latest-prdouct__slider__item">
<a href="#" class="latest-product__item">
<div class="latest-product__item__pic">
<img src="img/latest-product/lp-1.jpg" alt="">
</div>
<div class="latest-product__item__text">
<h6>Crab Pool Security</h6>
<span>$30.00</span>
</div>
</a>
</div>



<a href="#" class="latest-product__item">
<div class="latest-product__item__pic">
<img src="img/latest-product/lp-3.jpg" alt="">
</div>
<div class="latest-product__item__text">
<h6>Crab Pool Security</h6>
<span>$30.00</span>
</div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="from-blog spad">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title from-blog__title">
<h2>From The Blog</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-6">
<div class="blog__item">
<div class="blog__item__pic">
<img src="img/blog/blog-1.jpg" alt="">
</div>
<div class="blog__item__text">
<ul>
<li><i class="fa fa-calendar-o"></i> May 4,2019</li>
<li><i class="fa fa-comment-o"></i> 5</li>
</ul>
<h5><a href="#">Cooking tips make cooking simple</a></h5>
<p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6">
<div class="blog__item">
<div class="blog__item__pic">
<img src="img/blog/blog-2.jpg" alt="">
</div>
<div class="blog__item__text">
<ul>
<li><i class="fa fa-calendar-o"></i> May 4,2019</li>
<li><i class="fa fa-comment-o"></i> 5</li>
</ul>
<h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
<p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6">
<div class="blog__item">
<div class="blog__item__pic">
<img src="img/blog/blog-3.jpg" alt="">
</div>
<div class="blog__item__text">
<ul>
<li><i class="fa fa-calendar-o"></i> May 4,2019</li>
<li><i class="fa fa-comment-o"></i> 5</li>
</ul>
<h5><a href="#">Visit the clean farm in the US</a></h5>
<p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
</div>
</div>
</div>
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
<li>Address: <?php echo $address;?></li>
<li>Phone: +<?php echo $phone;?></li>
<li>Email: <?php echo $email;?> <br> 
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
<div class="footer__copyright__text"><p> Developed by Webziro © 
<script>
  document.write (new Date().getFullYear())
 </script>
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
<script>
          function addToCart(id){
            alert(id)
          }
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"79a5e722db320a77","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.2.0","si":100}' crossorigin="anonymous"></script>
</body>

</html>