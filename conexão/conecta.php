<?php
    //Dados do SGBD My  sql para a conexão

    $servidor="localhost";
    $usuario="root";
    $senha="";
    $banco="teste_mysqli";

    //CRIANDO CONEXÃO
    $conexao= new mysqli($servidor,$usuario,$senha,$banco);

    //CHECANDO A CONEXÃO
    if($conexao->connect_error){
        die( "Conexão falhou: " . $conn-> connect_error);
    }
    
    echo "Conectado com Sucessso";
?>