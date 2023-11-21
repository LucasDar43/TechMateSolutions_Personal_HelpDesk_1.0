function init(){


}



console.log('test5');

$(document).ready(function(){

    var ticket_id = getUrlParameter('ID');

    listar_detalle(ticket_id);

            $('#ticket_descripcionD').summernote({
                height:150,
                lang:"es-ES",
            });
            $.post("../../controller/ticket.php?op=listar_detalle", { ticket_id:ticket_id}, function (data) {
                
                $('#detalle_seccion').html(data);
              
            }); 
           

            $.post("../../controller/ticket.php?op=mostrar", { ticket_id:ticket_id}, function (data) {
               
                console.log(jsondata);
                var jsondata=JSON.parse(data);
               $('#estado-ticket').html(jsondata.estado);
               $('#nombre-usuario').html(jsondata.usuario_nombre + ' '+ jsondata.usuario_apellido);
               $('#fecha_detalle').html(jsondata.fecha_creacion);
               $('#ticket-h3').html("ID ticket -"+jsondata.ticket_id);         
               $('#ticket_titulo').val(jsondata.ticket_titulo); 
               $('#cat_nombre').val(jsondata.cat_nombre); 

                
               
            }); 

});

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

$(document).on("click","#btnenviar", function(){
   console.log('test9');
    var ticket_id= getUrlParameter('ID');
    var usuario_id= $('#user_idx').val();
    var ticket_descripcionD= $('#ticket_descripcionD').val();
    


   $.post("../../controller/ticket.php?op=insert_detalle", { ticket_id:ticket_id,usuario_id:usuario_id, ticket_descripcionD:ticket_descripcionD}, function (data) {
    listar_detalle(ticket_id);            
    console.log('prueba');
    $('#ticket_descripcionD').summernote('reset');
    swal("Correcto!!", "Guardado exitosamente", "success");
}); 
});

$(document).on("click","#btncerrarticket", function(){
    console.log('test7');
    swal({
        title: "Advertencia",
        text: "Esta seguro de cerrar el ticket?",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-warning",
        confirmButtonText: "Si",
        cancelButtonText: "No",
        closeOnConfirm: false
      
    },
    function(isConfirm) {
        if (isConfirm) {
        var ticket_id = getUrlParameter('ID');  
$.post("../../controller/ticket.php?op=update", { ticket_id:ticket_id}, function (data) {
      
            }); 



            swal({
                title: "Ticket!",
                text: "Ticket cerrado correctamente",
                type: "success",
                confirmButtonClass: "btn-success"
            });
        } 
    });
 });

function listar_detalle(ticket_id){
    $.post("../../controller/ticket.php?op=listar_detalle", { ticket_id:ticket_id}, function (data) {
                
        $('#detalle_seccion').html(data);
      
    }); 
}




init();

