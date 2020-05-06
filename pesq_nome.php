<?php 
	if ($resultpesq1->num_rows > 0) {
		echo "<table  class='table'><tr><th scope='col'>Nome</th><th scope='col'>Idade</th><th>opçoes</th></tr>";
		while($row = $resultpesq1->fetch_assoc()) {
			$idade= $data-$row["ano_nascimento"];
			echo "<tr><td>" . $row["Nome"]." ".$row["apelido"]." </td><td>" .$idade. "</td><td><k>  delete<a style='color:darkred;' href='?delete_id=".$row["id"]."'> X </a>editar<a style='color:darkred;' href='?edit_id=".$row["id"]."'> O </a></k></td></tr>";
		}
	} else {
		echo "Sem Resultados";
	}
	?>