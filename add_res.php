<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="forum.css" />
<title>Adicionar Resposta</title>
</head>
<body>
<?php
$host="localhost";
$username="root";
$password=""; 
$db_name="forum";
$tbl_name="forum_res";


mysql_connect("$host", "$username", "$password")or die("N&atilde;o conectou!");
mysql_select_db("$db_name")or die("N&atilde;o foi poss&iacute;vel selecionar base de dados!");

session_start();

      $login = $_SESSION["LOGIN"];
      $logado = $_SESSION["LOGADO"];

       if ($logado == 0)
          {
             header("location:forum.php");
          }


$id=$_POST['id'];


$sql="SELECT MAX(a_id) AS Maxa_id FROM $tbl_name WHERE question_id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);


if ($rows) {
$Max_id = $rows['Maxa_id']+1;
}
else {
$Max_id = 1;
}


$a_answer=$_POST['a_answer'];

$res    = mysql_query("select * from dados_usuario where usuario = '$login' ");



        $row = mysql_fetch_assoc($res);

$a_nome = $row["nome"];


$datetime=date("d/m/y H:i:s");


$sql2="INSERT INTO $tbl_name(question_id, a_id, a_name, a_answer, a_datetime)VALUES('$id', '$Max_id', '$a_nome', '$a_answer', '$datetime')";
$result2=mysql_query($sql2);

if($result2){
echo "Resposta enviada com sucesso!<BR>";
echo "<a href='view_topic.php?id=".$id."'>Veja sua resposta !</a>";


}
else {
echo "ERRO";
}

mysql_close();
?>
</body>
</html>
