<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<header class="header">

   <section class="flex">

      <a href="home.html" class="logo">communue 18</a>

      <nav class="navbar">
         <a href="home.html">home</a>
         <a href="about.html">about</a>
         <a href="menu.html">menu</a>
         <a href="orders.html">orders</a>
         <a href="contact.html">contact</a>
      </nav>

      <div class="icons">
         <a href="search.html"><i class="fas fa-search"></i></a>
         <a href="cart.html"><i class="fas fa-shopping-cart"></i><span>(3)</span></a>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>

      <div class="profile">
         <p class="name">shubzz</p>
         <div class="flex">
            <a href="profile.html" class="btn">profile</a>
            <a href="#" class="delete-btn">logout</a>
         </div>
         <p class="account"><a href="login.html">login</a> or <a href="register.html">register</a></p>
      </div>

   </section>

</header>

<div class="heading">
   <h3>checkout</h3>
   <p><a href="home.html">home </a> <span> / checkout</span></p>
</div>

<section class="checkout">

   <h1 class="title">order summary</h1>

   <form action="" method="post">
      <div class="cart-items">
         <h3>cart items</h3>
         <p><span class="name">delicious pizza 01</span><span class="price">$3</span></p>
         <p><span class="name">main dish 02</span><span class="price">$3</span></p>
         <p><span class="name">delicious dessert 01</span><span class="price">$3</span></p>
         <p class="grand-total"><span class="name">grand total :</span> <span class="price">$9</span></p>
         <a href="cart.html" class="btn">view cart</a>
      </div>
      <div class="user-info">
         <h3>your info</h3>
         <p><i class="fas fa-user"></i> <span>shubzz</span></p>
         <p><i class="fas fa-phone"></i> <span>9322272097</span></p>
         <p><i class="fas fa-envelope"></i> <span>shubhamtarange669@gmail.com</span></p>
         <a href="update_profile.html" class="btn">update info</a>
         <h3>delivery address</h3>
         <p class="address"><i class="fas fa-map-marker-alt"></i> <span>pimpri chinchwad moshi - 412105</span></p>
         <a href="update_address.html" class="btn">update address</a>
         <select name="method" class="box" required>
            <option value="" disabled selected>select payment method</option>
            <option value="cash on delivery">cash on delivery</option>
            <option value="credit card">credit card</option>
            <option value="paytm">paytm</option>
            <option value="paypal">paypal</option>
         </select>
      </div>
      <input type="submit" value="place order" name="order" class="btn order-btn">
   </form>

</section>
























<footer class="footer">

   <section class="box-container">

      <div class="box">
         <img src="images/email-icon.png" alt="">
         <h3>our email</h3>
         <a href="mailto:shubhamtarange669@gmail.com">shubhamtarange669@gmail.com</a>
         <a href="mailto:aryzz@gmail.com">aryzz@gmail.com</a>
      </div>

      <div class="box">
         <img src="images/clock-icon.png" alt="">
         <h3>opening hours</h3>
         <p>00:07am to 00:10pm </p>
      </div>

      <div class="box">
         <img src="images/map-icon.png" alt="">
         <h3>our address</h3>
         <a href="https://www.google.com/maps">pune, india - 412105</a>
      </div>

      <div class="box">
         <img src="images/phone-icon.png" alt="">
         <h3>our number</h3>
         <a href="tel:9322272088">9322272088</a>
         <a href="tel:6587854448">6587854448</a>
      </div>

   </section>

   <div class="credit">&copy; copyright @ 2022 by <span>mr. web designer</span> | all rights reserved!</div>

</footer>

<div class="loader">
   <img src="images/loader.gif" alt="">
</div>

<script src="js/script.js"></script>

</body>
</html>