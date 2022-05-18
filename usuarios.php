<?php include("header.php"); ?>
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
   <ul id="listaUsuarios"></ul>

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
  <script> var settings = {
  "url": "http://projetinho.local/api/api.php?acao=SELECT&tabela=usuario&where=usuario_id>0",
  "method": "GET",
  "timeout": 0,
    };
     
     $.ajax(settings).done(function (response) {
      $.each(JSON.parse(response), function(i, item) {
        $('#listaUsuarios').append("<li>"+item.usuario +"</li>");
        });
      //  response.map((i)=>$('#listaUsuarios').append("<li>"+i.usuario +"</li>"));
       console.log(response);
         });       </script>
</body>
</html>