<?php

/**
 * @author Eletro Mococa
 * @copyright 2019
 */
    $con = mysqli_connect("localhost", "root", "", "ob1", 3308); // mudan�a na porta, pela mudan�a de senha na antiga
    
    if ($con===false) { die("Falha na conex�o con o servidor MySQL.");} //verifica a conex�o com o bd (se houve falha)
    
    $soma = 0;  
    for ($i=0; $i < count($_POST['selecao']); $i++ ){
        $id = $_POST['selecao'][$i];
        $res = mysqli_query($con, "DELETE FROM segmento WHERE idunidmedida = $id"); //mostra o resultado da conexao
        $soma = $soma + mysqli_affected_rows($con);
    }    
?>
<html>
 <head>
  <title> Exclus�o de Unidades </title>
 </head>
   <body> 
    <p> <?php echo $soma;?> registro(s) foram apagado(s) com sucesso!!</p>
    <a href="UnidMedida.php"> Voltar </a>
   </body>
</html>