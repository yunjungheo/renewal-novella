<?php

$mem_id = $_POST['mem_id'];
$mem_pass = $_POST['mem_pass'];
$mem_name = $_POST['mem_name'];
$mem_email = $_POST['mem_email'];
$mem_regi = date('Y-m-d');

include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
  $sql = "INSERT INTO nov_mem (
    NOV_mem_id,
    NOV_mem_pass,
    NOV_mem_name,
    NOV_mem_email,
    NOV_mem_regi_day
  ) VALUES(
    '{$mem_id}',
    '{$mem_pass}',
    '{$mem_name}',
    '{$mem_email}',
    '{$mem_regi}'
  )";

  mysqli_query($dbConn, $sql);
  //echo $mem_id, $mem_pass, $mem_name, $mem_email;
  echo "
    <script>
      alert('회원가입이 완료되었습니다.');
      location.href='/renewal-novella/index.php';
    </script>
  ";

?>