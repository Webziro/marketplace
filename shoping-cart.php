<!DOCTYPE html>
<html lang="zxx">

<?php
    include "include/session.php";
    include "include/properties.php";
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
<h2>Shopping Cart</h2>
<div class="breadcrumb__option">
<a href="index.php">Home</a>
<span>Shopping Cart</span>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="shoping-cart spad">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="shoping__cart__table">
<table>
<thead>
<tr>
<th class="shoping__product">Products</th>
<th>Price</th>
<th>Quantity</th>
<th>Total</th>
<th></th>
</tr>
</thead>
<tbody>


<?php $items = $app->CartItems($userId);
if($items!=0){ 
  foreach($items as $item){ ?>
<tr>
<td class="shoping__cart__item">
<img src="img/cart/cart-3.jpg" alt="">
<h5><?php echo $item['_productname']; ?></h5>
</td>
<td class="shoping__cart__price">
<?php echo $item['productPrice']; ?>
</td>


<td class="shoping__cart__quantity">
<div class="quantity">
<div class="pro-qty">
<input type="text" value="<?= $item['qty'] ?>">
</div>
</div>
</td>
<td class="shoping__cart__total">
<?= $item['productPrice']*$item['qty'] ?>
</td>
<td class="shoping__cart__item__close">
<a href="removecart.php?id=<?php echo $item['id']; ?>"> <span class="icon_close"></span></a>
</td>
</tr>
<?php } } ?>
</tbody>
</table>
</div>
</div>
</div>    
   
<div class="row">
<div class="col-lg-12">
<div class="shoping__cart__btns">
<a href="shop.php" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
<a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
Upadate Cart</a>
</div>
</div>
<div class="col-lg-6">
<div class="shoping__continue">
<div class="shoping__discount">


<h5>Discount Codes</h5>
<form action="#">
<input type="text" placeholder="Enter your coupon code">
<button type="submit" class="site-btn">APPLY COUPON</button>
</form>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="shoping__checkout">





<h5>Cart Total</h5>
<ul>
<li>Subtotal <span><?= $app->totalinCart($userId);?></span></li>
<li>Delivery Charges <span><?= $deliveryfee ?></span></li>
<li>Total <span><?= $app->totalinCart($userId) + $deliveryfee;?></span></li>
</ul>
<a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
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
<a href="index.php"><img src="img/logo.png" alt=""></a>
</div>
<ul>
<li><?=$address;?></li>
<li><?=$phone;?></li>
<li><?=$email;?> <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="721a171e1e1d32111d1e1d001e1b105c111d1f">[email&#160;protected]</a></li>
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
Copyright &copy;</p></div>
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
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"79a5e7749eb50a77","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.2.0","si":100}' crossorigin="anonymous"></script>
</body>

</html>