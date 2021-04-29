<?php
       $pdo = new PDO("mysql:dbname=procar_ci;host=localhost","root","");

       $sql = $pdo->query('SELECT * FROM user');

       echo '<pre>';
       echo "Total: ".$sql->rowCount(); 
   
       $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
      
       echo '<pre>';
       print_r($dados);