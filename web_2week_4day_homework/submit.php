<?php
  $name = $_POST['name'];
  $email = $_POST['email'];  
  $title = $_POST['title'];
  $question_list = $_POST['question_list'];
  $question_content = $_POST['question_content'];
  //var_dump($_POST);

  $conn = mysqli_connect("localhost", "root", "password12#", "study_jinhee");
  if(!$conn) {
    die("Connection error: ". mysqli_connect_errno());
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('email 형식에 맟춰주세요');</script>";
    exit(-1);
  }

  $sql = "insert into questions(name, email, title, question_list, question_content) values ('$name', '$email', '$title', '$question_list', '$question_content')";

  mysqli_query($conn, $sql);

  echo "<script>alert('제출완료');location.href='view.php';</script>";

  mysqli_close($conn);
?>
