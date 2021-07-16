<?php

  session_start();

  //세션 삭제
  unset($_SESSION['userid']);
 
  echo "
    <script>
      location.href='/renewal-novella/index.php';
    </script>
  ";

?>