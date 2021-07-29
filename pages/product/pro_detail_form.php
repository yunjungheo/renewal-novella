<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Novella || Product detail </title>
 
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
  <!-- Custom Styles -->
  <link rel="icon" type="image/png" sizes="16x16" href="/renewal-novella/img/logofavicon.ico/favicon-32x32.png">
   <!-- Light Slider Plugin Link -->
   <link rel="stylesheet" href="/renewal-novella/lib/lightslider.css">
  <!-- reset CSS Code -->
  <link rel="stylesheet" href="/renewal-novella/css/reset.css">
  <!-- Main CSS Code -->
  <link rel="stylesheet" href="/renewal-novella/css/style.css">
   <!-- Media CSS Code -->
   <link rel="stylesheet" href="/renewal-novella/css/media.css">
</head>
<body>
 <div class="wrapper">
  <?php include $_SERVER["DOCUMENT_ROOT"]."/renewal-novella/include/header.php"; ?>
     <section class="pro_detail">
       <div class="detail_contents">

       <?php 
          $pro_idx = $_GET['pro_idx'];
          include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
          $sql = "SELECT * FROM nov_pro WHERE NOV_pro_idx='{$pro_idx}'";


          $detail_result = mysqli_query($dbConn, $sql);
          $detail_row = mysqli_fetch_array($detail_result);

          $detail_idx = $detail_row['NOV_pro_idx'];
          $detail_img_1 = $detail_row['NOV_pro_img_01'];
          $detail_img_2 = $detail_row['NOV_pro_img_02'];
          $detail_tit = $detail_row['NOV_pro_name'];
          $detail_pri = $detail_row['NOV_pro_pri'];
          $detail_desc = $detail_row['NOV_pro_desc'];
          $detail_size = $detail_row['NOV_pro_size'];
          $detail_cate = $detail_row['NOV_pro_cate'];
       
          ?>

         <div class="pro_detail_img_box">
            <div class="detail_tab_btns">
              <span><img src="/renewal-novella/data/product_imgs/<?=$detail_img_2?>" alt=""></span>
              <span><img src="/renewal-novella/data/product_imgs/<?=$detail_img_1?>" alt=""></span>
           </div>  
           <div class="detail_box">
               <img src="/renewal-novella/data/product_imgs/<?=$detail_img_1?>" alt="" class="detail_img_item">
           </div>
         
          </div> 
          <div class="detail_txt">
            <div class="detail_wrap">
              <div class="detail_top">
                <h2><?=$detail_tit?></h2>
                <p><?=$detail_cate?> - Eau de Cologne</p>
                <div class="tit_box">
                  <div class="size">
                    <span><?=$detail_size?></span>
                  </div>
                  <div class="pri">
                    <span><?=$detail_pri?> &#8364</span>
                  </div>
                </div>
              </div>
              <div class="quan_box">
               <div class="quan">
                 <span>-</span>
                <b>1</b>
                <span>+</span>
               </div>
                <div class="detail_btn">
                 <button type="button">ADD TO CART</button>
                </div>
                
             </div>
            </div> 
          </div>
       </div>
      
      </section>


  <?php include $_SERVER["DOCUMENT_ROOT"]."/renewal-novella/include/footer.php"; ?>
  </div>

  <!-- JQuery Framework Load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Light Slider -->
  <script src="/renewal-novella/lib/lightslider.js"></script>
  <!-- Slider JS -->
  <script src="/renewal-novella/js/slider.js"></script>
  <!-- Main Slider JS -->
  <script src="/renewal-novella/js/jq.main.js"></script>

</body>
</html>