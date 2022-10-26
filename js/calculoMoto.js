$(document).ready(function(){

	
	$(document).on('change','#check',function(){
			
			if (document.getElementById('check').checked)
				{
				activar();	
				$('#selector').removeAttr('disabled');
				$("#idventa").prop('readonly', true);
				$("#selector").val(0);
				$("#idventa").val(0);
				}else{
				$('#selector').attr("disabled", "disabled");	
				$("#selector").val(0);
				$("#idventa").prop('readonly', false);
				$("#idventa").val(0);
				}
	});
	//checked(true);
	
	function activar(){
		$(document).on('change','#selector',function(){
			datos = $(this).val()
			cantidad = parseFloat($('#idcompra').val());
			
			total = cantidad+(cantidad * datos);
			$('#idventa').val(total);
			console.log(total);
		});	
	}

	
	

});