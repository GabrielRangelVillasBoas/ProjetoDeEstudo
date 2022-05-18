
<?php

//conexão
$conn = mysqli_connect('localhost', 'root', 'root', 'loguin');


// pegar o metodo da chamada, POST ou GET
$method = $_SERVER['REQUEST_METHOD'];

//Via POST faremos o update e o insert
if ($method == "POST"){
 
  $novoUsuario = $_POST["novoUsuario"];
  $novaSenha = $_POST["novaSenha"];
  // $redirect = $_GET["redirect"];
  $dia = date('Y/m/d H:i:s');
  $paginaAtual = basename($_SERVER['PHP_SELF']);
  // acao=INSERT&tabela=usuario&novoUsuario=nielzada1993&novaSenha=123456
   


  $sql = "";
        $sql = "INSERT INTO usuario (usuario, senha) VALUES ('$novoUsuario','$novaSenha')";
        $sql2 = "INSERT INTO logs (data, sistema) VALUES ('$dia', '$paginaAtual')";

  //Executar ação no banco
  $result = mysqli_query($conn, $sql);

  echo $result;
  $result2 = mysqli_query($conn, $sql2);
  
  $myfile = fopen("dblocal.txt", "a") or die("Unable to open file!");
  $save = "usuario:". $novoUsuario . "senha:" . $novaSenha ."\n";
  fwrite($myfile, $save);
  fclose($myfile);

  // if($redirect =='google'){
  //   header("location: http://www.palmeiras.com.br");
  // }else{
  //   header("location: http://www.g1.com.br");

  // }


}else if ($method == "GET"){
  //via get faremos o select e o delete

    $acao = $_GET["acao"];

    $tabela = $_GET["tabela"];
    $where = $_GET["where"];

    $sql = "";
    if ($acao == "SELECT") {

      if($where != ""){
        $where = "where $where";
      }
      
        $sql = "SELECT * from $tabela $where;";

        //Executar ação no banco
        $result = mysqli_query($conn, $sql);

        $arrayRetorno = array();
        if (mysqli_num_rows($result) > 0) {

            while($item = mysqli_fetch_assoc($result)) {
                $arrayRetorno[] = $item;
            }
        } else {
            echo json_encode($arrayRetorno);
        }
    }

    if ($acao == "DELETE") {
       $sql = "DELETE from $tabela $where;";

       //Executar ação no banco
       $result = mysqli_query($conn, $sql);

       echo $result ;
    }

}else{

  echo json_encode(array("erro" => true , "mensagem" => "metodo não suportado"));

}

?>




