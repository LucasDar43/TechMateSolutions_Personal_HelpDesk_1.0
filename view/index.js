function init(){
   
}


$(document).ready(function() {
   

});


$(document).on("click", "#btnsoporte", function(){
    if ($('#rol_id').val()==1){
        $('#titulo_usuario').html("Acceso Soporte");
        $('#btnsoporte').html("Acceso Usuario");
        $('#rol_id').val(2);
    }else{
        $('#titulo_usuario').html("Acceso Usuario");
        $('#btnsoporte').html("Acceso Soporte");
        $('#rol_id').val(1);
    }

})











init();