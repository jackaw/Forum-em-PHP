<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="forum.css" />
<script type="text/javascript" src="java.js" charset="ISO-8859"></script> 
    <title>Administrador</title>
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
             header("location:forum.php");
          }



        echo "Usu&aacute;rios cadastrados<br><br>";
       $s = mysql_query("select usuario,nome from dados_usuario order by usuario;");

    while ($l = mysql_fetch_assoc($s))
          {
          echo "Usu&aacute;rio: ",$l["usuario"] . "  -  " . "Nome: ",$l["nome"] . "<br>";
          }
          mysql_close();


?>     <br />
      <form id="frmLogin" name="frmLogin" action="del.php" method="post">
       Deletar: <input name="txtUsuario" type="text" id="txtUsuario"/>
       <input type="button" value="OK" id="botOK" onclick="ValidaForm()"/>


       <br /><br /><input type="button" value="Listar Usuarios" onclick="window.location.href='http://localhost/forum/listar.php'"/>
        <input type="button" value="Novo Usuario" onclick="window.location.href='http://localhost/forum/cd.htm'"/>
        <input type="button" value="Postagens" onclick="window.location.href='http://localhost/forum/usuario.php'"/>
        <input type="button" value="Logoff" onclick="window.location.href='http://localhost/forum/logoff.php'"/>
		</form>
		
		<p align="center">
		<a href="http://validator.w3.org/check?uri=referer"><img
        src="http://www.w3.org/Icons/valid-xhtml10"
        alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a>
			</p>
</body>
</html>
