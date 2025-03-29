<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>my orders</title>

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
         <a href="home.php">home</a>
         <a href="about.php">about</a>
         <a href="menu.php">menu</a>
         <a href="orders.php">orders</a>
         <a href="contact.php">contact</a>
      </nav>

      <div class="icons">
         <a href="search.php"><i class="fas fa-search"></i></a>
         <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(3)</span></a>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>

      <div class="profile">
         <p class="name">shubzz</p>
         <div class="flex">
            <a href="profile.php" class="btn">profile</a>
            <a href="#" class="delete-btn">logout</a>
         </div>
         <p class="account"><a href="login.php">login</a> or <a href="register.html">register</a></p>
      </div>

   </section>

</header>

<div class="heading">
   <h3>your orders</h3>
   <p><a href="home.php">home </a> <span> / orders</span></p>
</div>

<section class="orders">

   <h1 class="title">placed orders</h1>

   <div class="box-container">

      <div class="box">
         <p> placed on : <span>5-29-2022</span> </p>
         <p> name : <span>shaikh anas</span> </p>
         <p> number : <span>1234567899</span> </p>
         <p> email : <span>shaikhanas@gmail.com</span> </p>
         <p> address : <span>jogeshwari, mumbai, india - 400103</span> </p>
         <p> your orders : <span>pizza 01 (1) - main dish 02 (3) -</span> </p>
         <p> total price : <span>$12/-</span> </p>
         <p> payment method : <span>cash on delivery</span> </p>
         <p> payment status : <span>pending</span> </p>
      </div>

      <div class="box">
         <p> placed on : <span>5-29-2022</span> </p>
         <p> name : <span>shaikh anas</span> </p>
         <p> number : <span>1234567899</span> </p>
         <p> email : <span>shaikhanas@gmail.com</span> </p>
         <p> address : <span>jogeshwari, mumbai, india - 400103</span> </p>
         <p> your orders : <span>pizza 01 (1) - main dish 02 (3) -</span> </p>
         <p> total price : <span>$12/-</span> </p>
         <p> payment method : <span>cash on delivery</span> </p>
         <p> payment status : <span>pending</span> </p>
      </div>

   </div>

</section>
























<footer class="footer">

   <section class="box-container">

      <div class="box">
         <img src="images/email-icon.png" alt="">
         <h3>our email</h3>
         <a href="mailto:shaikhanas@gmail.com">shaikhanas@gmail.com</a>
         <a href="mailto:anasbhai@gmail.com">anasbhai@gmail.com</a>
      </div>

      <div class="box">
         <img src="images/clock-icon.png" alt="">
         <h3>opening hours</h3>
         <p>00:07am to 00:10pm </p>
      </div>

      <div class="box">
         <img src="images/map-icon.png" alt="">
         <h3>our address</h3>
         <a href="https://www.google.com/maps">mumbai, india - 400104</a>
      </div>

      <div class="box">
         <img src="images/phone-icon.png" alt="">
         <h3>our number</h3>
         <a href="tel:1234567890">+123-456-7890</a>
         <a href="tel:1112223333">+111-222-3333</a>
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