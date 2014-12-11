<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09/12/14
 * Time: 16:34
 */

/*
<!--
<form action="registo.php" method="post">
	<h2>Sistema de leilões de Recursos Marítimos</h2>
	<p>Introduza o seu nif: <input type="text" name="username" /></p>
	<p>Introduza o seu pin: <input type="text" name="pin" /></p>
	<p><input type="submit" /></p>
</form>
-->
*/
// inicia sessão para passar variaveis entre ficheiros php

// Função para limpar os dados de entrada

include(__DIR__ . '/includes/config.inc.php');

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Carregamento das variáveis username e pin do form HTML através do metodo POST;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $pin = test_input($_POST["pin"]);
}

//echo("<p>Valida Pin da Pessoa $username</p>\n");

// Variáveis de conexão à BD
$host="db.ist.utl.pt";
$user="ist163063";
$password="dubc7579";
$dbname = $user;

//echo("<p>Projeto Base de Dados Parte II</p>\n");
$connection = new PDO("mysql:host=" . HOST. ";dbname=" . DATABASE, USER, PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

//echo("<p>Connected to MySQL database $dbname on $host as user $user</p>\n");

// obtem o pin da tabela pessoa
$sql = "SELECT * FROM pessoa WHERE nif=" . $username;
$result = $connection->query($sql);

if (!$result) {
    //echo("<p> Erro na Query:($sql)<p>"); exit();
}

foreach($result as $row){
    $safepin = $row["pin"];
    $nif =     $row["nif"];
}

if ($safepin != $pin ) {
    //echo "<p>Pin Invalido! Exit!</p>\n"; $connection = null;
//exit;
}

header('Content-Type: aplication/json');
echo json_encode(['test' => true]);

//echo "<p>Pin Valido! </p>\n";