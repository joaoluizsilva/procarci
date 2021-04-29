<?php
    $db_name = 'procar_ci'; //Nome do seu Banco de Dados
    $db_host = 'localhost'; // Local onde o Banco de Dados
    $db_user = 'root'; // Usuário do Banco
    $db_pass = '';  //Senha do Banco

    $pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host,$db_user,$db_pass);

    // if ($pdo = true) {
    //     echo 'BANCO CONECTADO'. $db_name;
    //     return;
    // }else{
    //     echo 'Sem conexão';
    //     return;
    // }

    // $sql = $pdo->query("SELECT * FROM user");
    // $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    // echo '<pre>';
    // print_r($dados);    
    


