		function ValidarForm()
		{
		var usuario;
		var senha;

		usuario = document.getElementById("txtUsuario");
		senha = document.getElementById("txtSenha");

		if (usuario.value == "") {
			window.alert("Usuário não informado");
			usuario.focus(); }

		else {
			if (senha.value == "") {
				window.alert("Senha não informada");
				senha.focus(); }
			else {
					document.forms["frmLogin"].submit();
					
				 }
			}
		}
		function Limpar ()

		{
		document.getElementById("txtUsuario").value="";
		document.getElementById("txtSenha").value="";
		}
		
		function ValidaForm()
		{
		var usuario;


		usuario = document.getElementById("txtUsuario");


		if (usuario.value == "") {
			window.alert("Usuário não informado");
			usuario.focus();     }


			else {
					document.forms["frmLogin"].submit();

				 }
			
		}
		function ValidarForm2()
		{
		var nome;		
		var endereco;
		var cidade;
		var estado
		var cep;
		var email;
		var fone;
		var cpf;
		var pass;
		var user;
		

		nome = document.getElementById("txtNome");
		
		endereco = document.getElementById("txtEndereco");
		cidade = document.getElementById("txtCidade");
		estado = document.getElementById("txtEstado");
		cep = document.getElementById("txtCep");
		email = document.getElementById("txtEmail");
		fone = document.getElementById("txtFone");
		cpf = document.getElementById("txtCpf");
		user = document.getElementById("txtUsuario");
		pass = document.getElementById("txtPass");
		
		if (nome.value == "") {
			window.alert("Nome não informado");
			nome.focus(); }

		else if (endereco.value == "") {
				window.alert("Endereço não informado");
				endereco.focus();      }
				
		else if (cidade.value == "") {
				window.alert("Cidade não informada");
				cidade.focus();      }
		
		else if (estado.value == "") {
				window.alert("Estado não informado");
				estado.focus();      }

		else if (cep.value == "") {
				window.alert("CEP não informado");
				cep.focus();      }
				
		else if (email.value == "") {
				window.alert("Email não informado");
				email.focus();      }

		else if (fone.value == "") {
				window.alert("Fone não informado");
				fone.focus();      }

		else if (cpf.value == "") {
				window.alert("CPF não informado");
				cpf.focus();      }

       else if (user.value == "") {
				window.alert("Usuário não informado");
				user.focus();      }
            
		else if (pass.value == "") {
				window.alert("Senha não informada");
				pass.focus();      }
				
			else{
					document.forms["frmCadastro"].submit();

				}
			}
			
		function ValidarForm4()
		{
		var nome;
		var endereco;
		var cidade;
		var estado
		var cep;
		var email;
		var fone;
		var cpf;
		var pass;


		nome = document.getElementById("txtNome");

		endereco = document.getElementById("txtEndereco");
		cidade = document.getElementById("txtCidade");
		estado = document.getElementById("txtEstado");
		cep = document.getElementById("txtCep");
		email = document.getElementById("txtEmail");
		fone = document.getElementById("txtFone");
		cpf = document.getElementById("txtCpf");
		pass = document.getElementById("txtPass");

		if (nome.value == "") {
			window.alert("Nome não informado");
			nome.focus(); }

		else if (endereco.value == "") {
				window.alert("Endereço não informado");
				endereco.focus();      }

		else if (cidade.value == "") {
				window.alert("Cidade não informada");
				cidade.focus();      }

		else if (estado.value == "") {
				window.alert("Estado não informado");
				estado.focus();      }

		else if (cep.value == "") {
				window.alert("CEP não informado");
				cep.focus();      }

		else if (email.value == "") {
				window.alert("Email não informado");
				email.focus();      }

		else if (fone.value == "") {
				window.alert("Fone não informado");
				fone.focus();      }

		else if (cpf.value == "") {
				window.alert("CPF não informado");
				cpf.focus();      }

		else if (pass.value == "") {
				window.alert("Senha não informada");
				pass.focus();      }

			else{
					document.forms["frmCadastro"].submit();

				}
			}

		function Limpar2 ()

		{
		document.getElementById("txtNome").value="";
		document.getElementById("txtEndereco").value="";
        document.getElementById("txtCidade").value="";
        document.getElementById("txtEstado").value="";
        document.getElementById("txtCep").value="";
        document.getElementById("txtEmail").value="";
        document.getElementById("txtFone").value="";
        document.getElementById("txtCpf").value="";
        document.getElementById("txtPass").value="";
        }
		
		function Limpar ()

		{
		document.getElementById("txtNome").value="";
		document.getElementById("txtEndereco").value="";
        document.getElementById("txtCidade").value="";
        document.getElementById("txtEstado").value="";
        document.getElementById("txtCep").value="";
        document.getElementById("txtEmail").value="";
        document.getElementById("txtFone").value="";
        document.getElementById("txtCpf").value="";
        document.getElementById("txtUsuario").value="";
        document.getElementById("txtPass").value="";
        }
		
		 function validaForm3(){
        var objRadio = document.forms["pesquisa"].elements["tipo"];
        var checado = false;
        var valor;
        var texto = document.getElementById("txt");
        
        //Validando radios, percorrendo todos para ver qual está selecionado:
        
        for (var i=0; i<objRadio.length; i++) {
                if (objRadio[i].checked == true) {
                        checado = true;
                        valor = objRadio[i].value;
                }
        }

        if (checado == true) {
        
              if (texto.value == "") {
			window.alert("Valor não informado");
			return false;
			texto.focus(); }
              else{
              	document.forms["pesquisa"].submit();
                   }


          }
           else
         {
          alert("Por favor selecione uma opção!");
          return false;
         }
	}
	
	function validaForm5 (){
	var texto;
	
	texto = document.getElementById("a_answer");


		if (texto.value == "") {
			window.alert("Texto não informado");
			texto.focus(); }
			
			else{
              	document.forms["res"].submit();
                   }

	}
	
	function ValidaForm6(){
	var topic;
	var detail;
	
	topic = document.getElementById("topic");
	detail = document.getElementById("detail");

		if (topic.value == "") {
			window.alert("Tópico não informado");
			topic.focus(); }
		
		else if (detail.value == "") {
			window.alert("Detalhes não informados");
			detail.focus(); }
		
			
			else{
              	document.forms["form1"].submit();
                   }

	}