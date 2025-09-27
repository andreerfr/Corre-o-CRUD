<?php
// Conexão com o banco (contém erro de variável e de conexão)
$host = "localhost";
$user = "root";
$password = "root"; //vazio, não precisava de nada, mas é bom ter
$db = "crud_exemplo";

$conn = mysqli_connect($hot, $user, $password, $db); // Erro: $hot ao invés de $host

if ($conn->connect_error) { //alterção na logica
    die("Falha de conexão: " .$sconn->connect_error); //adição para mensagem de erro
}



?>