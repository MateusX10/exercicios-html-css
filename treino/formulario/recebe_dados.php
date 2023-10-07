<?php

$nome = $_POST["nome"];

$email = $_POST["email"];

$senha = $_POST["senha"];

$ano_atual = date("Y");

$ano_nascimento = date("Y", strtotime($_POST["nascimento"]));

$idade = $ano_atual - $ano_nascimento;


echo "<br>Seu nome é ", $nome;

echo "<br> A sua idade é ", $idade;


echo "<br>Seu email é ", $email;

echo "<br>Sua senha é ", $senha;

