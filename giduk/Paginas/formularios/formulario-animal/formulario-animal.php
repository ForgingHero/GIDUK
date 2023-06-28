<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="/Img/logos//favicon.png" type="image/png">
        <title>Formulário</title>
    </head>
    <body> 
        <div class="Div_Imagem">
            <div class="photo"><img src="/Img/logos/LogoForm.png" class="logo-form"></div>  
            <div class="container" >
                  
                <form action="dados-animal.php" method="post" class="formulario" enctype="multipart/form-data">
                    
                    <h2 style="margin-bottom:40px">Cadastro do animal</h2>

                    <div class="center">
                        
                        
                        <label for="Macho">Macho</label>
                        <input type="radio" class="sexo-animal" name="sexo-animal" value="m">
                        
                        <label for="Femea">Fêmea</label>
                        <input type="radio" class="sexo-animal" name="sexo-animal" value="f">
                    </div>
                    
                    <br/>
                    
                    <input type="text" name="nome-animal" required maxlength="50" minlength="2" class="input_formulario" placeholder="Nome"><br>

                    <input type="text" id="especie-animal" name="especie-animal" required maxlength="50" minlength="2" placeholder="Espécie" class="input_formulario"><br>
                    
                    <div class="center">
                        <label for="Pequeno">Pequeno</label>
                        <input type="radio" class="porte-animal" name="porte-animal" value="p">

                        <label for="Medio">Médio</label>
                        <input type="radio" class="porte-animal" name="porte-animal" value="m">

                        <label for="Grande">Grande</label>
                        <input type="radio" class="porte-animal" name="porte-animal" value="g">
                    </div>

                    <input type="text" name="descricao-animal" required placeholder="Descrição" class="input_formulario"><br>

                    <input type="file" name="foto-animal" accept="image/png, image/jpeg, image/jpg" required class="input_formulario"><br>
            
                    <div class="action">
                        <button type="submit" class="action-button" name="enviar-formulario-animal">Finalizar</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

<?php /*
    #Inclusão do caminho do arquivo de conexão com o banco de dados
        require_once "../conexao-banco-de-dados.php";

    if(isset($_POST['enviar-formulario-animal'])):
        $erros = array();
        
        #Váriaveis que armazenarão os dados das caixas de texto
        $nome = filter_input(INPUT_POST, 'nome-animal', FILTER_SANITIZE_SPECIAL_CHARS);
        $especie = filter_input(INPUT_POST, 'especie-animal', FILTER_SANITIZE_SPECIAL_CHARS);
        $sexo = filter_input(INPUT_POST, 'sexo-animal');
        $porte = filter_input(INPUT_POST, 'porte-animal');
        $foto = filter_input(INPUT_POST, 'foto-animal');
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

        session_start();
        $result_usuario = "INSERT INTO animal(Nome, Especie, Sexo, Porte, Foto, Descricao, Cidade, Estado, DisponivelParaAdocao) values ('$nome', '$especie', '$sexo', '$porte', '$foto', '$descricao', '$_SESSION[cidade]', '$_SESSION[estado]', 1)";
        $resultado_usuario = mysqli_query($conexaoComBancoDeDados, $result_usuario);

        $result_usuario = "SELECT * FROM animal WHERE Nome = '$nome' and Especie = '$especie' and Sexo = '$sexo' and  Porte = '$porte' and Descricao = '$descricao'";
        $resultado_usuario = mysqli_query($conexaoComBancoDeDados, $result_usuario);
        $dadosAnimal = mysqli_fetch_assoc($resultado_usuario);

        

        $_SESSION['adotado'] = false;
        $_SESSION['id_animal'] = $dadosAnimal['Id'];
        $_SESSION['nome_animal'] = $dadosAnimal['Nome'];
        $_SESSION['nome_animal'] = $dadosAnimal['Nome'];
        $_SESSION['nome_animal'] = $dadosAnimal['Nome'];
        $_SESSION['nome_animal'] = $dadosAnimal['Nome'];
        $_SESSION['nome_animal'] = $dadosAnimal['Nome'];
        $_SESSION['formulario_feito'] = $_POST['enviar-formulario-animal'];
        echo "</br>";
        
        header('Location: ../../../../Perfil.php'); 
    endif;   */
?>