<?php
include("conectar.php");
session_start();

if((!isset($_SESSION['loguin']) == true) and (!isset($_SESSION['senha']) == true)) 
{
  header('location: index.php');
  $logado = $_SESSION['loguin'];

  
  
  
} 





?>

<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newton Ag</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="Fotos/fivecon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
    

</head>
<body>
  <?php
    
  $query = "select nome, sobrenome, idade from pessoa";
  
  $result = mysqli_query($conexao, $query);
  echo "<table border='1'>
<tr>
<th>nome</th>
<th>sobrenome</th>
<th>idade</th>
</tr>";
if($result->num_rows > 0){
    foreach($result as $row){
        echo "<tr>";
        echo "<td>". $row["nome"] . "</td>";
        echo "<td>". $row["sobrenome"] . "</td>";
        echo "<td>". $row["idade"] . "</td>";

        echo "</tr>";
     }
}
echo "</table>";

  ?>
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="mainNav">
        <div class="container">
          <a class="navbar-brand js-scroll-trigger" href=""><img src="Fotos/fivecon.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <?php
              // Conectando ao banco de dados da tabela LINKS 
               $query = "select link, href from links";
               $result = mysqli_query($conexao, $query);
              // Percorrendo os resultados da tabela Links
               if($result->num_rows > 0){
                foreach($result as $row){
                  // . $row["href"] . Retornar valor do banco Coluna Href
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link js-scroll-trigger" href="'. $row["href"] .'" > '. $row["link"] .'</a>
                    </li>';
                 }
            }
              
              ?>

              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#quemSomos" >Quem Somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#equipe">Equipe</a>
              </li>
    
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#espaço">Espaço</a>
              </li>
              
              
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#faleConosco">Fale Conosco</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-responsive img-fluid" src="Fotos/Banner.png" alt="Primeiro Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid" src="Fotos/Banner.png" alt="Segundo Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid" src="Fotos/Banner.png" alt="Terceiro Slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>
      <div class="container mt-5 ml-lg-5" >
        <div class="row g-0">
            <div class="col-lg-6 zoom">
                <img src="Fotos/máscara 1.png" class="img-fluid">
            
        </div>
        <div class="col-lg-6" >
            <h1 class="display-4 mt-1 ml-4" id="quemSomos">Quem Somos</h1>
            <p class="ml-4 mt-1">
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit sapiente delectus dolores quaerat quibusdam quos alias praesentium tenetur ad ut, est laboriosam, similique nesciunt nulla, voluptatem libero expedita veritatis? Veniam!
                </p>
                <button type="button" class="btn btn-danger ml-4 mt-1">Saiba Mais</button>
        </div>
         </div>
          </div>
    <div class="container mt-5 ml-lg-5">
    <div class="row g-0">
        <div class="col-lg-6">
            <h1 class="display-4 mt-1 ml-4" id="equipe">Nossa equipe</h1>
            <p class="ml-4 mt-1">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit sapiente delectus dolores quaerat quibusdam quos alias praesentium tenetur ad ut, est laboriosam, similique nesciunt nulla, voluptatem libero expedita veritatis? Veniam!
               </p>
        
    </div>
    <div class="col-lg-6 zoom">
         <img src="Fotos/Reuniao1.png" class="img-fluid">
        
            
    </div>
</div>
</div>
<section class="container mt-5 ml-lg-5 forma2 forma3">
  <div class="container mt-5 ml-lg-5">
    <div class="row g-0">
        <div class="col-lg-6">
          <h1 class="display-5 mt-5 ml-3" id="espaço">Nosso Espaço</h1>
        <p class="ml-4 mt-5">
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit sapiente delectus dolores quaerat quibusdam quos alias praesentium tenetur ad ut, est laboriosam, similique nesciunt nulla, voluptatem libero expedita veritatis? Veniam!
            </p>
            
        
    </div>
    <div class="col-lg-6 mt-5" >
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid" src="Fotos/máscara 1.png" alt="Primeiro Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid" src="Fotos/máscara 1.png" alt="Segundo Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid" src="Fotos/máscara 1.png" alt="Terceiro Slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>
    </div>
     </div>
      </div>
</section>

<div class="text-center m-auto">
  <h3 class="mt-3" id="faleConosco">Fale conosco</h3>
  <p class="mt-3">Quer conversar com a Health Clinic? Basta<br>preencher o formulário abaixo e nós entraremos<br> em contato assim que possível!</p>
  <div class="text-danger d-flex mt-4 ml-auto">
    <a href="" class="ml-5 whats text-center m-auto">
         <img src="Fotos/Icon awesome-phone-alt.svg" alt=""class="zap">
      </a>
      <a href="" class="ml-1 whats  text-center m-auto">
          <img src="Fotos/Icon ionic-logo-whatsapp.svg" alt=""class="zap"> 
      </a>
      <a href="" class="ml-1 whats text-center m-auto">
        <img src="Fotos/Icon simple-wechat.svg" alt="" class="zap"> 
    </a>
      
  </div>
</div>

<section class="container forma mt-5">
  <form id="formu">
    <div class="form-row" >
      <div class="col">
        <input type="text" class="form-control form-control-lg mt-5 required" id="nome" placeholder="Nome" >
        <input type="text" class="form-control form-control-lg mt-5 required" id="email" placeholder="E-mail">
        <input type="text" class="form-control form-control-lg mt-5 required" id="telefone" placeholder="Telefone" >
      </div>
      <div class="col">
        <div class="form-group row">
         
          <div class="col-sm-10">
            <textarea class="form-control form-control-lg mt-5" id="exampleFormControlTextarea1" rows="9" placeholder="Menssagem"></textarea>
           <button  id="enviar" type="submit" form="formu" class="btn btn-danger ml-0 mt-3">Enviar </button>
           <!-- <input type="button" id="enviar_contato" value="Enviar" onclick="EnviarContato();" > -->
          </div>
      </div>
    </div>
  </form>
 </section>
<!-- FOOTEER ================================================ -->
    <footer class="bg-dark text-center text-white mt-5">
      
      <div class="container p-4 pb-0">
       
        <section class="mb-4">
          
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
          </svg><i class="fab fa-facebook-f"></i></a>         
    
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="bi bi-instagram"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg></i>
          </a>
    
          
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-linkedin-in"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
              <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
            </svg></i
          ></a>
    

        </section>
        
      </div>
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-white">Gabriel Rangel  </a>
      </div>  
      </footer>

    
    
    
<script src="js/script.js"></script>

    
</body>
</html>