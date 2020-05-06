<?php
require('conn.php');

function inserirPessoa($nome,$sobrenome,$idd){
	global $conn;
	$sql = "INSERT INTO pessoa (Nome, apelido,ano_nascimento) VALUES ('$nome','$sobrenome','$idd')";
	
	if ($conn->query($sql) === TRUE) {
		header("location:index.php");
	} 
	else {
		echo "Erro: " . $sql . "<br>" . $conn->error;
	}}

	function selecionar(){
		Global $result;
		Global $conn;
		$sql1 = "SELECT * FROM pessoa";
		$result = $conn->query($sql1);
	}

	function delete($id){
		Global $result;
		Global $conn;
		$sql3 = "DELETE FROM pessoa WHERE id=$id";

		if ($conn->query($sql3) === TRUE) {
			header('Location: index.php');
		} else {
			echo "Error deleting record: " . $conn->error;
		}
	}
	$result1=0;
	$var="";
	$var1="";
	$var2="";
	function getvalues($idedit){
		Global $result1;
		Global $result2;
		Global $result3;
		Global $conn;
		Global $var,$var1,$var2;
		$sql4 = "SELECT Nome FROM pessoa WHERE id=$idedit";
		$result1 = $conn->query($sql4);
		while ($row = $result1->fetch_assoc()) {
			$var=$row['Nome'];}
			$sql5 = "SELECT apelido FROM pessoa WHERE id=$idedit";
			$result2 = $conn->query($sql5);
			while ($row = $result2->fetch_assoc()) {
				$var1=$row['apelido'];}
				$sql6 = "SELECT ano_nascimento FROM pessoa WHERE id=$idedit";
				$result3 = $conn->query($sql6);
				while ($row = $result3->fetch_assoc()) {
					$var2=($row['ano_nascimento']);}
				}

				function setvalues($idedit,$nome,$sobrenome,$idd){
					global $conn;
					$sql = "UPDATE pessoa Set Nome='$nome',apelido='$sobrenome',ano_nascimento='$idd' WHERE id=$idedit";

					if ($conn->query($sql) === TRUE) {
						header("location:index.php");
					} 
					else {
						echo "Erro: " . $sql . "<br>" . $conn->error;
					}}

					Global $resultpesq1;
					Global $conn;

					function nome($pesquisa){

						$sqlpesq1 = "SELECT * FROM pessoa WHERE nome = '$pesquisa'";
						$resultpesq1 = $conn->query($sqlpesq1);
						if($resultpesq1 === false)
						{
							echo ($conn->error);
						}
						


					}
					function sobrenome($pesquisa){
						Global $resultpesq2;
						Global $conn;
						$sqlpesq2 = "SELECT * FROM pessoa WHERE sobrenome = $pesquisa";
						$resultpesq2 = $conn->query($sqlpesq2);

					}
					function idade($pesquisa){
						Global $resultpesq3;
						Global $conn;
						$sqlpesq3= "SELECT * FROM pessoa WHERE nome = $pesquisa";
						$resultpesq3 = $conn->query($sqlpesq3);
					}

					?>