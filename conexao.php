<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "tcc";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

//$conexao = new PDO("mysql:host=localhost;dbname=tcc", "root", "");

if (mysqli_connect_errno()) {
  echo "Erro de conexão: " . PDOStatement::errorInfo();
  exit(0);
} else {
  $erro_atual =  "Conexão realizada com sucesso";
}
