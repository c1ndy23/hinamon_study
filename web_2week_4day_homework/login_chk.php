<?php
  $username = $_POST['username'];
  $password = $_POST['password'];

  $conn = mysqli_connect("localhost", "root", "password12#", "study_jinhee");

  $sql = "select * from accounts where username = '$username'"; // 1 = True
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

  if(!$row) {
    echo "<script>alert('등록된 username이 없습니다.')</script>";
    exit(-1);
  }

  $sql = "select * from accounts where password = '$password'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

  if(!$row) {
    echo "<script>alert('password가 일치하지 않습니다.')</script>";
    exit(-1);
  }

   // while($row = mysqli_fetch_array($result)) {
   //   print_r($row);
   //   echo "<br>";
   // };

  mysqli_close($conn);
  // 아이디 중복확인 안함
  // SQL INJECTION 안막음
  // select 구문
  echo "<script>alert('로그인성공');location.href='question.php';</script>"; // Question.php 이동 시 뒤로가기는 실행 안됨
?>
