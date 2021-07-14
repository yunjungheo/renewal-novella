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
  <link href="https://fonts.googleapis.com/css2?family=Uchen&display=swap" rel="stylesheet">
  <!-- Style Frameworks -->
  <!-- Custom Styles -->
  <link rel="icon" type="image/png" sizes="16x16" href="/renewal-novella/img/logofavicon.ico/favicon-32x32.png">
  <!-- reset CSS Code -->
  <link rel="stylesheet" href="/renewal-novella/css/reset.css">
  <!-- Main CSS Code -->
  <link rel="stylesheet" href="/renewal-novella/css/style.css">
</head>
<body>
 <div class="wrapper">
  <?php include $_SERVER["DOCUMENT_ROOT"]."/renewal-novella/include/header.php"; ?>

      <div class="login">
        <h2 >Login</h2>
        <!-- style= "font-family: 'Uchen', serif; font-size:50px;color:#11284d" -->
      </div>
      <form action="/renewal-novella/php/insert_mem.php"  method="post" name="mem_form">
        <p>아이디 : <input type="text" name="mem_id"></p>
        <p>비밀번호 : <input type="password" name="mem_pass"></p>
        <p>이름 : <input type="text" name="mem_name"></p>
        <p>이메일 : <input type="text" name="mem_email"></p>
        <!-- <p>가입일 : <input type="text" name="mem_regi"></p> -->
        <button type="button" id="submit_btn">회원가입</button>
      </form>
  </div>

  <script>

  const submitBtn = document.querySelector("#submit_btn");
   
   submitBtn.addEventListener('click', function(){
    alert("abc");

   });

  </script>
  
  <!-- JQuery Framework Load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="/renewal-novella/js/jq.main.js"></script>
</body>
</html>