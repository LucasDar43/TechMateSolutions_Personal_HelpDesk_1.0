            function init(){
            $("#ticket_form").on("submit" , function(e){
                guardaryeditar(e);
            })

        }
 

 
 

		$(document).ready(function() {
			$('#ticket_descripcion').summernote({height:200});

            $.post("../../controller/categoria.php?op=combo", function(data, status){
                
                $('#cat_id').html(data);
            });

		});

        function guardaryeditar(e){
            e.preventDefault();
            var formData =new FormData($("#ticket_form")[0]);
            if ($('#ticket_descripcion').summernote('isEmpty') || $('#ticket_titulo').val()==''){
                swal("Advertencia!", "Campos Vacios", "warning");
                console.log('test6');
            }else{

            $.ajax({

                url: "../../controller/ticket.php?op=insert",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(datos){
                    console.log(datos);
                    $('#ticket_titulo').val('');
                    $('#ticket_descripcion').summernote('reset');
                    swal("Correcto!!", "Guardado exitosamente", "success");
                }
            })
        }
        }


        init ();
	