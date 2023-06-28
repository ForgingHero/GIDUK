<?php

    session_start();

    #Inclusão do caminho do arquivo de conexão com o banco de dados
        require_once "../conexao-banco-de-dados.php";

    if(isset($_POST['enviar-formulario-animal'])):
        $erros = array();

        
        

        #Váriaveis que armazenarão os dados das caixas de texto
        $nome = filter_input(INPUT_POST, 'nome-animal', FILTER_SANITIZE_SPECIAL_CHARS);
        $especie = filter_input(INPUT_POST, 'especie-animal', FILTER_SANITIZE_SPECIAL_CHARS);
        $sexo = filter_input(INPUT_POST, 'sexo-animal');
        $porte = filter_input(INPUT_POST, 'porte-animal');
        $foto = $_FILES['foto-animal'];
        
        $descricao = filter_input(INPUT_POST, 'descricao-animal', FILTER_SANITIZE_SPECIAL_CHARS);

        // Validando foto do animal enviada

            $formatosPermitidos= array("png", "jpeg", "jpg");//Adicionando poos formatos permitidos para arquivo
            $extensao = pathinfo($_FILES['foto-animal']['name'], PATHINFO_EXTENSION); // Fazendo uma function que possa armazenar a extensão do arquivo mandado

            if (in_array($extensao, $formatosPermitidos)):
                $pasta = "arquivos/";
                $temporario = $_FILES['foto-animal']['tmp_name'];
                $novoNome = uniqid().".$extensao";

                if (move_uploaded_file($temporario, $pasta.$novoNome)):
                    $mensagem = "Upload feito com sucesso!";
                else:
                    $mensagem = "Erro, não foi possível fazer o upload";
                endif;
            else:
                $mensagem = "Só é permitido arquivos png ou jpeg.";
            endif;
            echo $mensagem;

        endif;
           
        // Verifiquei se tem erro
            if(!empty($erros)):
                foreach ($erros as $erro):
                    echo "<li> $erro </li>";
                endforeach;
        else:

            
        
        $cidadeDono = $_SESSION['cidade'];
        $estadoDono = $_SESSION['estado'];
        $idDono = $_SESSION['id'];

        $result_usuario = "INSERT INTO animal (Nome, Especie, Sexo, Porte, Foto, Descricao, Cidade, Estado, DisponivelParaAdocao) VALUES ('$nome', '$especie', '$sexo', '$porte', '$foto', '$descricao', '$cidadeDono', '$estadoDono', 1)";
        $resultado_usuario = mysqli_query($conexaoComBancoDeDados, $result_usuario);

        $result_usuario = "SELECT * FROM animal WHERE Nome = '$nome' and Especie = '$especie' and Sexo = '$sexo' and  Porte = '$porte' and Descricao = '$descricao'";
        $resultado_usuario = mysqli_query($conexaoComBancoDeDados, $result_usuario);
        $dadosAnimal = mysqli_fetch_assoc($resultado_usuario);

        echo "<hr/>";

        var_dump($dadosAnimal);
        echo "<hr/>";
       

        $_SESSION['adotado'][] = false;
        $_SESSION['id_animal'][] = $dadosAnimal['Id'];
        $_SESSION['nome_animal'][] = $dadosAnimal['Nome'];
        $_SESSION['especie_animal'][] = $dadosAnimal['Especie'];
        $_SESSION['sexo_animal'][] = $dadosAnimal['Sexo'];
        $_SESSION['porte_animal'][] = $dadosAnimal['Porte'];
        $_SESSION['foto_animal'][] = $dadosAnimal['Foto'];
        $_SESSION['descricao-animal'][] = $dadosAnimal['Descricao'];
        $_SESSION['formulario_feito'][] = $_POST['enviar-formulario-animal'];
        echo "</br>";

        var_dump($_FILES);
        //header("Location: ../../../../Perfil.php");

    endif;   
?>