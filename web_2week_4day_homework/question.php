<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>3week_1day</title>
    <script src="./ckeditor/ckeditor.js"></script>
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
      border-color: #edebe6;
      border-width: thin;
      border-radius: 3px;
    }
    td > select {
      width: 100%;
      height: 45px;
      border-color: #edebe6;
      border-width: thin;
      border-radius: 3px;
      /* -webkit-appearance: none;  화살표 없애기 - chrome */
      /* -moz-appearance: none; 화살표 없애기 - firefox */
      /* appearance: none;  공통 - 화살표 없애기 */
    }
    td > textarea {
      width: 100%;
      height: 200px;
      resize: none;
    }
    .footer > div > input {
      margin: 5px;
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
    .area_footer > [name=exit] {
      color: black;
      background-color:#D5D5D5;
      border-radius: 5px;
      border-style: none;
      width:60px;
      height:35px;
      float:left;
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
          <tr><td>문의 내용<span style="color:red"> *</span></td><td><textarea name="question_content" id="question_content" rows="10" cols="80"></textarea>
            <script>CKEDITOR.replace('question_content');</script></td></tr>
            <tr><td></td>
              <td style="font-size:13px;">
                그림 파일만 첨부해주세요(.jpg, .jpeg, .gif, .png 등)
                <br>
                보안상 hwp, zip 파일 등은 확인할 수 없습니다.
                <br>
                <input id="filename" value="" disable="disabled" style="height:20px;">
                <span><input id="file" type="file" onchange="document.getElementById('filename').value=this.value;" /></span>
              </td>
            </tr>
        </tbody>
      </table>
    </div>
    <div class="footer">
      <div class="area_footer">
        <input name="submit" value="제출" onclick="return check();"></input>
        <button type="button" name="exit" value="취소" onclick="cancle();"></button>
      </div>
    </div>
    </form>
    <script type="text/javascript">
    function cancle() {
      location.href="login.php";
      // location.href='login.php';
    }
    function validateEmail(email) {
      var re = /\S+@\S+\.\S+/;
      return re.test(email);
    }
    function check(){
      var email = document.getElementsByName("email")[0].value;

      if(!validateEmail(email)) {
        alert("이메일 형식에 맞지 않습니다.");
        return false;
      }
      return true;
    }
    </script>
  </body>
</html>
