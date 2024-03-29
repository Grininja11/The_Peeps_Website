<php

<!DOCTYPE html>
<html>
<head>
  <title>Sign Up - ThePeeps</title>
  <link rel="icon" type="image" href="/Icons/Other/System/Login-Signup.png ">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="/CSS/signup_login-Style.css">
</head>
<body>

  <div class="container">
    <form class="form" id="createAccount" method="post" action="../../Include/SignUp.inc.php">
        <h1 class="form_title">Sign Up</h1>

        <div class="form_input_group">
            <input name="uid" type="text" class="form_input" id="signupUsername" autofocus placeholder="Your Cool Username!">
            <div class="error"></div>
        </div>

        <div class="form_input_group">
            <input name="email" type="email" class="form_input" id="Email" autofocus placeholder="Your Cool Email Address!">
            <div class="error"></div>
        </div>

        <div class="form_input_group">
            <input name="pwd" type="password" class="form_input" id="Pass" autofocus placeholder="Your Cool Password!">
            <div class="error"></div>
        </div>

        <div class="form_input_group">
            <input name="pwdrepeat" type="password" class="form_input" id="ConfPass" autofocus placeholder="Confirm Your Cool Password!">
            <div class="error"></div>
        </div>

        <button class="form_button" name="submit" type="submit">Continue to Your new Cool Account!</button>

        <!-- Form Errors -->
        <?php
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
              echo "<p>Please Fill in all of the Cool Inputs!</p>"
            }
            else if ($_GET["error"] == "invaliduid") {
              echo "<p>Please make a Cool Username!</p>"
            }
            else if ($_GET["error"] == "invalidemail") {
              echo "<p>Please use your Cool Email!</p>"
            }
            else if ($_GET["error"] == "pwddontmatch") {
              echo "<p>Oops, Your Passwords don't Match!</p>"
            }
            else if ($_GET["error"] == "usernametaken") {
              echo "<p>Oops, That Username is taken, Please create make another Username!</p>"
            }
            else if ($_GET["error"] == "none") {
              echo "<p>WELCOME TO thecoolpeeps.com!</p>"
            }
          }# 1:30:53
        ?>

        <p class="form_text">
            <a class="form_link" href="Login.html">You already have a Cool Account? Login here!</a>
        </p>
    </form>

    <div class="Logo_Container">
      <img class="Logo" src="/Icons/Logos/PEEPS_MAIN_LOGO-Circle_Var.png" onClick="parent.location='/Home.html'" width="200" height="200">
    <div>
  </div>
  
  <style>
    .Logo_Container {
      position: relative;
      bottom: -100px;
    }
    .Logo {
      display: block;
      margin-left: auto;
      margin-right: auto;
      margin-bottom: -40px;
      transition: .2s;
    }
    .Logo:hover {
      transform: scale(1.03);
    } 
  </style>
  
</body>
</html>