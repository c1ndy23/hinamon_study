<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>view</title>
  </head>
  <style media="screen">
    table {
      width: 100%;
      height: 30%;
      margin: 70px auto;
      padding: 5px 0 0 10px;

      border-collapse: collapse;
    }
    th, td {
      border: 1px solid black;
      padding: 0px 50px 0px 50px;
      text-align: center;
    }
    th {
      background-color: #283a77;
      color: white;
    }
  </style>
  <body>
    <?php
      $conn = mysqli_connect("localhost", "root", "password12#", "study_jinhee");
      if(!$conn) {
        die("Connection Error: ". mysqli_connect_errno());
      }
        //mysqli_query("set names euckr");
      $sql = "select * from questions where 1";
      $result = mysqli_query($conn, $sql);
    ?>
    <fieldset>
      <legend>신청목록</legend>
      <table>
        <tr>
          <th>NO</th><th>이름</th><th>이메일</th><th>제목</th><th>항목</th><th>내용</th>
        </tr>
        <?php
          while($array = mysqli_fetch_array($result)) {
         ?>
        <tr>
          <td><?php echo $array[0];?></td><td><?php echo $array[1];?></td><td><?php echo $array[2];?></td><td><?php echo $array[3];?></td><td><?php echo $array[4];?></td><td><?php echo $array[5];?></td>
        </tr>
        <?php
        }
        mysqli_close();
        ?>
      </table>
    </fieldset>
  </body>
</html>
