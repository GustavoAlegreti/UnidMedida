<?php

/**
 * @author Eletro Mococa
 * @copyright 2019
 */

$con = mysqli_connect("localhost", "root", "", "ob1", 3308);
if ($con===false){ die("Falha na conexão com o servidor!");}

$res=mysqli_query($con, "select * from unidmedida");
if ($res===false){ die("Falha na conexão". mysqli_error($con)); }

?>

<html>
 <head>
  <title> Editar Unidades </title>
  <style type="text/css">
    table{
        border: 1px solid black;
    }
  
  
  </style>
 </head>
   <body> 
    
    <form action="UnidMedidaEditado.php" method="post">
    <table>
    <tr>
        <td> ID: <input type="text" name="id" readonly value=" <?php echo $id; ?>"/> </td> <br />
    </tr>
    <tr>    
        <td> Sigla: <input name="segmento" type="text" value="<?php echo $linha[1]; ?>"/> </td> <br />
    </tr>
    
    <tr>    
        <td> Descricao: <input name="segmento" type="text" value="<?php echo $linha[1]; ?>"/> </td> <br />
    </tr>
    <tr>
       <td> <input type="submit" value="Enviar" /> </td> <td> <input type="reset" value="Limpar" /> </td>
    </tr>
    
    </table>
    </form>
    
   </body>
</html>