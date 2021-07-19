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
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;600&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@100;200;300;400&display=swap" rel="stylesheet">
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
              <source width="700px" height="450px" src="/renewal-novella/img/main-media1.mp4">
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
              <source width="700px" height="450px" src="/renewal-novella/img/main-media2.mp4">
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
              <source width="700px" height="450px" src="/renewal-novella/img/main-media3.mp4">
            </video>
          </div>
        </div> 
      </div>
    <!-- End of Loop Slider Box-->
    <!-- Product Section Code-->
    </section>
    <section class="products">
      <div class="product_cover">
        <div class="product_main_tit">
          <h4>FIRENZE 1221</h4>
          <h2>What's New</h2>
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
              <img src="/renewal-novella/data/product_imgs/<?=$pro_row_img?>" alt="">
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
      </div>
    </section>
    <!-- End of Product Section Code -->

    <?php include $_SERVER["DOCUMENT_ROOT"]."/renewal-novella/include/footer.php"; ?>
    
  </div>


  <!-- JQuery Framework Load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Light Slider -->
  <script src="/renewal-novella/lib/lightslider.js"></script>

  <script src="/renewal-novella/js/jq.main.js"></script>
</body>
</html>