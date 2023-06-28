<?php
    
    include_once("../../conexao-banco-de-dados.php");

function login($conexaoComBancoDeDados){
         if (isset($_POST['acessar']) AND !empty($_POST['email']) AND !empty($_POST['senha'])){
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);//VERIFICA SE A FORMATAÇÃO DO EMAIL É VÁLIDA
        $senha = $_POST['senha'];

        $query = "SELECT * FROM pessoajuridica WHERE Email = '$email' AND Senha = '$senha'";
        $executar = mysqli_query($conexaoComBancoDeDados, $query);
        $return = mysqli_fetch_assoc($executar);

        if (!empty($return['Email'])) {

           // echo "Bem vindo ".  $return['Nome'];
           session_start();
           $_SESSION['nome'] = $return['Nome'];
           $_SESSION['id'] = $return['Id'];
           $_SESSION['email'] = $return['Email'];
           $_SESSION['cidade'] = $return['Cidade'];
           $_SESSION['estado'] = $return['Estado'];
           $_SESSION['foto-perfil'] = $return['FotoPerfil'];
           $_SESSION['ativa'] = TRUE;
           
           header("Location: ../../../Perfil.php");
        }
        else{
            echo '<script>
            window.location.href = "login-pj.php";
            alert("Usuário ou senha não encontrado!")
            </script>';
        }
    }
    }
?>