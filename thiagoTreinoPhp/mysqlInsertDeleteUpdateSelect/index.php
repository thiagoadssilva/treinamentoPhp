<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db = "treinamento_php";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    echo "Erro na conexão ->" . $conn->connect_error;
}

// SELECIONANDO DADOS
$sql = "SELECT * FROM sec_users";
$result = $conn->query($sql);
// $resultItem = $result->fetch_assoc(); // Trazendo apenas um primeiro resultado
$resultItems = $result->fetch_all(MYSQLI_ASSOC); // Trazendo todos os dados, poré com esse parametros, trazemos tb os nomes das colunas
echo "<pre>";
// print_r($resultItems);

$id = '05603362000190';
$sql = "SELECT * FROM sec_users where login = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();
$dado = $result->fetch_assoc();

echo "<pre>";
print_r($dado);


// INSERINDO DADOS
$table = "sec_users";
$login = "05603362000190";
$psw = "21232f297a57a5a743894a0e4a801fc3";
$name = "thiago prepare";
$email = "abc@gmail.com";
$active = "I";
$activation_code = "";
$priv_admin = "";
$type = "R";

// $sqlInsert = "INSERT INTO $table (`login`,`pswd`,`name`,`email`,`active`,`activation_code`,`priv_admin`,`type`) VALUES ('$login', '$psw', '$name', '$email', '$active', '$activation_code', '$priv_admin', '$type')";
// $conn->query($sqlInsert);
$sqlInsert = "INSERT INTO $table (`login`,`pswd`,`name`,`email`,`active`) VALUES (?,?,?,?,?)";
$stmt = $conn->prepare($sqlInsert);
$stmt->bind_param("sssss", $login, $psw, $name, $email, $active);
// $stmt->execute();

// ATUALIZANDO OS DADOS
$sqlUpdate = "UPDATE $table SET email = ?, active = ? WHERE login = ?";
$stmt = $conn->prepare($sqlUpdate);
$stmt->bind_param("sss", $email, $active, $login);
// $stmt->execute();

if ($stmt->error) {
    echo "ERRO:" . $stmt->error;
}else{
    echo "Registro atualizado com sucesso!!";
}


// DELETANDO OS DADOS
$sqlDelete = "DELETE FROM $table WHERE login = ?";
$stmt = $conn->prepare($sqlDelete);
$stmt->bind_param("s", $login);
$stmt->execute();

$conn->close();
