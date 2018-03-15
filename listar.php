<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="forum.css" />
 <title>Listar Usu&aacute;rios</title>
</head>
<body>
<?php
      $c = mysql_connect("localhost","root","");
      $d = mysql_select_db("forum",$c);

          

        $res    = mysql_query("select * from dados_usuario order by usuario");

       while( $row = mysql_fetch_assoc($res)){



            echo "Usu&aacute;rio:",$row["usuario"]."<br>";
            echo "Nome:", $row["nome"]."<br>";
            echo "Endere&ccedil;o:", $row["endereco"]."<br>";
			echo "Cidade:", $row["cidade"]."<br>";
			echo "Estado:", $row["estado"]."<br>";
			echo "CEP:", $row["cep"]."<br>";
			echo "Email:", $row["email"]."<br>";
			echo "Fone:", $row["fone"]."<br>";
			echo "CPF:", $row["cpf"]."<br>";
            echo "Senha:", $row["senha"]."<br><br>";

            }
            



            ?>

        <br /><a href="adm.php">Voltar</a>


</body>
</html>
