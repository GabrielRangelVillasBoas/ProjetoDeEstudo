<?php
session_start();

// if((!isset($_SESSION['loguin']) == true) and (!isset($_SESSION['senha']) == true)) 
// {
//   header('location: index.php');
//   $logado = $_SESSION['loguin'];
  
// } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style2.css">
  <title>Login Form Demo</title>
</head>
<body>
  <div class="login-wrapper">
    <form action="loguin.php" class="form" name="Login_Form" method="post">
      <img src="Fotos/mascara_banner_1.jpg" alt="">
      <h2>Login</h2>
      <div class="input-group">
        <input type="text" name="usuario" id="usuario" autocomplete="off" required>
        <label for="loginUser">Usuario</label>
      </div>
      <div class="input-group">
        <input type="password" name="senha" id="senha" required>
        <label for="loginPassword">Senha</label>
      </div>
      <input type="submit" value="Login" class="submit-btn">
      <span> ou </span>
      <button onclick="location.href='/cadastro.php'" class="submit-btn">Cadastra-se</button>
      <!-- <a href="#forgot-pw" class="forgot-pw">Forgot Password?</a> -->
    </form>

    <div id="forgot-pw">
      <form action="" class="form">
        <a href="#" class="close">&times;</a>
        <h2>Reset Password</h2>
        <div class="input-group">
          <input type="email" name="email" id="email" required>
          <label for="email">Email</label>
        </div>
        <input type="Submit" value="Submit" class="submit-btn">
      </form>
    </div>
  </div>
</body>
</html>