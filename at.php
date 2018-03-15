<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="forum.css" />
<script type="text/javascript" src="java.js" charset="ISO-8859"></script>
<title> Atualiza&ccedil;&atilde;o de cadastro </title>
</head>
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
          

        $res    = mysql_query("select * from dados_usuario where usuario = '$login' ");
                
        $row = mysql_fetch_assoc($res);
        

?>
<body>
      <h1>Cadastro</h1>
      
      

  			<form id="frmCadastro" name="frmCadastro" action="update.php" method="post"> 
			Nome:<input size="40" name="txtNome" type="text" id="txtNome" value="<?php echo $row['nome'] ?>"/> <br /> 
			Endere&ccedil;o:<input size="40" name="txtEndereco" type="text" id="txtEndereco" value="<?php echo $row['endereco']; ?>"/><br />
			Cidade:<input size="20" name="txtCidade" type="text" id="txtCidade" value="<?php echo $row['cidade']; ?>"/><br />
			Estado:<input size="20" name="txtEstado" type="text" id="txtEstado" value="<?php echo $row['estado']; ?>"/><br />
			CEP:<input size="8" name="txtCep" type="text" id="txtCep" value="<?php echo $row['cep']; ?>"/><br />
			Email:<input size="25" name="txtEmail" type="text" id="txtEmail" value="<?php echo $row['email']; ?>"/><br />
			Fone:<input size="10" name="txtFone" type="text" id="txtFone" value="<?php echo $row['fone']; ?>" /><br />
			CPF:<input size="12" name="txtCpf" type="text" id="txtCpf" value="<?php echo $row['cpf']; ?>"/><br />
            Senha:<input size="8" name="txtPass" type="text" id="txtPass" value="<?php echo $row['senha']; ?>"/><br />

			<input type="button" value="OK" id="btOk" onclick="ValidarForm4()"/>

			<input type="button" value="Limpar" id="botaoLimpar" onclick="Limpar2()"/>

		    <input type="button" value="Voltar" onclick="window.location.href='http://localhost/forum/usuario.php'"/>

    		</form>


</body>
</html>
