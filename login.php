<?php
session_start();
include('conexao.php');

if(empty($_POST['cemail']) || empty($_POST['csenha'])) {
    header('Location: login_index.php');
    exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['cemail']);
$senha = mysqli_real_escape_string($conexao, $_POST['csenha']);

$query = "select nome from clientes where email = '$email' and senha = md5('$senha')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    $usuario_bd = mysqli_fetch_assoc($result);
    $_SESSION['nome'] = $usuario_bd['nome'];
    header('Location: painel.php');
    exit();
}

$_SESSION['nao_autenticado'] = true;
header('Location: login_index.php');
exit();