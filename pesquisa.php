<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="forum.css" />
 <title>Pesquisa</title>
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


      $tipo = $_POST["tipo"];
      $texto = $_POST["txt"];

	  ?>
	  
	   <h1>Pesquisa</h1>

      <table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
<td width="40%" align="center" bgcolor="#E6E6E6"><strong>T&oacute;picos</strong></td>
<td width="15%" align="center" bgcolor="#E6E6E6"><strong>Autor</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Data/Hora</strong></td>

</tr>

<?php
      SWITCH($tipo){

      CASE "autor":

     $res    = mysql_query("SELECT * FROM forum_q WHERE name='$texto'");
     $t = 0;
     while($rows=mysql_fetch_array($res)){ // Inicia Loop
 ?>
<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; $t = 1; ?></td>
<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><br /> </td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['name']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>

</tr>

<?php
 }

   if($t == 0){
          print("<script language = 'javascript'>alert('N\u00e3o foi achado nenhum autor com este nome!');
         location.href = 'usuario.php';
         </script>");
         BREAK;
         }else {
         BREAK;
               }



      
      CASE "topico":
 
     $res    = mysql_query("SELECT * FROM forum_q WHERE topic LIKE'%$texto%' ");

     $t = 0;
     while($rows=mysql_fetch_array($res)){ // Inicia Loop
?>

<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; $t = 1; ?></td>
<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><br /> </td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['name']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>

</tr>

<?php

}
      if($t == 0){
          print("<script language = 'javascript'>alert('N\u00e3o foi achado nenhum t\u00f3pico com este nome!');
         location.href = 'usuario.php';
         </script>");
         BREAK;
         }else {
         BREAK;
               }



      


      CASE "mensagem":


     $res    = mysql_query("SELECT q.id as c1,r.a_answer as c2,q.topic as c3,q.name as c4,r.a_datetime as c5 FROM forum_res r JOIN forum_q q ON r.question_id = q.id WHERE r.a_answer LIKE'%$texto%'");

     $t = 0;
     while($rows=mysql_fetch_array($res)){ // Inicia Loop
?>
<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['c1']; $t = 1; ?></td>
<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['c1']; ?>"><?php echo $rows['c3']; ?></a><br /></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['c4']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['c5']; ?></td>

</tr>

<p>
  <?php

}
      if($t == 0){
          print("<script language = 'javascript'>alert('N\u00e3o foi achado nenhuma referencia ao nome citado!');
         location.href = 'usuario.php';
         </script>");
         BREAK;
         }else {
         BREAK;
               }
      
      DEFAULT:
       print("<script language = 'javascript'>alert('N\u00e3o foi selecionada nenhuma op\u00e3\u00e3o!');
         location.href = 'usuario.php';
         </script>");
      BREAK;
      }
     
      mysql_close();                    
	  ?>
</p>
<p>&nbsp;
  <a href="usuario.php">Voltar</a>
</p>
</body>
</html>







