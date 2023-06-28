<?
require_once "./formularios/conexao-banco-de-dados.php";
require_once "./formularios/formulario-animal/dados-animal.php";

// Recuperar o blob da imagem
$query = "SELECT Foto FROM animal WHERE id = $id"; // ajuste o ID conforme necessário
$result = mysqli_query($conexaoComBancoDeDados, $query);
$row = mysqli_fetch_assoc($result);
$blobData = $row['Foto'];

// Exibir a imagem na página
header("Content-Type: image/jpeg"); // ajuste o tipo de conteúdo conforme o seu caso
echo $blobData;
?>