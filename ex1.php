<?php

// conexão com o servidor MySQL
$con = mysqli_connect("localhost", "root", "", "ob1", 3308);
if ($con===false){ die("Falha na conexão com o servidor!");}

$res=mysqli_query($con, "select * from unidmedida");
if ($res===false){ die("Falha na conexão". mysqli_error($con)); }

?>

<html>
  <head>
    <title>Segmentos</title> 
    <style type="text/css">
      #idunidmedida{
        border:1px solid #000;
		 	}
	   th {
		    background-color:red;
		  }
      td.mostrar{
        width: 100px;
        text-align: center;
        border: 1px solid #000;
      }
		  .rows{
        border:1px solid #000;
			}
      .cor{
        background-color: lightblue;
      }
      .form{
        text-align: right;
        border:0px solid #000;
      }
      .center{
        text-align: center;
        border:0px solid #000;
      }
      form{
        border:0px solid #000;
      }
      table{
        border:0px solid #000;
      }
    </style>
  </head>
  <body>
    <table id="unidmedida">
      <tr class="rows">
        <th class="rows">ID</th>
        <th class="rows">Sigla Medida</th>
        <th class="rows">Descrição Medida</th>
      </tr>
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
    <form action="recebe.php" method="post">
      <table>
        <tr>
          <td class="form">Sigla: <input type="text" name="sigla"></td>
        </tr>
        <tr>
          <td class="form">Descrição: <input type="text" name="descricao"></td>
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
