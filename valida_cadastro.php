<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="forum.css" /> <title>Valida&ccedil;&atilde;o de Cadastro</title>
</head>
<body>
<?php


    $c = mysql_connect("localhost","root","");
    $d = mysql_select_db("forum",$c);

      $nome = $_POST['txtNome'];
      $endereco = $_POST['txtEndereco'];
      $cidade = $_POST['txtCidade'];
      $estado = $_POST['txtEstado'];
      $cep = $_POST['txtCep'];
      $email = $_POST['txtEmail'];
      $fone = $_POST['txtFone'];
      $cpf = $_POST['txtCpf'];
      $senha = $_POST['txtPass'];
      $usuario = $_POST['txtUsuario'];
      
       $select = mysql_query("SELECT usuario FROM dados_usuario WHERE usuario='$usuario' ");
           IF (mysql_num_rows($select) == 0){

   $insere_dados_usuario = mysql_query("INSERT INTO dados_usuario
   (nome,endereco,cidade,estado,cep,email,fone,cpf,usuario,senha)
   VALUES ('$nome','$endereco','$cidade','$estado','$cep','$email',
       '$fone','$cpf', '$usuario', '$senha');" );
       
       print("<script language = 'javascript'>alert('Dados inseridos com sucesso. Fa\u00e7a o login no sistema! ');
         location.href = 'forum.php';
         </script>");
                                            }
                       
           else {
                 echo "Usu&aacute;rio j&aacute; existente no sistema. Por favor, escolha outro nome de usu&aacute;rio!";
                 ?>
                 <br /><input type="button" value=" Voltar " onclick="history.go(-1)" />

                <?php }
       

      
      mysql_close($c);


?>

</body>
</html>
