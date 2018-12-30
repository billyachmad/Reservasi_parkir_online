<?php

include('./config.php');
$pesan='';

function redirect($location){
  header("Location: ".$location);
  die();
}

if(isset($_POST['daftar'])){
  $username = $_POST['username'];
  $emailuser = $_POST['emailuser'];
  $password = $_POST['password'];

  if(!query('SELECT emailuser FROM user WHERE user.emailuser = :emailuser',array(':emailuser'=>$emailuser))){
    if(!query('SELECT username FROM user WHERE user.username = :username',array(':username'=>$username))){
      query('INSERT INTO user VALUES (:username,:emailuser,:password)',
      array(':username'=>$username,'emailuser'=>$emailuser,'password'=>password_hash($password,PASSWORD_BCRYPT)));
      $pesan = "Sign Up Berhasil!";
      redirect("login.php");
    }else{
      $pesan = "Username telah dipakai!";
    }
  }
  else{
    $pesan = "Email telah dipakai!";
  }
}
echo($pesan);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Index</title>
  <link rel ="stylesheet" type="text/css" href="style.css">

</head>

<body>
  <body background="background.jpg">
  <p> <?php echo $pesan; ?> </p>
  <h1>Sign Up</h1>
  <div class="kotak_login">
    <form action="./signup.php" method="post">
      <center>
      <label>Username</label></br>
      <input type="text" name="username" ></br>
      </br>
      <label>Email</label></br>
      <input type="email" name="emailuser" ></br>
      </br>
      <label>Password</label></br>
      <input type="password" name="password" ></br>
      </br>
      <input type="submit" name="daftar" value="Sign Up">
      </center>
</div>
  </form>
</body>

</html>