
<?php
require_once("../../config/conexiones.php");
if(isset($_SESSION["usuario_id"])){


?>



<!DOCTYPE html>
<html>

<?php require_once("../MainHead/head.php");?>
<title>Home Help Desk</>::Home</title>

</head>
<body class="with-side-menu wet-aspalt-theme mozilla-browser ">

<?php require_once("../MainHeader/header.php");?>

	<div class="mobile-menu-left-overlay"></div>
<?php require_once("../MainNav/nav.php");?>



<!-- contenido -->
	<div class="page-content">
		<div class="container-fluid">
			
		</div>
	</div>
<!-- contenido-->
<?php require_once("../MainJs/js.php");?>
<script type="text/javascript" src="home.js" ></script>

</body>
</html>

<?php
} else{
	header("Location:".conectar::ruta()."index.php");
	
}
?>
