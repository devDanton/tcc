<?php
$conexao = new PDO("mysql:host=localhost;dbname=tcc", "root", "");

if (mysqli_connect_errno()) {
  echo "Erro de conexão: " . PDOStatement::errorInfo();
  exit(0);
} else {
  echo "Conexão realizada com sucesso";
}
