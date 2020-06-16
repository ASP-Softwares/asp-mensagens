// Pede numero de acessos (BUSCA NO HISTÓRICO GERAL, pega todos os registros de históricos)
// Código que só foi util em testes, dificilmente será usado na aplicação em si 

$('#request').on('click', function(){

	$.ajax({
		url: URL + '/getAllAcess',
		type: 'POST',
		dataType: 'JSON',
		async: false,

		complete: function(response){

			alert('array');

			var lista = response.responseJSON.return;
			for ($i = 0; $i < lista.length; $i++) {
				alert('Numero de acessos: ' + lista[$i]['N_acessos'] + ', data do registro: ' + lista[$i]['data']);
			}


		}
	});

});


// ----------------------------------------------------------------------------------------