<?php 
require ('model.php');
//recebe os dados
if(isset($_POST['form_posted'])) {
	if(isset($_REQUEST['nome'],$_REQUEST['apelido'],$_REQUEST['ano_nascimento'], )) {
		$nome=mysqli_real_escape_string($conn,$_REQUEST['nome']);
		$apelido=mysqli_real_escape_string($conn,$_REQUEST['apelido']);
		$idd=mysqli_real_escape_string($conn,$_REQUEST['ano_nascimento']);
 //compara se no link tiver "alterar_id" executa a função alterar,senão insere;
		if(isset($_GET['edit_id'])){
			$idedit=$_GET['edit_id'];
			
			setvalues($idedit,$nome,$apelido,$idd);
		}
		else{
			inserirpessoa($nome,$apelido,$idd);
		}
	}/*fim if(isset2))*/
}

if(isset($_POST['form_pesquisa'])) {
	if($_REQUEST['termo_pesquisa']!="") {
		$pesquisa=mysqli_real_escape_string($conn,$_REQUEST['termo_pesquisa']);
		if(isset($_GET['procura_nome'])){
			header("location:?procura_nome=".$pesquisa);
		}
		if(isset($_GET['procura_sobrenome'])){
			header("location:?procura_sobrenome=".$pesquisa);
		}
		if(isset($_GET['procura_idade'])){
			header("location:?procura_idade=".$pesquisa);
		}
		

	}
	
}
if(isset($_GET['delete_id'])){
	$id=$_GET['delete_id'];
	delete($id);

}
if(isset($_GET['edit_id'])){
	$idedit=$_GET['edit_id'];
	getvalues($idedit);
}
global $variablechange;
$variablechange="escolha o que quer pesquisar";
if(isset($_GET['procura_nome'])){
	
	$variablechange="nome";
}
if(isset($_GET['procura_sobrenome'])){
	
	$variablechange="sobrenome";
}
if(isset($_GET['procura_idade'])){
	
	$variablechange="idade";
}

selecionar();
?>