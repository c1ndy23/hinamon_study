<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register Page</title>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <!-- cdn : 캐시처럼 무료로 공간 대여 -->
  </head>
  <body>
    <fieldset style="width:380px;">
      <legend>Register</legend>
      <form method="post" action="./join_update.php">
      <table>
        <tbody>
          <tr><td>Username</td><td><input type="text" name="username"></td></tr>
          <tr><td>Password</td><td><input type="password" name ="password"></td></tr>
          <tr><td>Password Check</td><td><input type="password" name="password_chk"></td></tr>
          <tr><td>Fullname</td><td><input type="text" name="fullname"></td></tr>
          <tr><td>Email</td><td><input type="text" name="email"></td></tr>
          <tr><td Colspan="2" style="text-align:right;"></td><td><input type="submit" value="Join us!" onclick="return regist();"></td></tr> <!-- submit 시 return false면 다음으로 넘어가지 않음 -->
        </tbody>
      </table>
      </form>
    </fieldset>
    <script>
      function validateEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
      }
      function regist() {
        // Javascript DOM(일반적인 HTML을 가지고 구성하는 것)
        var username = document.getElementsByName("username")[0].value;
        var password = document.getElementsByName("password")[0].value;
        var password_chk = document.getElementsByName("password_chk")[0].value;
        var fullname = document.getElementsByName("fullname")[0].value;
        var email = document.getElementsByName("email")[0].value;

        if(password!==password_chk) {
          alert("두 비밀번호가 서로 일치하지 않습니다.");
          return false;
        }

        if(!validateEmail(email)) {
          alert("이메일이 형식에 맞지 않습니다.");
          return false;
        }

        if(username.length < 10 || username.length > 30) {
          alert("username은 10자 이상, 30자 이하로 구성되어야 합니다.");
          return false;
        }

        return true;
        // 알파벳으로 구성되어야 한다
        // fullname = 실명
        // 비밀번호는 숫자, 영문자, 특수문자가 반드시 포함되어야 한다


        // jquery을 이용해서 간접적으로 HTML 가지고 구성)
        // alert($("input[name=username]").eq(0).val());
      }
    </script>
  </body>
</html>
