
<?php

//conexão
$conn = mysqli_connect('localhost', 'root', '', 'loguin');


// pegar o metodo da chamada, POST ou GET
$method = $_SERVER['REQUEST_METHOD'];

//Via POST faremos o update e o insert
if ($method == "POST"){
 
  $varLoguin = $_POST['novoUsuario'];
  $varSenha = $_POST['novaSenha'];
  $varNome = $_POST['novoNome'];
  $varCpf = $_POST['novoCpf'];
  // $redirect = $_GET["redirect"];
  $dia = date('Y/m/d H:i:s');
  $paginaAtual = basename($_SERVER['PHP_SELF']);
  // acao=INSERT&tabela=usuario&novoUsuario=nielzada1993&novaSenha=123456
   
// Criação tabela cadastro clientes
//   CREATE TABLE Cadastro (
//     cadastroId int NOT NULL AUTO_INCREMENT,
//     loguin varchar(255),
//     senha varchar(255),
//     nome varchar(255),
//     cpf varchar(255),
//     PRIMARY KEY (cadastroId)
// );

  // $sql = "";
        // $sql = "INSERT INTO usuario (usuario, senha) VALUES ('$novoUsuario','$novaSenha')";
        $insereUsuario = "INSERT INTO `Cadastro`(`loguin`, `senha`, `nome`, `cpf`) VALUES ('$varLoguin','$varSenha','$varNome','$varCpf')";
        // $sql2 = "INSERT INTO logs (data, sistema) VALUES ('$dia', '$paginaAtual')";

  //Executar ação no banco
  $result = mysqli_query($conn, $insereUsuario);

  


  if($result > 0){
    header("location: http://localhost/site.php");
  }


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




