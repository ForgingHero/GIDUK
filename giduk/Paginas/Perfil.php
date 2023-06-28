<?php
    session_start();
    
    require_once "./formularios/Login/functions.php";
    require_once "./formularios/conexao-banco-de-dados.php";

    if(!$_SESSION['ativa'] == true){
        logout($conexaoComBancoDeDados);
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Style1.css">
    <link rel="icon" href="/Img/logos//favicon.png" type="image/png">
    <title>Perfil - Giduk</title>
</head>
<body>

     <!--Acessibilidade libras-->
     <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
          <div class="vw-plugin-top-wrapper"></div>
        </div>
      </div>
      <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
      <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
      </script>

      <style>
        .access-button {
        width: 30% !important;
        border-radius: 50px !important;
        border: solid 7px #67c8d540 !important;
        }
      </style>

    <nav>
    <div id='popup' class='popup'>
                       
                       <div class='popup-img-btn'>
                           <h2>Lobinho</h2>
                           <div class='div-foto'>
                               <img src='../Img/animais/Lobinho.jpg'>
                           </div>
                            <button id='popup-btn'>Excluir</button></a>
                            <button id='popup-btn'>Alterar</button></a>
                       </div>
           
                       <div class='popup-dados'>
                           <a href='javascript: fechar();'>
                               <button id='btn-fechar-popup' onclick='toggle()'>X</button>
                           </a>
                           <div class='dados-animais-popup'>                            
                               <p>Nome: Lobinho</p>
                               <p>Porte: Grande</p>
                               <p>Sexo: Macho</p>
                               <p>Descrição: Brincalhão e amoroso</p>
                               <p>Localização: São Paulo - SP</p>
                           </div>
                       </div>
                       </div>
                   
                   <div class="desfoque" id="blur">
        <div class="Menu">
            <div>
                    <img src="../Img/logos/GIDUK_Logo.png" id="Img">
            </div>

            <b style ='padding-left:800px; font-size: 18px;'>Olá, <?php echo $_SESSION['nome']?></b>
            <Img src="../Img/logos/GIDUK_Logo.png" class="user-pic" onclick="toggleMenu()">

            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="../Img/logos/GIDUK_Logo.png">
                        <h3><?php echo $_SESSION['nome']?></h3>
                    </div>
                    <hr>
                    <a href="/Paginas/formularios/Login/logout.php" class="sub-menu-link">
                        <Img src="../Img/perfil/logout.png">
                        <p>Sair</p>
                        <span></span>
                    </a>
                </div>
            </div>   
        </div>

    </nav>

    <section>

        <div class="org-perfil">
            
            <div class="dadosPerfil">
                <div class="Foto_perfil" style = "height: 160px; width: 160px; border-radius: 50%; margin: 0 auto; border: 1px solid rgb(204, 204, 204);">
                <img src="../Img/logos/LogoForm.png" style="
  height: 160px;
  width: 160px;
  border-radius: 50%;
">
            </div>

            <p name = "NomeUsuario"><?php echo $_SESSION['nome']?></p>
            <p name = "EstadoUsuario"><?php echo $_SESSION['cidade']." - ".$_SESSION['estado']?></p>
            <p name = "EmailUsuario"><?php echo $_SESSION['email']; ?></p>

            <a href='formularios//formulario-animal//formulario-animal.php'>
                <button class='btnCadastrarNovoAnimal'><b>Novo Pet</b></button>
            </a><br><br>

                <!-- Colocar na Div dos animais
                <button class="btnCadastrarNovoAnimal" id="btnExcluir"><b>Excluir Pet</b></button>
                -->
            </div>
           
            <div class="box-animais">
                <h2 style="color: #255957; font-size: 30px; padding-left: 2%;">Animais cadastrados</h2>
            
            
                <div class="Animais_Cadastrados">
                    
                
                <?php 
                    
                    // Conectar-se ao banco de dados
                    
                    
                    
                    //echo '<img src="./path/'.$_SESSION['foto_animal'].'">';
                    /*foreach($_SESSION['foto_animal'] as $valor => $value):
                        echo '<img src="./path/'.$value.'">';
                    endforeach; /* 
                    foreach ($_SESSION['nome_animal'] as $valor => $value): 
                        foreach($_SESSION['foto_animal'] as $a => $b):
                        echo "<div>
                        <img src=".$b." class='Imagens-perfil'>
                         <P class='NomePetPerfil'><b>$value</b></P>
                        </div>";  
                        endforeach;
                    endforeach;*/

                    /*$dadosAnimais = array($_SESSION['foto_animal'], $_SESSION['nome_animal']);
                        for ($i = 0; $i < count($dadosAnimais); $i++){
                            for($j = 0; $j < count($dadosAnimais[$i]); $j++){
                                echo "<div>
                                <img src=".$i." class='Imagens-perfil'>
                                <P class='NomePetPerfil'><b>$j</b></P>
                                </div>";
                            }
                        }*/
                        
                        /*echo "<a style = 'text-decoration: none;' href='javascript: abrir();' onclick='toggle()'><div>
                <img src='gera.php?id=1' alt='Blob de imagem' class='Imagens-perfil'>
                        <P class='NomePetPerfil' onclick='toggle()'><b>Lobinho</b></P>
                    </div>";*/
                        ?>  
                <a style = 'text-decoration: none;' href='javascript: abrir();' onclick='toggle()'><div>
                <img src='gera.php?id=1' alt='Blob de imagem' class='Imagens-perfil'>
                        <P class='NomePetPerfil' onclick='toggle()'><b>Lobinho</b></P>
                    </div>
                    </a>
                    <div>
                        <img src="../Img/animais/Aquiles.jpg" class="Imagens-perfil">
                        <P class="NomePetPerfil"><b>Aquiles</b></P>
                    </div>
                    <div>
                        <img src="../Img/animais/Jasmine.jpg" class="Imagens-perfil">
                        <P class="NomePetPerfil"><b>Jasmine</b></P>
                    </div>
                    <div>
                        <img src="../Img/animais/Bento.jpg" class="Imagens-perfil">
                        <P class="NomePetPerfil"><b>Bento</b></P>
                    </div>
                    <div>
                        <img src="../Img/animais/Estopinha.jpg" class="Imagens-perfil">
                        <P class="NomePetPerfil"><b>Estopinha</b></P>
                    </div>
            </div>
                    </div>
    </section>

    <script>
       let subMenu = document.getElementById("subMenu");

       function toggleMenu(){
        subMenu.classList.toggle("open-menu")
        
       }
    </script>
<script type="text/javascript">
        function abrir(){
            document.getElementById('popup').style.display = "block";
            document.getElementById('popup').style.zIndex = 1;
        }

        function fechar(){
            document.getElementById('popup').style.display = "none";
        }
        function toggle(){
            var blur = document.getElementById ('blur');
            blur.classList.toggle('active');
        }

    </script>
</body>
</html>