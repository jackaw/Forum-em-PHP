<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="forum.css" />
<title>Adicionar T&oacute;pico</title>
</head>
<body>
<?php
$host="localhost";
$username="root"; 
$password=""; 
$db_name="forum";
$tbl_name="forum_q"; 


mysql_connect("$host", "$username", "$password")or die("N&atilde;o conectou");
mysql_select_db("$db_name")or die("N&atilde;o foi poss&iacute;vel selecionar banco de dados!");

session_start();

      $login = $_SESSION["LOGIN"];
      $logado = $_SESSION["LOGADO"];

       if ($logado == 0)
          {
             header("location:forum.php");
          }

$topic=$_POST['topic'];
$detail=$_POST['detail'];



$datetime=date("d/m/y h:i:s");

$res    = mysql_query("select * from dados_usuario where usuario = '$login' ");



        $row = mysql_fetch_assoc($res);
        
$nome = $row["nome"];



$sql="INSERT INTO $tbl_name(topic, detail, name, datetime)VALUES('$topic', '$detail', '$nome', '$datetime')";
$result=mysql_query($sql);

if($result){
echo "Tópico inserido com sucesso!<BR>";
echo "<a href=usuario.php>Veja seu tópico !</a>";
}
else {
echo "ERRO";
}
mysql_close();
?>
</body>
</html>

