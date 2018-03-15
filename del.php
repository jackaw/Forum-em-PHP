<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="forum.css" />
 <title>Delatar Usu&aacute;rio</title>
</head>
<body>
<?php
 $c = mysql_connect("localhost","root","");
    $d = mysql_select_db("forum",$c);

      $usuario = $_POST['txtUsuario'];

       $resultado= mysql_query ("SELECT * FROM dados_usuario WHERE usuario='$usuario'");

      IF (mysql_num_rows($resultado) > 0) {

        $deleta = mysql_query("DELETE FROM dados_usuario WHERE usuario='$usuario' ");

        /* print("<script language = 'javascript'>alert('Usu&aacute;rio Deletado');
         location.href = 'adm.php';
         </script>"); */
		
		 print("<script language = 'javascript'>alert(unescape('Usu\u00e1rio Deletado!'));
         location.href = 'adm.php';
         </script>");  


		 
         }else{
         print("<script language = 'javascript'>alert(unescape('Usu\u00e1rio Inexistente!'));
         location.href = 'adm.php';
         </script>");

              }
?>
</body>
</html>
