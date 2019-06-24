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
        <title> Tabela UnidMedida </title>
        <style type="text/css"> 
        table{
            border: 1px solid #000;
        } 
        td{
            border: 1px solid #000;
        }
        th{
            background-color: #1CACF2;
            border: 1px solid #000;
        }
        td.mostrar{
            width: 100px;
            text-align: center;
            border: 1px solid #000;
        }
        </style>
    </head>
    <body>
    <form action="apagaunidmedida.php" method="post">   
     <table id="unidmedida">
        <tr> 
            <th> <input type="submit" value="Apagar" title="Apagar" /> </th> <th>ID</th> <th>Sigla Medida</th> <th> Descricao Medida </th> <th> &nbsp; </th>
        </tr>
             <?php while( $linha = mysqli_fetch_array($res, MYSQLI_BOTH) ){ //pego a tabela do bd para mostrar no php?>
        <tr>
        <td> <input type="checkbox" value="<?php echo $linha[0];?>" name="selecao[]" /> </td> <td> <?php echo $linha[0];?></td> <td> <?php echo $linha[1]; //pego a linha 1 da coluna 2 ?></td> <td> <?php echo $linha[2]; //pego a linha 2 da coluna 2 ?></td> <td><a href="FormEditarUnid.php?id=<?php echo $linha[0];?>"> Editar </a></td>
        </tr>
             <?php } //finaliza o while ?>
    </table> </a> <br />
   </form>  
     <table>
      <?php 
        $cont = 0;
        while ($linha = mysqli_fetch_array($res, MYSQLI_BOTH)){
          if ($cont % 2 == 0) {
            $cor = "cor";
          }
      ?>
      <tr class="rows">
        <td class="mostrar <?php echo $cor ?>" > <?php echo $linha[0];?> </td> 
        <td class="mostrar <?php echo $cor ?>" > <?php echo $linha[1];?> </td>
        <td class="mostrar <?php echo $cor ?>" > <?php echo $linha[2];?> </td>
      </tr>
      <?php
        $cont = $cont + 1;
        $cor = ""; 
        } 
      ?>
    </table>
    <br />
    <form action="Cadunidmedida" method="post">
      <table>
        <tr>
          <td class="form">Sigla: <input type="text" name="sigla"></td>
        </tr>
        <tr>
          <td class="form">Descricao: <input type="text" name="descricao"></td>
        </tr>
        <tr>
          <td class="center">
            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
          </td>
        </tr>
      </table>
    </form>
    </body>
    
    
</html>




<!-- apagar: apagaunidmedida.php / editar: FormEditarUnid.php / editado: unidedit.php --!>