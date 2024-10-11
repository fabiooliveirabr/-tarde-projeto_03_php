<?php
include "conexao.php";
$n = $_POST['nome_digitado'];
$e = $_POST['email_digitado'];

// 1º Passo - Comando SQL
$sql = "INSERT INTO tb_inscricoes
        (nome, email) VALUES
        ('$n','$e')";

// 2º Passo - Preparar a conexão
$cadastrar = $pdo->prepare($sql);

// 3º Passo - Tentar executar
try{
    $cadastrar->execute();
    header("Location: inscricao_confirmada.php");
}catch(PDOException $erro){
    echo "Falha ao cadastrar!".$erro->getMessage();
}
?>