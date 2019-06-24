<?php 
	$unidade = $_POST["sigla"];
	$descricao = $_POST["descricao"];

	$con = mysqli_connect("localhost", "root", "", "ob1", "3308");
		if ($con===false){ die("Falha na conexão com o servidor!");}

	$res=mysqli_query($con, "insert into unidmedida values (0, '$unidade', '$descricao')");
	echo mysqli_affected_rows($con)." registros cadastrados com sucesso!";
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<br />
		<br />
		<a href="http://localhost/UnidMedida.php"><button> Voltar </button></a>
	</body>
</html>