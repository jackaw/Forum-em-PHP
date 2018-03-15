<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="forum.css" />
<script type="text/javascript" src="java.js" charset="ISO-8859"></script>
 <title>Usu&aacute;rio</title>
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

    $tbl_name="forum_q";
    
     $sql="SELECT * FROM $tbl_name ORDER BY id DESC";
     
   $result=mysql_query($sql);
                          ?>
                          <h1>F&oacute;rum</h1>
         <br />
         <br />

         <table width="94%" class="borda" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td width="6%" align="center" class="borda"><strong>#</strong></td>
<td width="40%" align="center" class="borda"><strong>T&oacute;picos</strong></td>
<td width="15%" align="center" class="borda"><strong>Autor</strong></td>
<td width="13%" align="center" class="borda"><strong>Data/Hora</strong></td>

</tr>

<?php

while($rows=mysql_fetch_array($result)){ // Inicia Looping tabela linha
?>
<tr>
<td class="borda1"><?php echo $rows['id']; ?></td>
<td class="borda1"><a href="view_topic.php?id= <?php echo $rows['id']?> "><?php echo $rows['topic']; ?></a><br /></td>
<td align="center" class="borda1"><?php echo $rows['name']; ?></td>
<td align="center" class="borda1"><?php echo $rows['datetime']; ?></td>

</tr>

<?php

}
mysql_close();
?>
<tr>
<td colspan="10" align="right" class="borda"><a href="criar_tp.php"><strong>Criar Novo T&oacute;pico</strong> </a></td>
</tr>


</table><br />

<h1>Pesquisa</h1><br />
<form action="pesquisa.php" method="post" name="pesquisa" onsubmit="return validaForm3()">
   <tr>
     <td valign="top" nowrap="nowrap" width="100%">
   

        <table cellspacing="0" cellpadding="2" border="0" width="100%">
		
   <tbody>


          <tr class="borda">
            <td align="right"></td>

            <td>
              <input size="40" id="txt" type="text" name="txt" class="novo" value="" />
              &nbsp;&nbsp;&nbsp;&nbsp;


              <input type="submit" value="Procurar"/>
            </td>
          </tr>

          <tr class="borda">
            <td align="right"></td>

            <td>
              <input type="radio" value="autor" id="name"name="tipo" /> Autor
                    <input type="radio" value="topico"  name="tipo" />T&oacute;pico
                    <input type="radio" value="mensagem" name="tipo" /> Corpo das Mensagens
            </td>
          </tr>
          </tbody>
        </table>
        <p>&nbsp;</p>
      <p><h4><a href="at.php">Atualizar Cadastro</a> <a  href="logoff.php">Logoff</a></h4></p></td>
      <a  href="index.php">Listar Usuários</a></h4></p></td>
   </tr>
</form>



</body>
</html>
