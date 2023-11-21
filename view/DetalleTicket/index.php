<?php
  require_once("../../config/conexiones.php"); 

if(isset($_SESSION["usuario_id"])){

?>



<!DOCTYPE html>
<html>

<?php require_once("../MainHead/head.php");?>
<title>Home Help Desk</>::Detalle Ticket</title>

</head>
<body class="with-side-menu wet-aspalt-theme mozilla-browser">

<?php require_once("../MainHeader/header.php");?>

	<div class="mobile-menu-left-overlay"></div>
<?php require_once("../MainNav/nav.php");?>


<!-- contenido-->
	<div class="page-content">
		<div class="container-fluid">


        <header class="section-header">
          <div class="tbl">
            <div class="tbl-row">
              <div class="tbl-cell">
                <h3 id="ticket-h3">Detalle Ticket - 1</h3>

                
                <div class="label label-default" id="nombre-usuario"></div>
                <div id="estado-ticket" ></div>
                <span class="label label-pill label-info"  ></span>
               <p ></p>

               <div class="tbl-cell tbl-cell-date" id="fecha_detalle"></div>

                <ol class="breadcrumb breadcrumb-simple">
                  <li><a href="#">Home</a></li>
                  <li class="active">Detalle Ticket</li>
                </ol>
              </div>
            </div>
          </div>
        </header>


        <div class="box-typical box-typical-padding">
          <div class="row">

              <div class="col-lg-6">
                <fieldset class="form-group">
                  <label class="form-label semibold" for="cat_nombre">Categoria</label>
                  <input type="text" class="form-control" id="cat_nombre" name="cat_nombre" readonly>
                </fieldset>
              </div>

              <div class="col-lg-6">
                <fieldset class="form-group">
                  <label class="form-label semibold" for="ticket_titulo">Titulo</label>
                  <input type="text" class="form-control" id="ticket_titulo" name="ticket_titulo" readonly>
                </fieldset>
              </div>

           

          </div>
        </div>




        <section class="activity-line" id="detalle_seccion">

				
			</section>
		
            
            <div class="box-typical box-typical-padding" id="detalle_seccion">
		
            <p>Ingrese su consulta</p>
           
				<div class="row">
  
                            <div class="col-lg-12">
                                <fieldset class="form-group">
                                    <label class="form-label  semibold " for="ticket_descripcionD">Descripcion</label>
                                        <div class="summernote-theme-2" >
                                            <textarea class="summernote" id="ticket_descripcionD" name="ticket_descripcionD"></textarea>
                                        </div>
                                </fieldset>
                               <div>
                                <button type="button" id="btnenviar" class="btn btn-inline btn-primary">Enviar</button>
                                <button type="button" id="btncerrarticket" class="btn btn-inline btn-danger">Cerrar ticket</button>
                              </div>
                            </div>

				</div><!--.row-->
            </div>
            
		
        
	</div>
    </div>
<!-- contenido-->
<?php require_once("../MainJs/js.php");?>
<script type="text/javascript" src="detalle_ticket.js" ></script>

</body>
</html>

<?php
}else{
	header("Location:".conectar::ruta()."/view/home/index.php");
}

?>

