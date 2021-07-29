<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login || Register </title>
 
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
  <?php include $_SERVER["DOCUMENT_ROOT"]."/renewal-novella/include/header.php"; ?>
     <section class="login">
       <div class="login_cover">
        <div class="login_tit">
          <h2>Login</h2>
        </div>
        <div class="form_box">
            <form action="/renewal-novella/php/login.php"  method="post" name="login_form" class="login_form"> 
              <p class="password_p">
                Please enter your id and password
              </p>
              <p>
                <input type="text" name="login_id" placeholder="ID">
              </p>
              <p>
                <input type="password" name="login_pass" autocomplete="off" placeholder="Password" >
              </p>
              <button type="button" id="login_btn">LOGIN</button>
              <p class="form_acount">
                Don't have an account? 
                <a href="/renewal-novella/pages/join/join_form.php">Create one</a>
              </p>
           </form>
        </div>
       </div>
      </section>


  <?php include $_SERVER["DOCUMENT_ROOT"]."/renewal-novella/include/footer.php"; ?>
  </div>

  <script>

  const loginBtn = document.querySelector("#login_btn");
   
  loginBtn.addEventListener('click', function(){
      if(!document.login_form.login_id.value){
        alert('Please enter your ID');
        document.login_form.login_id.focus();
        return;
      }

      if(!document.login_form.login_pass.value){
        alert('Please enter your Password');
        document.login_form.login_pass.focus();
        return;
      }

      document.login_form.submit();
    });

  </script>
  
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