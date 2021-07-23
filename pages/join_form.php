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
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
  <!-- Style Frameworks -->
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

     <section class="join">
       <div class="join_cover">
        <div class="join_tit">
          <h2 >Register</h2>
        </div>
        <div class="form_box">
            <form action="/renewal-novella/php/insert_mem.php"  method="post" name="mem_form" class="mem_form"> 
              <p calss="join_p">
                Please fill in the information below
              </p>
              <p>
                <input type="text" name="mem_id" placeholder="ID">
              </p>
              <p>
                <input type="password" name="mem_pass" placeholder="Password" autocomplete="off">
              </p>
              <p>
                <input type="password" name="mem_pass_check" placeholder="Check Password" autocomplete="off">
              </p>
              <p>
                <input type="text" name="mem_name" placeholder="Name">
              </p>
              <p>
                <input type="text" name="mem_email" placeholder="e-mail">
              </p>
              <div class="submit_info">
                <button type="button" id="submit_btn">CREAT MY ACOUNT</button>
                <p class="form_acount">Do you have a account? <a href="/renewal-novella/pages/login_form.php">Click here</a></p>
              </div>
            </form>
        </div>
       </div>
      </section>


  <?php include $_SERVER["DOCUMENT_ROOT"]."/renewal-novella/include/footer.php"; ?>
  </div>

  <script>

  const submitBtn = document.querySelector("#submit_btn");
   
    submitBtn.addEventListener('click', function(){
        if(!document.mem_form.mem_id.value){
          alert('아이디를 입력해 주세요');
          document.mem_form.mem_id.focus();
          return;
        }

        if(!document.mem_form.mem_pass.value){
          alert('비밀번호를 입력해 주세요');
          document.mem_form.mem_pass.focus();
          return;
        }

        if(!document.mem_form.mem_pass_check.value){
          alert('비밀번호를 다시 한 번 입력해주세요');
          document.mem_form.mem_pass_check.focus();
          return;
        }

        if(document.mem_form.mem_pass.value != document.mem_form.mem_pass_check.value){
          alert('비밀번호가 동일하지 않습니다.');
          document.mem_form.mem_pass_check.focus();
          return;
        }

        if(!document.mem_form.mem_name.value){
        alert('이름을 입력해 주세요');
        document.mem_form.mem_name.focus();
        return;
       }

        if(!document.mem_form.mem_email.value){
        alert('이메일을 입력해 주세요');
        document.mem_form.mem_email.focus();
        return;
      }

        document.mem_form.submit();
    });

  </script>
  
  <!-- JQuery Framework Load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="/renewal-novella/js/jq.main.js"></script>
</body>
</html>