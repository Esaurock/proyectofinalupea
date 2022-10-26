$(document).ready(function () {
	
	$(document).on('click','.task-add', function(){

		let elemento = $(this)[0].parentElement.parentElement;
		let id = $(elemento).attr('taskId');
		$.post('getMoto.php', {id},function(response){
			
			let template = '';
			let task = JSON.parse(response);
			//console.log(task);
			template += '<tr taskId="'+task.codmoto+'"  precio="'+task.precio+'" id="contenido" class="contenido" >' + 
			'<td align="center"><input type="button" class="tarea recuperar btn btn-danger " value="X"> </td>'+	

			'<td>'+
			'<input type="hidden" class="codmoto" id="codmoto[]" name="codmoto[]" value="'+task.codmoto+'">'
			+ task.codmoto +'<br>'+ task.modelo +'<br>'+ task.marca +'<br>'+ task.color +'<br>Bs.'+ task.precio +
			'</td>'+

			'<td>' + '<input type="number" class="cantidad" id="'+task.codmoto+'" name="cantidad[]" min="1" max="99" value="0"> '  + '</td>'+
 			//'<td>' + 'Bs. <input type="text" class="adelanto" id="adelanto" name="adelanto[]" size="2" disabled > '  + '</td>'+
 			'<td>' + '<input type="text" class="'+task.codmoto+'" id="importe" name="importe[]" size="5" readonly="" required="">' + '</td>'+'</tr>';

 			$('#tbody').append(template);

 		});   

		idmoto(id);	
			//////////////////////////////////////////
		}); 

	// bloque los botones agrewgados
	$(document).on('click','#agregar', function(){
		$(this).attr("disabled", "disabled");	
	});

	/// eliminar productos que no se quiere de la tabla de compra ////
	$(document).on('click', '.recuperar', function(){

		let eliminar = $(this)[0].parentElement.parentElement;
		let id = $(eliminar).attr('taskId');
		// desbloquea producto
		$( "button[name='"+id+"']" ).removeAttr('disabled');
		eliminar.remove();

	});
	
	// agregar precios a cada caja de texto //
	function idmoto(id){
		$('#tbody').on('change','#'+id+'', function(){
			datos = $(this)[0].parentElement.parentElement;
			precio = $(datos).attr('precio');
			var cantidad = parseInt($('#'+id+'').val());
			$('.'+id+'').val(cantidad * precio);
				//console.log((cantidad * precio));
				total();	

				////////////////////////////////////
				/// para calcular las cantidades ///
				let c = parseInt($(this).val());	
				let idd=JSON.stringify(id);
				stock = 0;
				$('#table_id #tablamoto tr').each(function(){

					st = $(this).find('td').eq(3).find('label').html();
					cod2 = $(this).find('td').eq(1).html();	
					moto = JSON.stringify(cod2.trim());
				 //console.log(moto); 		
				 if(idd===moto){
						//console.log(idd+' somos iguales '+moto);
						stock = parseInt(st);
					}
				});
				if(stock<c){
					alert('La cantidad supera al stock');
				  	//console.log('la cantidad es mayor al stock');
				  	$('#'+id+'').val(0);
				  	$('.'+id+'').val(0);
				  	total();
				  }
				///// la cantidad no debe sobrepasar el stock ////  
				//////////////////////////////////////////////////  

			});
	}
	//////////////////////////////////////////
	// carga el campo total de la pre-venta //
	$(document).on('change','#pago',function(){
		total();
	})
	//// funcion total 'realiza las sumas ////
	function total(){
		var total= 0;
		var suma = 0.0;
		$('.table #tbody tr').each(function(){

			suma = $(this).find('td').eq(3).find('input').val();
			total += parseFloat(suma);

		});

		if($('#pago').val()==2){
			total = (total*0.15)+total;
			$('#total').val(total);
		}else{
			//console.log(total)
			$('#total').val(total);	
		}
	}
	// actualiza total de la pre venta
	$(document).on('click','.tarea',function(){
		//console.log($(this).val());
		total();
	});
	///////////////////////////////////////
	///////////////////////////////////////

	function limite(id2){
		$('#tbody').on('change','#'+id2+'',function(){
			let d = $(this)[0].parentElement.parentElement;
			let cod = parseInt($(this).val());	
			//console.log(id2);
			let id22=JSON.stringify(id2);
			
			stock1 = 0;
			$('#table_id #tablamoto tr').each(function(){

				stock = $(this).find('td').eq(3).find('label').html();
				idmoto = $(this).find('td').eq(1).html();	

				moto = JSON.stringify(idmoto.trim());
			 //console.log(moto); 		
			 if(id22===moto){
			 	console.log('somos iguales');
			 	stock1 = parseInt(stock);
			 }

			});
			console.log(stock1);
			//console.log(parseInt(cod));
			if(cod===stock1){
				console.log('son iguales ' +cod+' '+ stock1);
			}
			//console.log(idmoto+' uno');
			//console.log(d+' dos'); 
			
		});	

	}
	



});


