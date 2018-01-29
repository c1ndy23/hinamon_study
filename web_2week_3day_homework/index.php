<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>3week_1day</title>
  </head>
  <style>
    .wrap {
      margin: 10px;
      width: 100%;
      overflow: hidden;
    }
    .header {
      border-bottom-style: solid;
      border-color: #d9dedd;
    }
    table, tbody {
      width: 100%;
    }
    table {
      border-spacing: 30px;
    }
    td > input {
      width: 100%;
      height: 40px;
    }
    td > select {
      width: 100%;
      height: 45px;
      /* -webkit-appearance: none;  화살표 없애기 - chrome */
      /* -moz-appearance: none; 화살표 없애기 - firefox */
      /* appearance: none;  공통 - 화살표 없애기 */
    }
    .footer > div > input {
      margin: 5px;
    }
    .area_footer > [name=exit] {
      color: black;
      background-color:#D5D5D5;
      border-radius: 5px;
      border-style: none;
      width:60px;
      height:35px;
      float:left;
    }
    .area_footer > [name=submit] {
      color: white;
      background-color:#0F79FF;
      border-radius: 5px;
      border-style: none;
      width:60px;
      height:35px;
      float:right;
    }

  </style>
  <body>
    <form action="./submit.php" method="post">
    <div class="header">
      <table>
        <tbody>
          <tr><td style="width:20%;">이름<span style="color:red"> *</span></td><td style="width:80%"><input type="text" name="name"></td></tr>
          <tr><td>이메일<span style="color:red"> *</span></td><td><input type="text" name="email"></td></tr>
          <tr><td>제목<span style="color:red"> *</span></td><td><input type="text" name="title"></td></tr>
          <tr>
            <td>문의항목 선택
              <span style="color:red"> *</span>
            </td>
            <td>
              <select name="question_list">
                <option value="...">...</option>
                <option value="1:1상담">1:1상담</option>
                <option value="FAQ">FAQ</option>
              </select>
            </td>
          </tr>
          <tr><td>문의 내용<span style="color:red"> *</span></td><td><input type="select" name="question_content"></td></tr>
        </tbody>
      </table>
    </div>
    <div class="footer">
      <div class="area_footer">
        <input type="submit" name="exit" value="취소">
        <input type="submit" name="submit" value="제출" onclick="return check();">
      </div>
    </div>
    </form>
    <script type="text/javascript">
    function validateEmail(email) {
      var re = /\S+@\S+\.\S+/;
      return re.test(email);
    }

    function check(){
      var email = document.getElementsByName("email")[0].value;

      if(!validateEmail(email)) {
        alert("이메일이 형식에 맞지 않습니다.");
        return false;
      }

      return true;
    }
    </script>
  </body>
</html>
