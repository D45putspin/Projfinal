


<?php 
if ($result->num_rows > 0) {
	echo "<table  class='table'><tr><th scope='col'>Nome</th><th scope='col'>Idade</th><th scope='col'>Ano Nascimento</th><th>opçoes</th></tr>";
	if(isset($_GET['procura_nome'])){
		if ($_GET['procura_nome'] !=""){
			$nome_pesquisa=$_GET['procura_nome'];

			while($row = $result->fetch_assoc()) {
				if($row["Nome"]==$nome_pesquisa){
					$idade= $data-$row["ano_nascimento"];
					echo "<tr><td>" . $row["Nome"]." ".$row["apelido"]." </td><td>" .$idade. "</td><td>" .$row['ano_nascimento']. "</td><td><a class='btn btn-outline-danger' href='?delete_id=".$row["id"]."'' role='button'>apagar</a>   <a class='btn btn-outline-danger' href='?edit_id=".$row["id"]."&procura_nome=$nome_pesquisa' role='button'>editar</a></td></tr>";}
					else{}
				}
			echo "<a href='index.php'class='text-danger' style='margin-left:20px;'>voltar a listar todos
			</a>";
		} else {
			
		}
	}
	if(isset($_GET['procura_sobrenome'])){
		if ($_GET['procura_sobrenome'] !=""){
			$nome_pesquisa=$_GET['procura_sobrenome'];

			while($row = $result->fetch_assoc()) {
				if($row["apelido"]==$nome_pesquisa){
					$idade= $data-$row["ano_nascimento"];
					echo "<tr><td>" . $row["Nome"]." ".$row["apelido"]." </td><td>" .$idade. "</td><td>" .$row['ano_nascimento']. "</td><td><a class='btn btn-outline-danger' href='?delete_id=".$row["id"]."'' role='button'>apagar</a>   <a class='btn btn-outline-danger' href='?edit_id=".$row["id"]."&procura_sobrenome=$nome_pesquisa' role='button'>editar</a></td></tr>";}
					else{}
				}
			echo "<a href='index.php'class='text-danger' style='margin-left:20px;'>voltar a listar todos
			</a>";
		} else {
			
		}
	}
	if(isset($_GET['procura_idade'])){
		if ($_GET['procura_idade'] !=""){

			$nome_pesquisa=$_GET['procura_idade'];
            $procuramaior = mb_substr($nome_pesquisa, 0, 1, "UTF-8");
           
			while($row = $result->fetch_assoc()) {
				$idade= $data-$row["ano_nascimento"];
				if($idade==$nome_pesquisa){
					
					echo "<tr><td>" . $row["Nome"]." ".$row["apelido"]." </td><td>" .$idade. "</td><td>" .$row['ano_nascimento']. "</td><td><a class='btn btn-outline-danger' href='?delete_id=".$row["id"]."'' role='button'>apagar</a>   <a class='btn btn-outline-danger' href='?edit_id=".$row["id"]."&procura_idade=$nome_pesquisa' role='button'>editar</a></td></tr>";}
					else{}
				}
		
			echo "<a href='index.php'class='text-danger' style='margin-left:20px;'>voltar a listar todos
			</a>";
		} else {
			
		}
	}




	while($row = $result->fetch_assoc()) {
		
		$idade= $data-$row["ano_nascimento"];
		echo "<tr><td>" . $row["Nome"]." ".$row["apelido"]." </td><td>" .$idade. "</td><td>" .$row['ano_nascimento']. "</td><td><a class='btn btn-outline-danger' href='?delete_id=".$row["id"]."'' role='button'>apagar</a>   <a class='btn btn-outline-danger' href='?edit_id=".$row["id"]."' role='button'>editar</a></td></tr>";
	}
} else {
	echo "Sem Resultados";
}
?>
