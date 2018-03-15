<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="forum.css" />
<script type="text/javascript" src="java.js" charset="ISO-8859"></script>
<title>T&oacute;picos</title>
</head>
<body>
<?php
$host="localhost";  
$username="root"; 
$password=""; 
$db_name="forum";
$tbl_name="forum_q"; 


mysql_connect("$host", "$username", "$password")or die("Erro na conex&atilde;o!");
mysql_select_db("$db_name")or die("N&atilde;o foi poss&iacute;vel selecionar base de dados!");


$id=$_GET['id'];

$sql="SELECT * FROM $tbl_name WHERE id='$id'";
$result=mysql_query($sql);

$rows=mysql_fetch_array($result);
?>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" class="borda2">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" class="borda4">
<tr>
<td class="borda3"><strong><?php echo $rows['topic']; ?></strong></td>
</tr>

<tr>
<td class="borda3"><?php echo $rows['detail']; ?></td>
</tr>

<tr>
<td class="borda3"><strong>Por :</strong> <?php echo $rows['name']; ?></td> 
</tr>

<tr>
<td class="borda3"><strong>Data/Hora : </strong><?php echo $rows['datetime']; ?></td>
</tr>
</table></td>
</tr>
</table>
<br />
<?php
$tbl_name2="forum_res"; 

$sql2="SELECT * FROM $tbl_name2 WHERE question_id='$id'";
$result2=mysql_query($sql2);

while($rows=mysql_fetch_array($result2)){
?>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" class="borda2">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" class="borda1">
<tr>
<td class="borda3"><strong>ID</strong></td>
<td class="borda3">:</td>
<td class="borda3"><?php echo $rows['a_id']; ?></td>
</tr>

<tr>

<td width="18%" class="borda3"><strong>Nome</strong></td>
<td width="5%" class="borda3">:</td>
<td width="77%" class="borda3"><?php echo $rows['a_name']; ?></td>
</tr>

<tr>
<td class="borda3"><strong>Resposta</strong></td>
<td class="borda3">:</td>
<td class="borda3"><?php echo $rows['a_answer']; ?></td>
</tr>
<tr>
<td class="borda3"><strong>Data/Hora</strong></td>
<td class="borda3">:</td>
<td class="borda3"><?php echo $rows['a_datetime']; ?></td>
</tr>
</table></td>
</tr>
</table><br />

<?php
} ?>

<br />
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" class="borda2">
<tr>
<form name="form1" method="post" id="res" action="add_res.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" class="borda1">

<tr>
<td valign="top"><strong>Resposta</strong></td>
<td valign="top">:</td>
<td><textarea name="a_answer" cols="45" rows="3" id="a_answer" ></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input name="id" type="hidden" value="<?php echo $id; ?>"/></td>
<td><input type="button" name="Submit" onclick="validaForm5 ()" value="Enviar"/> <input type="reset" name="Submit2" value="Limpar"/>
<input type="button" name="Submit3" value="Home" onclick="window.location.href='http://localhost/forum/usuario.php'"/>
</td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</body>
</html>
