<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/Style1.css">
    <link rel="icon" href="/Img/logos//favicon.png" type="image/png">
    <title>Giduk</title>

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
        width: 40% !important;
        border-radius: 50px !important;
        border: solid 7px #67c8d540 !important;
        }
      </style>

    <nav>

        <div class="Duvidas1">
            <!--Sobre a fonte-->
            <a href="../Paginas/Suporte.html" class="Duvidas2">Contato</a>
        </div>
        
        <div class="Menu">
            <div>
                <img src="./Img/logos/GIDUK_Logo.png" id="Img">
            </div>

            <div>
                <!--Classe para aumentar o padding-bottom dos links(Espacamento_baixo)-->
                <a href="./Paginas/Sobre_Nos.html"  class="Links">Sobre</a>
                <a href="./Paginas/SejaNossoParceiro.html"  class="Links">Parceiros</a>
                <a href="./Paginas/formularios/Login/LoginPessoa.html"  class="btn" style="margin-right: 15px;">Fazer login</a>
                <a href="./Paginas/TermosContrato.html" class="btn">Cadastre-se</a>
            </div>   
        </div>

    </nav>
    <section class="conteiner-maior">
    <div id='popup' class='popup'>
                       
                       <div class='popup-img-btn'>
                           <h2>Lobinho</h2>
                           <div class='div-foto'>
                               <img src='./Img/animais/Lobinho.jpg'>
                           </div>
                           <a href="https://www.caosemdono.com.br/adocoes-e-apadrinhamento"><button id='popup-btn'>Ir ao site</button></a>
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
            <div class="content">
                <div class="slides">
                    
                    <div class="slide">
                        <img src="./Img/banners/1.png" alt="">
                    </div> 
                    <div class="slide">
                        <img src="./Img/banners/2.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="./Img/banners/3.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="./Img/banners/4.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="./Img/banners/5.png" alt="">
                    </div>
                    
                </div>

            </div>


            <div>
                <h2 style="margin: 40px 77px; color: #255950;"><b>Adote um amigo!</h2>
                <p style="margin: 20px 77px; margin-bottom: 60px;">Que tal achar mais um pra sua família?</b></p>
            </div>
            <div class='Container' >
                
                
                <a style = 'text-decoration: none;' href='javascript: abrir();' onclick='toggle()'><div>
                        <img src="../Img/animais/Lobinho.jpg" class="Imagens">
                        <P class="Titulo_Fichas"><b>Lobinho</b></P>
                    </div>
                    <a style = 'text-decoration: none;' href='javascript: abrir();' onclick='toggle()'>    <div>
                        <img src="../Img/animais/Aquiles.jpg" class="Imagens">
                        <P class="Titulo_Fichas"><b>Aquiles</b></P>
                    </div>
                    <a style = 'text-decoration: none;' href='javascript: abrir();' onclick='toggle()'>    <div>
                        <img src="../Img/animais/Jasmine.jpg" class="Imagens">
                        <P class="Titulo_Fichas"><b>Jasmine</b></P>
                    </div>

                    <a style = 'text-decoration: none;' href='javascript: abrir();' onclick='toggle()'><div>
                        <img src="../Img/animais/Bento.jpg" class="Imagens">
                        <P class="Titulo_Fichas"><b>Bento</b></P>
                    </div></a>
            </div>
            <div style = "width: 100%; text-align: center;">
                <a href="./Paginas/Adote.html"><button class="btn" style = "margin-left: 40px; width: 300px; height: 40px"><b style="margin-bottom: 10px;">Ver Mais   </b>▼ </button></a>
            </div>
        </div>
        
    </section>

    <footer style="padding-right: 0;">
        <div class="container-footer">
            <ul>
                <li class="titulo"></li>
                <p>GIDUK é uma plataforma que te ajuda <br> a divulgar os animais que precisam de um lar.<br> Adote com responsabilidade!</p>
             </ul>

            <ul>
                <li class="titulo"><strong> GIDUK </strong></li>
                <li> <a href="./Paginas/Sobre_Nos.html"> Sobre</a> </li>
                <li> <a href="./Paginas/SejaNossoParceiro.html"> ONGs/Abrigos</a> </li>
                <li> <a href="./Paginas/TermosContrato.html"> Seja nosso parceiro</a></li>
            </ul>
            <ul>
                <li class="titulo"><strong> DIVULGUE UM ANIMAL</strong></li>
                <li> <a href="./Paginas/formularios/Login/LoginPessoa.html"> Cadastre um animal</a></li>
            </ul>
            <div class="medias-sociais">
                <a href=""> <img src="./Img/icones-socialmedia/icons8-instagram-30.svg"></a>
                <a href=""> <img src="./Img/icones-socialmedia/icons8-facebook1.svg"></a>
                <a href=""> <img src="./Img/icones-socialmedia/icons8-twitter (1).svg"></a>
            </div>
    </footer>  
    
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