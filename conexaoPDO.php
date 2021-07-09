<?php
    $db_name = ''; //Nome do seu Banco de Dados
    $db_host = 'localhost'; // Local onde o Banco de Dados
    $db_user = 'root'; // Usuário do Banco
    $db_pass = '';  //Senha do Banco

    $pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host,$db_user,$db_pass);

  
    


