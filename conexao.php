<?php
    define('HOST', '127.0.0.1');
    define('USER', 'root');
    define('SENHA', '');
    define('DB', 'webssh');

    $conexao = mysqli_connect(HOST, USER, SENHA, DB) or die ('Não foi possível conectar');
?>