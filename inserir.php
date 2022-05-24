<?php
header('Content-Type: application/json');
ini_set('display_errors', 1);
include_once "conectar.php";
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Content-Type");
require_once('phpmailer/PHPMailerAutoload.php');

$nome = $_POST['nome'];

$email = $_POST['email'];

$telefone = $_POST['telefone'];

$mensagem = $_POST['mensagem'];


$pdo = new PDO('mysql:host=localhost; dbname=loguin;','root','');

$stmt = $pdo->prepare('INSERT INTO sms (nome, email, telefone, mensagem) VALUES (:nome, :email, :telefone, :mensagem)');

$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':telefone', $telefone);
$stmt->bindValue(':mensagem', $mensagem);
$stmt->execute();
if($stmt->rowCount() >= 1){
    echo json_encode('Salvo');
} else {
    echo json_encode('Nao Salvo');
}

    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

         $sql = "INSERT INTO sms VALUES ('$nome','$email','$telefone','$mensagem')";
           mysqli_query($conexao,$sql);
           var_dump($sql);
           $html = '<b>Chegou seu e-mail !</b> <br /><br />';
           $html .= '<b>Nome:</b> '.utf8_encode($nome).'<br />';
        //    $html .= '<b>Telefone:</b> '.$telefone.'<br />'; 			
        //    $html .= '<b>E-mail:</b> '.$email.'<br />'; 			
           $html .= '<b>Mensagem:</b> '.$nome.'<br />'; 			
     
         $mailer = new PHPMailer();
         $mailer->IsSMTP();
         $mailer->SMTPDebug = 0;
         $mailer->Port = 465;
         $mailer->Host = 'smtp.hostinger.com';
         $mailer->SMTPAuth = true;
         $mailer->SMTPSecure = 'tls';
         $mailer->Username = 'gabrielrangel@gabrielrangel.xyz';
         $mailer->Password = 'Niel2002*';
         $mailer->setFrom('',);
         // $mailer->addAddress('');
         // $mailer->addAddress('');
         $mailer->addAddress('cursosgabrielrangel@gmail.com');
         $mailer->Subject = 'BOM - DIA!';
         $mailer->CharSet = 'UTF-8';
         $mailer->Body = $html;
         $mailer->IsHTML(true); 	
         $mailer->AddReplyTo($email);
     
         echo $html;
     
          if(!$mailer->Send()){
          	echo '0';
          }else{
          	echo '1';
          }

          