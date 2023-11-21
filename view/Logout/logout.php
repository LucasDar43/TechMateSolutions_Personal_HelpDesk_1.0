 <?php

 require_once("../../config/conexiones.php");

 $conectar = new Conectar();
 $conectar->ruta();
 

session_destroy();
header("Location:".$conectar->ruta()."./view/index.php");
exit(); 


?> 

<!-- <?php

/* require_once("../../config/conexiones.php");

// Inicia la sesión si aún no se ha iniciado
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Destruye la sesión
session_destroy();

// Crea una instancia de la clase Conectar y llama al método ruta()
$conectar = new Conectar();
header("Location:" . $conectar->ruta() . "./view/index.php");

exit(); */

?>
 -->