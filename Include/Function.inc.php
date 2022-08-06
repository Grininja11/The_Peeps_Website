<?php

function emptyInputSignup($username, $email, $pwd, $pwdrepeat) {
  $result;
  if (empty($username) || empty(email) || empty($pwd) || empty($pwdrepeat)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invalidUid($username) {
  $result;
  if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invalidEmail($email) {
  $result;
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function pwdMatch($pwd, $pwdrepeat) {
  $result;
  if ($pwd !== $pwdrepeat) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function uidExists($connect, $username, $email) {
  $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
  $stmt = mysqli_stmt_init($connect);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../Pages/Errors/4xx_ERRORS/422.html");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $username, $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  } else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}

function createUser($connect, $email, $username, $pwd) {
  $sql = "INSERT INTO users (usersEmail, usersUid, usersPwd) VALUES (?, ?, ?);";
  $stmt = mysqli_stmt_init($connect);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../Pages/Errors/4xx_ERRORS/422.html");
    exit();
  }

  $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "sss", $email, $username, $hashedPwd);
  mysqli_stmt_execute($stmt);

  mysqli_stmt_close($stmt);

  header("location: ../Pages/System/Sign_Up.php?error=none")
}