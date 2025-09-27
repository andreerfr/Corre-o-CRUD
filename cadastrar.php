<?php
// Cadastro com erros de sintaxe e falta de validação
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    $sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "Usuário cadastrado com sucesso!";

    }
    else {
        echo "Erro ao cadastrar!";
    }
} //Ajuste das chaves {} que não estavam fechando corretamente 

?>

<form method="POST">
    Nome: <input type="text" name="nome">
    <br>
    Email: <input type="email" name="email">
    <br>
    <input type="submit" value="cadastrar"> <!-- Mudança de "Cadastrar" para "cadastrar" -->
<!-- Não faz mais nada além do erro, deixa o usuario preso na pagina de erro -->
</form>
