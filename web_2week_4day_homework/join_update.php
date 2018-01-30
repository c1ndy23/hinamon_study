<?php
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password_chk = $_POST['password_chk'];
  $email = $_POST['email'];
  $fullname = $_POST['fullname'];

  if($password !== $password_chk) {
    echo "<script>alert('두 비밀번호가 서로 같지 않습니다.');</script>";
    exit(-1);
  }

  $length = strlen($username);
  if($length < 10 || $length > 30) {
    echo "<script>alert('username은 10자 이상 30자 이하로 구성되어야 합니다.');</script>";
    exit(-1);
  }
  // FILTER_VALIDATE_EMAIL => email 정규식 체크
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('email 형식에 맞춰주세요.');</script>";
    exit(-1);
  }

  $sql = "select username from accounts where username = '$username'"; // 1 = True
  $conn = mysqli_connect("localhost", "root", "password12#", "study_jinhee");
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

  if($row) {
    echo "<script> alert('username이 중복되었습니다.'); </script>";
    exit(-1);
  }

  $sql = "insert into accounts(username, fullname, `password`, email) values ('$username', '$fullname', '$password', '$email')";
  mysqli_query($conn, $sql);

   // while($row = mysqli_fetch_array($result)) {
   //   print_r($row);
   //   echo "<br>";
   // };

  mysqli_close($conn);
  // 아이디 중복확인 안함
  // SQL INJECTION 안막음
  // select 구문
  echo "<script>alert('회원가입성공');location.href='login.php';</script>"; // login.php 이동 시 뒤로가기는 실행 안됨
?>
<script>
  // 뒤로가기
  // history.back(-1);
</script>
