<?php
include("header.php");


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
    <button onclick="chamaApiCadastro()">Criar usuário via POST/Jquery</button>
    <form action="api/api.php" class="form" name="Login_Form" method="post">
      <img src="Fotos/mascara_banner_1.jpg" alt="">
      <h2>Cadastra-se</h2>
      <div class="input-group">
        <input type="text" name="novoUsuario" id="novoUsuario" autocomplete="off" required>
        <label for="loginUser">Novo usuario</label>
      </div>
      <div class="input-group">
        <input type="password" name="novaSenha" id="novaSenha" required>
        <label for="loginPassword">Nova senha</label>
      </div>
      <input type="submit" value="Cadastra-se" class="submit-btn">
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
  <script>
    function chamaApiCadastro(){
      var novaSenha = $('#novaSenha').val();
      var novoUsuario = $('#novoUsuario').val();
      console.log('entrounafuncao')
      var settings = {
  "url": "http://projetinho.local/api/api.php",
  "method": "POST",
  "timeout": 0,
  "headers": {
    "Accept": "application/json, text/javascript, */*; q=0.01",
    "Accept-Language": "pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7",
    "Connection": "keep-alive",
    "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
    "Sec-Fetch-Dest": "empty",
    "Sec-Fetch-Mode": "cors",
    "Sec-Fetch-Site": "same-origin",
    "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36",
    "X-Requested-With": "XMLHttpRequest",
    "sec-ch-ua": "\" Not A;Brand\";v=\"99\", \"Chromium\";v=\"100\", \"Google Chrome\";v=\"100\"",
    "sec-ch-ua-mobile": "?0",
    "sec-ch-ua-platform": "\"Windows\""
  },
  "data": "acao=INSERT&redirect=google&novoUsuario="+novoUsuario+"&novaSenha="+novaSenha,
};

$.ajax(settings).done(function (response) {
  console.log(response);
});
    }
  </script>
</body>
</html>