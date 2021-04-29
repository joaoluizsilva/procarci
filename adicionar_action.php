<?php
require_once 'conexaoPDO.php';

$nome = filter_input(INPUT_POST, 'nome');
$login = filter_input(INPUT_POST, 'login');
//$senha = filter_input_(INPUT_POST,'senha');
$senha = md5($_POST['senha']);

if ($nome && $login) {
    $sql = $pdo->prepare("INSERT INTO user (user_nome, user_login, user_senha) VALUES (:nome, :login, :senha)");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':login', $login);
    $sql->bindValue(':senha', $senha);
    $sql->execute();
    header("location:adicionar.php");
    exit;

}else {
    header("location:adicionar.php");
    echo "Falha";
    exit;
    
}
