<?php 
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
<title><?= $title?> </title>

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
<a href="login.php"><i class="fa fa-user"></i> Login</a>
</div>
</div>
<nav class="humberger__menu__nav mobile-menu">
<ul>
<li><a href="shop.php">Shop</a></li>
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
<li><i class="fa fa-envelope"></i> 
<li>Free Shipping for all Order of $99</li>
</ul>
</div>
</div>


<header class="header">
<div class="header__top">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6">
<div class="header__top__left">
<ul>
<li><i class="fa fa-envelope"></i> 
<li>Free Shipping for all Order of $29</li>
</ul>
</div>
</div>
<div class="col-lg-6 col-md-6">
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
<a href="index.php"><img src="img/logo.png" alt=""></a>
</div>
</div>
<div class="col-lg-6">
<nav class="header__menu">
<ul>
<li class="active"><a href="index.php">Home</a></li>
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

