<?php
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "aula";
$data=date("Y");
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
			die("falha de conexão: " . $conn->connect_error);
		}
?>