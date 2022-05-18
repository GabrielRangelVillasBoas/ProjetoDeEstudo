<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include_once('header.php');?>
    <div class="row">
        <h1>Niel pnc</h1>
        <input type="text" id="nielnob">
        <button onclick="ativar()">aperta ak</button>
    </div>
    <?php include_once('footer.php');?>


    <script>
        function ativar(){
        var moeda = 'usd'
        var url = "https://economia.awesomeapi.com.br/json/last/"+moeda
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", url, true);

        xhttp.onreadystatechange = function(){//Função a ser chamada quando a requisição retornar do servidor
            if ( xhttp.readyState == 4 && xhttp.status == 200 ) {//Verifica se o retorno do servidor deu certo
             var jsonRetornado = JSON.parse(xhttp.responseText);
             if(moeda === 'eur'){
                console.log(jsonRetornado.EURBRL.name+' noob fudido '+jsonRetornado.EURBRL.bid);
             }
             if(moeda === 'usd'){
                console.log(jsonRetornado.USDBRL.name+' noob fudido '+jsonRetornado.USDBRL.bid);
             }
               
            }
        }

        xhttp.send()}
        window.document.getElementById('nielnob');
        




      
        
    </script>
</body>
</html>