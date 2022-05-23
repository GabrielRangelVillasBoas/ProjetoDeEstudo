<?php
header('Content-Type: application/json');
ini_set('display_errors', 1);
include_once "conectar.php";
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Content-Type");
require_once('phpmailer/PHPMailerAutoload.php');

$name = $_POST['name'];

$comment = $_POST['comment'];

$pdo = new PDO('mysql:host=localhost; dbname=LOGUIN;','root','');

$stmt = $pdo->prepare('INSERT INTO comments (name, comments) VALUES (:na, :co)');

$stmt->bindValue(':na',$name);
$stmt->bindValue(':co',$comment);
$stmt->execute();
if($stmt->rowCount() >= 1){
    echo json_encode('Salvo');
} else {
    echo json_encode('Nao Salvo');
}

    
    $name = $_POST['name'];
    //  $telefone = $_POST['telefone'];
    //   $email = $_POST['email'];
       $comments = $_POST['comment'];
         $sql = "INSERT INTO comments VALUES ('$name','$comments')";
           mysqli_query($conexao,$sql);
           var_dump($sql);
           $html = '<b>Chegou seu e-mail !</b> <br /><br />';
           $html .= '<b>Nome:</b> '.utf8_encode($name).'<br />';
        //    $html .= '<b>Telefone:</b> '.$telefone.'<br />'; 			
        //    $html .= '<b>E-mail:</b> '.$email.'<br />'; 			
           $html .= '<b>Mensagem:</b> '.$comments.'<br />'; 			
     
         $mailer = new PHPMailer();
         $mailer->IsSMTP();
         $mailer->SMTPDebug = 0;
         $mailer->Port = 587;
         $mailer->Host = 'smtp.office365.com';
         $mailer->SMTPAuth = true;
         $mailer->SMTPSecure = 'tls';
         $mailer->Username = '';
         $mailer->Password = '';
         $mailer->setFrom('',);
         // $mailer->addAddress('');
         // $mailer->addAddress('');
         $mailer->addAddress('');
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

          