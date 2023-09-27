<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $first_name = $_POST["fname"];
    $last_name = $_POST["lname"];

    // Processa os dados ou realiza ações necessárias
    // Por exemplo, você poderia salvar os dados em um banco de dados

    // Exemplo simples: exibindo os dados
    echo "First Name: " . $first_name . "<br>";
    echo "Last Name: " . $last_name;
}
?>