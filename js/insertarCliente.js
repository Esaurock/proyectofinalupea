$(document).ready(function () {

	$(document).on('click','#modalcli',function (e) {
		
		paterno = $('#cpaterno').val();
		materno = $('#cmaterno').val();
		nombre = $('#cnombre').val();
		ci = $('#cci').val();
		cel = $('#ccel').val();

		$.ajax({
			url: 'insertarCliente.php',
			type: 'POST',
			data: { paterno:paterno,
					materno:materno,
					nombre:nombre,
					ci:ci,
					cel:cel },
			success: function(response){
				console.log(response);				
				//let tablaVenta = JSON.parse(response);
			}
		})

	});

});
