<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Renewal Novella</title>
  <!-- Google Awesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
  integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@100;200;300;400&family=Open+Sans:wght@300;400;600&family=Oswald:wght@200;400;600&family=PT+Serif&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=STIX+Two+Math&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
  <!-- Style Frameworks -->

  <!-- Light Slider Plugin Link -->
  <link rel="stylesheet" href="/renewal-novella/lib/lightslider.css">
  <!-- Custom Styles -->
  <link rel="icon" type="image/png" sizes="16x16" href="/renewal-novella/img/logofavicon.ico/favicon-32x32.png">
  <!-- reset CSS Code -->
  <link rel="stylesheet" href="/renewal-novella/css/reset.css">
  <!-- Main CSS Code -->
  <link rel="stylesheet" href="/renewal-novella/css/style.css">
  <!-- Media CSS Code -->
  <link rel="stylesheet" href="/renewal-novella/css/media.css">

</head>
<body>
  <div class="wrapper">
    
  <?php 
    include $_SERVER["DOCUMENT_ROOT"]."/renewal-novella/include/header.php"; 
    include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
  ?>
    <section class="slider">
      <!-- Loop Slider Box-->
      <div class="slider_box">
        <div class="center slider_wrap">
          <div class="slider_video">
            <video autoplay muted loop>
              <source  src="/renewal-novella/img/main-media1.mp4">
            </video>
            
          </div>
        </div> 
      </div>
      <!-- End of Loop Slider Box-->
      <!-- Loop Slider Box-->
      <div class="slider_box">
        <div class="center slider_wrap">
          <div class="slider_video">  
            <video autoplay muted loop>
              <source src="/renewal-novella/img/main-media2.mp4">
            </video>
          </div>
        </div> 
      </div>
    <!-- End of Loop Slider Box-->
       <!-- Loop Slider Box-->
      <div class="slider_box">
        <div class="center slider_wrap">
          <div class="slider_video">
            <video autoplay muted loop>
              <source src="/renewal-novella/img/main-media3.mp4">
            </video>
          </div>
        </div> 
      </div>
    </section>
    <!-- End of Loop Slider Box-->
    <!-- Cate Section -->
    <section class="cate">
      <div class="cate_cover">
        <div class="cate_tit">
          <h2>What's New</h2>
        </div>
        <div class="cate_box">
          <?php
          $cate_arr = array('Fragrances','Skincare','Bodycare','At Home');
          
          for($i = 0; $i < count($cate_arr); $i++){
            $sql = "SELECT * FROM nov_pro WHERE NOV_pro_cate='{$cate_arr[$i]}'ORDER BY NOV_pro_idx DESC LIMIT 1";
          $cate_result = mysqli_query($dbConn, $sql);
          $cate_result_row = mysqli_fetch_array($cate_result);

          $cate_img = $cate_result_row['NOV_pro_img_01'];
          $cate_tit = $cate_result_row['NOV_pro_cate'];
          
          ?>
          <div class="cate_items">
            <div class="cate_img">
              <img src="/renewal-novella/data/product_imgs/<?=$cate_img?>" alt="">
            </div>
            <h3><?=$cate_tit?></h3>
            <button>BUY NOW</button>
            
          </div>
          <?php } ?>
        </div>
      </div>
    </section>

    <!-- Product Section Code-->
  
    <section class="products">
      <div class="product_cover">
        <div class="product_main_tit">
          <h4>By Category</h4>
          
        </div>
        <div class="product_con">
          
          <?php 
            $sql1 = "SELECT * FROM nov_pro ORDER BY NOV_pro_idx DESC";
            $pro_result = mysqli_query($dbConn, $sql1);

            while($pro_row = mysqli_fetch_array($pro_result)){
              $pro_row_idx = $pro_row['NOV_pro_idx'];
              $pro_row_img = $pro_row['NOV_pro_img_01'];
              $pro_row_tit = $pro_row['NOV_pro_name'];
              $pro_row_desc = $pro_row['NOV_pro_desc'];
              $pro_row_pri = $pro_row['NOV_pro_pri'];
          ?> 
          <!-- Loop Product Box-->
          <div class="product_box">
              <div class="product_img">
                <a href="/renewal-novella/pages/product/pro_detail_form.php?pro_idx=<?=$pro_row_idx?>">
                <img src="/renewal-novella/data/product_imgs/<?=$pro_row_img?>" alt=""></a>
              </div>
              <div class="product_tit">
                <p><?=$pro_row_tit?></p>
              </div>
              <div class="product_pri">
              <p>&#8364 <?=$pro_row_pri?></p>
              </div>
              <div class="product_button">
                <button>ADD TO CART</button>
              </div>
          </div> 
        <!-- End of Loop Product Box-->
         <?php } ?>
        </div>
        <div class="load_more">
       <button type="button">Load More Product</button>
       
     </div>
      </div>
    </section> 
    <!-- End of Product Section Code -->

  </div>

    <?php include $_SERVER["DOCUMENT_ROOT"]."/renewal-novella/include/footer.php"; 

     ?>
    

  <!-- JQuery Framework Load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Light Slider -->
  <script src="/renewal-novella/lib/lightslider.js"></script>
  <!-- Light Slider -->
  <script src="/renewal-novella/lib/footerlightslider.js"></script>
  <!-- Slider JS -->
  <script src="/renewal-novella/js/slider.js"></script>
  <!-- Main Slider JS -->
  <script src="/renewal-novella/js/jq.main.js"></script>

</body>
</html>