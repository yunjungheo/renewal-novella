<?php

  session_start();
  if(isset($_SESSION['userid'])){
    $userid = $_SESSION['userid'];
  } else {
    $userid = "";
  }

?>


    <!-- Top bar Section -->
    <div class="top_bar">
      <p>Free Economy Shipping For All EU orders of €150</p>
    </div>
    <!-- header tag code -->
    <header class="header">
      <div class="icon_cover">
        <div class="first_icons">
          <div class="icon_search">
            <a href="/renewal-novella/pages/product_insert_form.php"><i class="far fa-search"></i><span>Search</span></a>
          </div>
          <div class="icon_place">
            <a href="/renewal-novella/pages/store_location_form.php"><i class="fas fa-map-marker-alt"></i><span>Boutiques</span></a>
          </div>
        </div>
        <div class="logo">
          <a href="/renewal-novella/index.php"><img src="/renewal-novella/img/logo2.jpg" alt=""></a>
        </div>
        <div class="second_icons">

          <a href=""><i class="far fa-heart"></i><span>Wishlist</span></a>
          <a href=""><i class="fas fa-shopping-bag"></i><span>Cart</span></a>
          
          <?php
            if(!$userid){
          ?>
          <!-- 로그아웃 시 보여질 UI -->
          <a href="/renewal-novella/pages/login_form.php"><i class="far fa-user"></i><span> Log in</span></a>
          <?php
            } else{
          ?>             
          <!-- 로그인 시 보여질 UI -->
          <a href="#"><i class="far fa-user"></i> Hi! <?=$userid?></a> |
          <a href="/renewal-novella/php/logout.php"> Log out</a>
          

          <?php
            }
          ?>

          
        </div>
      </div>
      <nav class="nav">
        <ul class="top_nav">
          <li><a href="">Fragrances</a></li> 
          <li><a href="">Skincare</a> </li>
          <li><a href="">Bodycare</a></li>
          <li><a href="">At Home</a></li>
          <li><a href="">Firenze 1221</a></li>
       </ul>
       <ul class="subnav_box box1">
          <li><a href="#">Fresia</a></li>
          <li><a href="#">Melograno</a></li>
          <li><a href="#">Rosa</a></li>
          <li><a href="#">Rosa-Novella</a></li>
       </ul>
       <ul class="subnav_box box2">
          <li><a href="#">Idralia Line</a></li>
          <li><a href="#">Skin Condition</a></li>
          <li><a href="#">By Category</a></li>
          <li><a href="#">By Usage</a></li>
       </ul>
       <ul class="subnav_box box3">
          <li><a href="#">Body</a></li>
          <li><a href="#">Hair</a></li>
          <li><a href="#">Hands & Feet</a></li>
       </ul>
       <ul class="subnav_box box4">
          <li><a href="#">Pot Pourri</a></li>
          <li><a href="#">Diffusers</a></li>
          <li><a href="#">Waxs & Candles</a></li>
          <li><a href="#">Spay</a></li>
       </ul>
      </nav>  

    
     </header>    
    <!-- End of header tag code -->