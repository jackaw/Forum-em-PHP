<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="forum.css" />
<script type="text/javascript" src="java.js" charset="ISO-8859"></script>
<title>Criar T&oacute;picos</title>
</head>
<body>
<?php
    $c = mysql_connect("localhost","root","");
    $d = mysql_select_db("forum",$c);
    session_start();

    $login = $_SESSION["LOGIN"];
    $logado = $_SESSION["LOGADO"];

    if ($logado == 0)
          {
           header("Location: forum.php"); //redireciona para pagina inicial
           }
           ?>
           
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" class="borda2">
<tr>

<form id="form1" name="form1" method="post" action="add_topic.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" class="borda1">
<tr>

<td colspan="3" class="borda"><strong>Criar Novo T&oacute;pico</strong> </td>
</tr>

<tr>
<td width="14%"><strong>T&oacute;pico</strong></td>
<td width="2%">:</td>
<td width="84%"><input name="topic" type="text" id="topic" size="50" /></td>
</tr>

<tr>
<td valign="top"><strong>Detalhes</strong></td>
<td valign="top">:</td>
<td><textarea name="detail" cols="50" rows="3" id="detail"></textarea></td>
</tr>


<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="button" name="Submit" value="Enviar" id="bt" onclick="ValidaForm6()" /> <input type="reset" name="Submit2" value="Limpar" /> <!-- -->
<input type="button" name="Submit3" value="Home" onclick="window.location.href='http://localhost/forum/usuario.php'" /></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</body>
</html>

