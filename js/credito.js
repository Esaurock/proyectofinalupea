$(document).ready(function () {

	$('.form-credito').submit(function (e){
		const datos={
			idt: $('idt').val(),
			bancos: $('#bancos').val(),
			tramite:$('#tramite').val()		
		};
		
		$.post('credito.php',datos, function(response){
			if(response){
				$('#cagregar').attr("disabled", "disabled");
				alert('Agregado tu banco gracias');
			}else{
				$( '#cagregar' ).removeAttr('disabled');
			}

			$('.form-credito').trigger('reset');
			
		});
	});
	
})