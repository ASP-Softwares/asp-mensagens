var login;
var senha;

;(function($, URL){

	// Funções de visualização (necessitam estar em cima pois estão presentes nas funções operacionais)

	// função para preencher o lbl com o usuário escrito
	var writing = function(texto){

		texto = texto;
		n = 0; // número incrementado
		t = ""; // letra incrementada
		v = 80; // velocidade do texto
		function alerta() {
			t+=texto.charAt(n);
			if(n > texto.length) {
				return false;
			}
			setTimeout(function() {
				alerta();
			}, v);
			$('#name-user').text(t);
			n++;
		}
		setTimeout(function() {
			alerta();
		}, v);

	}


	// sweetAlert (para não ficar o alert cru que é feio)
	var swalError = function(texto) {
		swal({
			title: "Faltaram coisas!",
			text: texto,
			icon: "warning",
			dangerMode: true,
		});
	}

	// ativa e desativa os elementos para aparecer ou não o campo da senha OU fazer a função de login (.do-this)
	var toggleElements = function(){
		if($('.btn-entrar').hasClass('do-this')){

			//se tiver a classe, passa o parametro para executar a função do sistema
			$('#senha').addClass('hide');
			$('#login').removeClass('hide');
			$('.btn-voltar').addClass('hide');
			$('#login').val('');
			$('.btn-entrar').removeClass('do-this');

			$('#login').focus();

		} else {

			//se não tiver a classe, apenas ativa os elementos para o usuário preencher o campo de senha
			login = $('#login').val();
			writing(login);

			$('#login').addClass('hide');
			$('.btn-voltar').removeClass('hide');
			$('#senha').removeClass('hide');
			$('#senha').val('');
			$('.btn-entrar').addClass('do-this');

			$('#senha').focus();

		}
	}

	// funções operacionais

	var checkUsernameOnDataBase = function(username){
		//verifica se o user passado pelo usuário na primeira tela existe na base de dados
		var check = null;
		var value = username.val();

		$.ajax({
			url: URL + '/checkAdmin',
			type: 'POST',
			dataType: 'JSON',
			async: false,
			data: {
				username: value
			},
			complete: function(response){

				check = response.responseJSON.check;

			}
		});

		return check;

	};

	var checkUsername = function(username){
		//faz a verificação se o campo está preenchido ao menos

		if(username.val() === ''){
			swalError('O login não foi preenchido!');
			return false;
		}
		//faz a verificação se o user passado no campo existe na base, esta função está logo acima
		if(!checkUsernameOnDataBase(username)){
			swalError('O login não está cadastrado!');
			return false;
		}

		return true;

	};

	var validate = function(){

		// verifica se a senha foi digitada para tentar fazer o login e passa para a variavel senha criada no começo
		if($('#senha').val().trim() != '' ){
			senha = $('#senha').val();
			return true;
		} else {
			swalError('Faltou você digitar a senha!');
			return false;
		}

	};

	//executa a verificação e o login do usuário
	var loginAdmin = function(){

		$.ajax({
			url: URL + '/loginAdmin',
			type: 'POST',
			dataType: 'JSON',
			data: {
				username: login,
				password: senha
			},
			complete: function(response){

				if(response.responseJSON.login){
					window.location = URL + '/admin/home';
					return;
				}

				swalError('Usuário ou senha incorretos!!');

			}
		});

	};

	// Dá a permissão para fazer o login (executa todas as funções criadas em cascata)
	var submit = function(){

		if(validate()){
			loginAdmin();
		}

		return false;

	};

	var btnLogin = function(){
		// click do btn entrar
		$('.btn-entrar').on('click', function(){
			if($(".btn-entrar").hasClass("do-this")){
				submit();

			} else {

				if(checkUsername($('#login'))){
					toggleElements();
				}

			}
		});

		//click do btn-voltar, da pagina de login onde volta para o usuário digitar o username
		$('.btn-voltar').on('click', function(){

			toggleElements();

		});

		// faz a mesma coisa do clique do botão ao clicar no enter (por isso o swal erro repete quando clicado enter e não esc)
		$(document).keypress(function(e) {
			if(e.which == 13) {
				$('.btn-entrar').click();	
			} 
		});

	}


	//chamando as funções em ordem quando o site estiver carregado e pronto para uso
	$(document).ready(function() {
		// seta foco no campo para o user digitar seu usuário e senha
		$('#login').focus();

		btnLogin();

	});

})($, URL);