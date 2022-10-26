 
count = 0;
$(document).ready(function () {
	obtenerPlacas();


	$('#form-placa').submit(function (e){
		const datos={
			placa: $('#placa').val(),
			id:$('#id').val()		
		};
		
		$.post('placa.php',datos, function(response){
			//console.log(response);
			$('#form-placa').trigger('reset');
			obtenerPlacas();
			
		});
		e.preventDefault();
		count++;
	});


	function obtenerPlacas(){
		let base = $('#id').val();
		
		$.ajax({
			url: 'lista-placas.php',
			type:'GET',
			data: `id=${base}`,
			success: function(response){
				let tplaca = JSON.parse(response);
				let fila = '';
				tplaca.forEach(tp => {
					fila += `
					<tr idplaca=${tp.idplaca}>
					<td>${tp.placa}</td>
					
					<td>
					<input type="button" class="btn btn-danger eli" value="Eliminar" id="eli">
					</td>
					</tr>
					`
				});
				$('#tplaca').html(fila);
				suma();
			}
		})
	}

	$(document).on('click','.eli', function(){
		let id = $(this)[0].parentElement.parentElement;
		let idplaca = $(id).attr('idplaca');
		$.post('eliminarPlaca.php', {idplaca},function(response){
				//console.log(response);
				obtenerPlacas();
				
			})
		console.log(idplaca);
		count--;
	});

	
	function suma(){
		sum = 0;
		$('#tcompletar #tbcompletar tr').each(function(){
			let cantidad = $(this).find('td').eq(1).html();
			sum += parseFloat(cantidad);
		});	
		if(sum==count){
			//console.log(count);
			$('#pagregar').attr("disabled", "disabled");
			$('#placa').attr("disabled", "disabled");
		}else{
			console.log('no'+sum+ ' '+ count);
			$( '#pagregar' ).removeAttr('disabled');
			$( '#placa' ).removeAttr('disabled');
		}
	}
	
	//////////// FUNCION EXTRA ////////////
	$(document).on('click','.completar',function(){
		$('#placa').attr("disabled", "disabled");
		$('#pagregar').attr("disabled", "disabled");
		$('#placa').attr("disabled", "disabled");
		$('#bancos').attr("disabled", "disabled");
		$('#tramite').attr("disabled", "disabled");
		$('#cagregar').attr("disabled", "disabled");
		$('.eli').prop('readonly', true);
	})

})