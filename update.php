<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="forum.css" />
 <title>Validação de Cadastro</title>
</head>
<body>
<?php


    $c = mysql_connect("localhost","root","");
    $d = mysql_select_db("forum",$c);
     session_start();
     $login = $_SESSION["LOGIN"];
     
      $nome = $_POST['txtNome'];
      $endereco = $_POST['txtEndereco'];
      $cidade = $_POST['txtCidade'];
      $estado = $_POST['txtEstado'];
      $cep = $_POST['txtCep'];
      $email = $_POST['txtEmail'];
      $fone = $_POST['txtFone'];
      $cpf = $_POST['txtCpf'];
      $senha = $_POST['txtPass'];

      $insere_dados = mysql_query("UPDATE dados_usuario SET nome='$nome', endereco='$endereco', cidade='$cidade', estado='$estado',
       cep='$cep', email='$email', fone='$fone', cpf='$cpf', senha='$senha' where usuario='$login'");

       if ($insere_dados != 0){

         print("<script language = 'javascript'>alert('Cadastro Atualizado com sucesso!');
         location.href = 'usuario.php';</script>");
                                      }
       else {
        print("<script language = 'javascript'>alert('Não foi possível atualizar o cadastro');
         location.href = 'usuario.php';
         </script>");
         }
                                      



      mysql_close($c);


?>


</body>
</html>
