$(document).ready(function () {

	$('#venta').submit(function (e) {
		
		e.preventDefault();

		$.ajax({
			url: 'insertarVenta.php',
			type: 'POST',
			dataType: 'json',
			data: $(this).serialize(),
			
		})
		.done(function(respuesta){
				//console.log(respuesta);

				if (!respuesta.error) {
					console.log('ingreso de los datos correctos');
					$('#venta').trigger('reset');

				// para abrir el pdf en la pre venta//
				pedirID();
				// pdf
				setTimeout('location.reload();',3000);
				

			}else{
				console.log('los datos no ingresaron');
			}
			
		})
		.fail(function(resp){
			console.log(resp.responseText);
		})
		.always(function(){
			console.log('se completo');
		})

	});


	function pedirID(){
		var venta='';		
		$.ajax({
			url: 'idventa.php',
			type: 'POST',
			success: function(response){
				let idventa = JSON.parse(response);
				let id = idventa[0].idventa;
				venta=id;
				// genera mi pdf //
				const ruta = '/sistema_motos/pdf/recibo.php?id='+venta;
				window.open(ruta);
			}
		})
		
	}

});


