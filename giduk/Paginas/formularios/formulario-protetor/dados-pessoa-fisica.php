<?php
    #Inclusão do caminho do arquivo de conexão com o banco de dados
    include_once("../conexao-banco-de-dados.php");
   

    if(isset($_POST['enviar-formulario-pf'])):
        $erros = array();
    
    #Váriaveis que armazenaram os dados das caixas de texto
        $nome = filter_input(INPUT_POST, 'nome-protetor', FILTER_SANITIZE_SPECIAL_CHARS);
        $dataNasc = filter_input(INPUT_POST, 'data-nascimento-protetor'); /* Dar uma pesquisa sobre input de data de nascimento*/ 
        $cpf = filter_input(INPUT_POST, 'cpf-protetor', FILTER_SANITIZE_SPECIAL_CHARS);
        $rg = filter_input(INPUT_POST, 'rg-protetor', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email-protetor', FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha-protetor', FILTER_SANITIZE_SPECIAL_CHARS);
        $fotoPerfil = $_FILES['foto-perfil-protetor'];
        $telefone = filter_input(INPUT_POST, 'telefone-protetor', FILTER_SANITIZE_NUMBER_INT);
        $celular = filter_input(INPUT_POST, 'celular-protetor', FILTER_SANITIZE_NUMBER_INT);
        $cep = filter_input(INPUT_POST, 'cep-protetor');
        $rua = filter_input(INPUT_POST, 'rua-protetor', FILTER_SANITIZE_SPECIAL_CHARS);
        $bairro = filter_input(INPUT_POST, 'bairro-protetor', FILTER_SANITIZE_SPECIAL_CHARS);
        $cidade = filter_input(INPUT_POST, 'cidade-protetor');
        $estado = filter_input(INPUT_POST, 'estado-protetor');
        $url = filter_input(INPUT_POST, 'url-protetor');

    // Validando foto do protetor
        $formatosPermitidos = array('jpeg', 'png', 'jpg');
        // Fazendo uma function que possa armazenar a extensão do arquivo mandado
            $extensao = pathinfo($_FILES['foto-perfil-protetor']['name'], PATHINFO_EXTENSION);
        
        if (in_array($extensao, $formatosPermitidos)):
            $pasta = "arquivos/";
            $temporario = $_FILES['foto-perfil-protetor']['tmp_name'];
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

        $sql = "SELECT * FROM pessoafisica WHERE Email = '$email'";
        $resultado = mysqli_query($conexaoComBancoDeDados, $sql);

        if(mysqli_num_rows($resultado) >= 1){
            $erros[] = "Email já existente";
        }

        $sql = "SELECT * FROM pessoafisica WHERE RG = '$rg'";
        $resultado = mysqli_query($conexaoComBancoDeDados, $sql);

        if(mysqli_num_rows($resultado) >= 1){
            $erros[] = "RG já existente";
        }
        
        $sql = "SELECT * FROM pessoafisica WHERE CPF = '$cpf'";
        $resultado = mysqli_query($conexaoComBancoDeDados, $sql);

        if(mysqli_num_rows($resultado) >= 1){
            $erros[] = "CPF já existente";
        }

    endif;

         if(!empty($erros)):
            foreach ($erros as $erro):
                echo "<li> $erro </li>";
            endforeach;
            
            header('Location: ./formulario-protetor.html'); 
        else:
            #Consulta que enviará os dados pro bd
                $result_usuario = "INSERT INTO pessoafisica(Nome, DataNasc, CPF, RG, Email, Senha, FotoPerfil, Telefone, Celular, CEP, Rua, Bairro, Cidade, Estado, Url) values ('$nome', '$dataNasc', '$cpf', '$rg', '$email', '$senha', '$fotoPerfil', '$telefone', '$celular', '$cep', '$rua', '$bairro','$cidade', '$estado', '$url')";

                $resultado_usuario = mysqli_query($conexaoComBancoDeDados, $result_usuario);
        
                header('Location: ../../Perfil.php'); 
        endif;
        
    #Enviando consulta para o bd
?>