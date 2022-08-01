<?php

if (isset($_POST["submit"])) {

    $username = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    require_once 'DataBaseHandler.inc.php';
    require_once 'Function.inc.php';

    if (emptyInputSignup($username, $email, $pwd, $pwdrepeat) !== false) {
      header("location: ../Pages/System/Sign_Up.php?error=emptyinput");
      exit();
    }
    if (invalidUid($username) !== false) {
      header("location: ../Pages/System/Sign_Up.php?error=invaliduid");
      exit();
    }
    if (invalidEmail($email) !== false) {
      header("location: ../Pages/System/Sign_Up.php?error=invalidemail");
      exit();
    }
    if (pwdMatch($pwd, $pwdrepeat) !== false) {
      header("location: ../Pages/System/Sign_Up.php?error=pswddontmatch");
      exit();
    }
    if (uidExists($connect, $username, $email) !== false) {
      header("location: ../Pages/System/Sign_Up.php?error=usernametaken");
      exit();
    }

    createUser($connect, $email, $username, $pwd);

}
else {
  header("location: ../Pages/Errors/4xx_ERRORS/404.html");
  exit();
}
#                Hello Code Viewer!