$(document).ready(function(){

/////// inicio del buscar ////////////
$('#buscar').keyup(function(e){
    ///// inicio if /////   
    if ($('#buscar').val()) {

      let buscar = $('#buscar').val();
      $.ajax({
        url: 'getVentas.php',
        type: 'POST',
        data: { buscar:buscar },
        success: function(response){
          let tablaVenta = JSON.parse(response);
            //$('#mostrar').html(tablaVenta.usuario); 
            //console.log(tablaVenta[0].cantidad);

            let plantilla = ' '; 
            tablaVenta.forEach(tablas => { 
              let ade = tablas.suma*300;
              let saldo = tablas.importe-(tablas.suma*300);
              plantilla+=`<tr>

              <td style="color:#456789;font-size:80%;">${tablas.fecha}</td>
              <td style="color:#456789;font-size:80%;">${tablas.cliente}</td>

              

              <td style="color:#456789;font-size:80%;">
              <b>Numero de Motos: ${tablas.suma}</b>
              </td>
              
              <td style="color:#456789;font-size:80%;">${ade}</td>
              <td style="color:#456789;font-size:80%;">${saldo}</td>
              <td style="color:#456789;font-size:80%;">${tablas.importe}</td>

              <td>
              <a href="completar.php?id=${tablas.idventa}" id="confirmar" class="btn btn-success"><i class="fas fa-check-circle"></i></a>
              <a href="ventacancelada.php?id=${tablas.idventa}" id="cancelar"class="btn btn-danger"><i class="fas fa-window-close"></i></a>
              </td>
              </tr> 
              `
              
            });

            $('#tventa').html(plantilla);
            $('.mostrar').val(tablaVenta[0].cliente);
            //console.log('+++++++++===========++++++');
            
          }
        })

    }
///// fin if /////
})
/////// fin del buscar ////////////


});
