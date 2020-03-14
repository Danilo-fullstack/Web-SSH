<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['cnome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['cemail']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['csenha'])));

if(empty($nome) || empty($email) || empty($senha)) {
    header('Location: cadastro.php');
    exit();
}

$sql = "select count(*) as total from clientes where email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['usuario_existe'] = true;
    header('Location: cadastro.php');
    exit();
}

$sql = "INSERT INTO clientes (nome, email, senha, data_cadastro) VALUES ('$nome', '$email', '$senha', NOW())";

if($conexao->query($sql) === TRUE) {
   $_SESSION['status_cadastro'] = true;
}

$conexao->close();
header('Location: cadastro.php');
exit;
?>