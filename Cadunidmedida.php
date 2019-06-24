<html>
    <head>
        <title> Segmento Cadastrado </title>
    </head>
<body>
<?php

/**
 * @author Eletro Mococa
 * @copyright 2019
 */

    $segmento = $_POST['descricao'];
    
    $con = mysqli_connect("localhost", "root", "", "ob1",3308);

    if ($con===false) { die("Falha na conexão con o servidor MySQL.");}

    $res = mysqli_query($con, "insert into segmento values (0, '$unidmedida')");

    echo mysqli_affected_rows($con)." registro(s) cadastrado(s) com sucesso!";
?>
</body>
    <a href="http://localhost/UnidMedida.php" style="font-family: verdana; color: #80FF00; text-decoration: none;"> Voltar</a>
</html>