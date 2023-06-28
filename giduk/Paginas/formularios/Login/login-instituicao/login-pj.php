<?php
require_once "function-pj.php";
include_once("../../conexao-banco-de-dados.php");
session_start();
session_unset();
session_destroy();

if (isset($_POST['acessar'])){
    login($conexaoComBancoDeDados);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/Paginas/formularios/Login/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="icon" href="/Img/logos/favicon.png" type="image/png">
        <title>Login da Instituição - Giduk</title>
      </head>
    <body>
        <div id="login">
            <form class="card" action="" method="POST"onsubmit="return isvalid()">

                <div class="card-header">

                    <h2 class ="titulo-login">LOGIN</h2>
                </div >
                <div class="divpng">
                    <img class="img" src="/Paginas/formularios/Login/img/logo.png" alt="imagem com um cachorro e um gato representando a logo do site">
                   </div>
                <div class="card-content">
                    <div class="card-content-area">
                        <label for="email">EMAIL</label>
                        <input type="email" id="email" name="email" autocomplete="off"required>
                    </div>
                    <div class="card-content-area">
                        <label for="password">SENHA</label>
                        <input type="password" id="senha" name="senha" autocomplete="off"required>
                        <div class="icon">
                            <i class="bi bi-eye-fill" id="btn-senha" onclick="mostrarSenha()"></i>
                        </div>
                        <script src="script.js"></script>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" name="acessar" value="ENTRAR" class="submit" >
                </div>
                <div class="login1" style="margin-top: 10px;">
                    <div class="login2"><h3>Não tem uma conta?</h3></div><div class="login3"><a href="../../CadastroPessoa.html" class="recuperar_senha" style="font-size:14px;">Cadastre-se</a></div>
                </div> 
            </form>
            <script>
                 function isvalid(){
                var user = document.form.email.value;
                var pass = document.form.senha.value;
                if(user.length=="" && pass.length==""){
                    alert("O campo email ou senha está vazio!");
                    return false;
                }
                else if(user.length==""){
                    alert("O campo email está vazio!");
                    return false;
                }
                else if(pass.length==""){
                    alert("O campo senha está vazio!");
                    return false;
                }
                
            }
            </script>
        </div>
    </body>
</html>