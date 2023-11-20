<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "lojainformatica";

    $conexao = mysqli_connect($servername,$username,$password,$database);

    mysqli_set_charset($conexao,"utf8");

?>