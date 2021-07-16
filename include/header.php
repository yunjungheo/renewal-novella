<?php

  session_start();
  if(isset($_SESSION['userid'])){
    $userid = $_SESSION['userid'];
  } else {
    $userid = "";
  }

  // if(isset($_SESSION['userprofile'])){
  //   $userprofile = $_SESSION['userprofile'];
  // } else {
  //   $userprofile = "";
  // }

  //echo $userid, $userprofile;

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
            <a href=""><i class="far fa-search"></i><span>Search</span></a>
          </div>
          <div class="icon_place">
            <a href=""><i class="fas fa-map-marker-alt"></i><span>Boutiques</span></a>
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
        <ul>
         <li> <a href="">Fragrances</a></li>
            <!-- <ul>
              <li><a href="#">Angeli di Firenze</a></li>
              <li><a href="#">Fresia</a></li>
              <li><a href="#">Melograno</a></li>
              <li><a href="#">Rosa</a></li>
              <li><a href="#">Rosa-Novella</a></li>
            </ul> -->
          <li>Skincare</li>
          <li>Bodycare</li>
          <li>At Home</li>
          <li>By Collection</li>
          <li>Firenze 1221</li>
        </ul>
      </nav>     
    </header>
    <!-- End of header tag code -->