<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="forum.css" />
 <title>Valida&ccedil;atilde;o</title>
</head>
<body>

  <?php

   $c = mysql_connect("localhost","root","");
    $d = mysql_select_db("forum",$c);

      $usuario = $_POST['txtUsuario'];
      $senha = $_POST['txtSenha'];

      $resultado= mysql_query ("SELECT * FROM dados_usuario WHERE usuario='$usuario'
      AND senha='$senha' ");

      IF (mysql_num_rows($resultado) > 0) {
        session_start();
        $_SESSION['LOGADO'] = 1;
        $_SESSION['LOGIN'] = $usuario;

        IF ($usuario=='admin')
        {

        header("Location: adm.php");

        }
          else{

        header("Location: usuario.php");

              }
       }else





    mysql_close($c);

?>

  Usu&aacute;rio ou senha errado<br /><br />
	<input type="button" value="Home" onclick="window.location.href='http://localhost/forum/forum.php'"/> 



</body>
</html>
