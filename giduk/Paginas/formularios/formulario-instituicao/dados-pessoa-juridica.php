<?php
    #Inclusão do caminho do arquivo de conexão com o banco de dados
    include_once("../conexao-banco-de-dados.php");

    if(isset($_POST['enviar-formulario-pj'])):
        $erros = array();

    #Váriaveis que armazenaram os dados das caixas de texto
        $inscricaoEstadual = filter_input(INPUT_POST, 'inscricao-estadual-instituicao', FILTER_SANITIZE_NUMBER_INT);
        $cnpj = filter_input(INPUT_POST, 'cnpj-instituicao', FILTER_SANITIZE_SPECIAL_CHARS);
        $razaoSocial = filter_input(INPUT_POST, 'razao-social-instituicao', FILTER_SANITIZE_SPECIAL_CHARS);
        $nome = filter_input(INPUT_POST, 'nome-instituicao', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email-instituicao', FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha-instituicao', FILTER_SANITIZE_SPECIAL_CHARS);
        $fotoPerfil = $_FILES['foto-perfil-instituicao'];
        $cep = filter_input(INPUT_POST, 'cep-instituicao', FILTER_SANITIZE_SPECIAL_CHARS);
        $rua = filter_input(INPUT_POST, 'rua-instituicao', FILTER_SANITIZE_SPECIAL_CHARS);
        $bairro = filter_input(INPUT_POST, 'bairro-instituicao', FILTER_SANITIZE_SPECIAL_CHARS);
        $cidade = filter_input(INPUT_POST, 'cidade-instituicao');
        $estado = filter_input(INPUT_POST, 'estado-instituicao');
        $telefone = filter_input(INPUT_POST, 'telefone-instituicao', FILTER_SANITIZE_NUMBER_INT);
        $celular = filter_input(INPUT_POST, 'celular-instituicao', FILTER_SANITIZE_NUMBER_INT);
        $url = filter_input(INPUT_POST, 'url-instituicao');
    
    // Validando foto da instituição
        $formatosPermitidos = array('jpeg', 'png', 'jpg');
    // Fazendo uma function que possa armazenar a extensão do arquivo mandado
        $extensao = pathinfo($_FILES['foto-perfil-instituicao']['name'], PATHINFO_EXTENSION);
    
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

endif;

if(!empty($erros)):
    foreach ($erros as $erro):
        echo "<li> $erro </li>";
    endforeach;
    
    header('Location: ./formulario-instituicao.html'); 
else:
    #Consulta que enviará os dados pro bd
        $result_usuario = "INSERT INTO pessoafisica(Nome, DataNasc, CPF, RG, Email, Senha, FotoPerfil, Telefone, Celular, CEP, Rua, Bairro, Cidade, Estado, Url) values ('$nome', '$dataNasc', '$cpf', '$rg', '$email', '$senha', '$fotoPerfil', '$telefone', '$celular', '$cep', '$rua', '$bairro','$cidade', '$estado', '$url')";

        $resultado_usuario = mysqli_query($conexaoComBancoDeDados, $result_usuario);

        header('Location: ../../Perfil.php'); 
endif;
?>