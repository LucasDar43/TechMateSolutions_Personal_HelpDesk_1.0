<!DOCTYPE html>
<html>

<?php require_once("../MainHead/head.php");?>
<title>Home Help Desk</>::Nuevo Ticket</title>

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
							<h3>Nuevo Ticket</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								
								<li class="active">Nuevo Ticket</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

            <div class="box-typical box-typical-padding">
			


            <h5 class="m-t-lg with-border">Ingresar informacion</h5>

				<div class="row">
                    <form method="post" id="ticket_form">

                    <input type="hidden" id="usuario_id" name="usuario_id" value="<?php echo $_SESSION["usuario_id"] ?>" >
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold " for="exampleInput">Categoria</label>
                                    <select id="cat_id" name="cat_id" class="form-control">
                                        <!-- <option>Informatica</option>
                                        <option>Seguridad e higiene</option>
                                        <option>Mantenimiento e infraestructura</option>
                                        <option>Insumos y material educativo</option>
                                        <option>Administracion y documentacion</option>
                                        <option>Servicios externos</option>
                                        <option>Proyectos y actividades especiales</option>
                                        <option>Recursos humanos</option> -->
                                    </select>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold " for="ticket_titulo">Titulo</label>
                                    <input type="text" class="form-control" id="ticket_titulo" name="ticket_titulo" placeholder="Ingrese Titulo" >
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset class="form-group">
                                    <label class="form-label  semibold " for="ticket_descripcion">Descripcion</label>
                                        <div class="summernote-theme-6" >
                                            <textarea class="summernote" id="ticket_descripcion" name="ticket_descripcion"></textarea>
                                        </div>
                                </fieldset>
                               <div>
                            <button type="submit" name="action"  value="add" class="btn btn-inline btn-primary-outline">Aceptar</button>
                              </div>
                            </div>

                    
                   
                    </form>

				</div><!--.row-->
            </div>
		</div>
	</div>
<!-- contenido-->
<?php require_once("../MainJs/js.php");?>

<script type="text/javascript" src="nuevoTicket.js" ></script>



</body>

</html>
