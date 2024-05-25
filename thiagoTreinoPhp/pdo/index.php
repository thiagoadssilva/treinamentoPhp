<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "treinamento_php";
$table = "sec_users";
$login = "05603362000190";
$psw = "21232f297a57a5a743894a0e4a801fc3";
$name = "thiago prepare";
$email = "thiagojosedasilva@gmail.com";
$active = "Y";
$activation_code = "";
$priv_admin = "";
$type = "R";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

// INSERINDO DADOS
$sql = "INSERT INTO $table (`login`,`pswd`,`name`,`email`,`active`) VALUES (:login,:pswd,:name,:email,:active)";
$stmt = $conn->prepare($sql);

$stmt->bindParam(":login", $login);
$stmt->bindParam(":pswd", $psw);
$stmt->bindParam(":name", $name);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":active", $active);

// $stmt->execute();

// ATUALIZANDO DADOS
$sqlUpdate = "UPDATE $table SET email = :email, active = :active WHERE login = :login";
$stmtUpdate = $conn->prepare($sqlUpdate);

$stmtUpdate->bindParam(":login", $login);
$stmtUpdate->bindParam(":email", $email);
$stmtUpdate->bindParam(":active", $active);

// $stmtUpdate->execute();

// SELECIONANDO DADOS
// $sqlSelect = "SELECT * FROM $table where login = :login";
$sqlSelect = "SELECT * FROM $table";
$stmtSelect = $conn->prepare($sqlSelect);

// $stmtSelect->bindParam(":login", $login);
$stmtSelect->execute();

$dado = $stmtSelect->fetch(PDO::FETCH_ASSOC);
$dados = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
// print_r($dado);
echo "<br>";
echo "<pre>";
print_r($dados);