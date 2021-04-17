<?php
    $banco = "pagplay";
    $usuario = "root";
    $senha = "MySql2019!";
    $hostname = "mysqlsrv";
    $conn = mysqli_connect($hostname,$usuario,$senha); 
    mysqli_select_db($conn,$banco) or die( "Não foi possível conectar ao banco MySQL");
    if (!$conn) { 
        echo "Não foi possível conectar ao banco MySQL.<br>"; 
        exit;
    }else {
        echo "Parabéns!! A conexão ao banco de dados ocorreu normalmente!.<br>";
    }
    mysqli_close($conn);
?>