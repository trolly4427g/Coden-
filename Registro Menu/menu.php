<?php

    // Create connection
include("dbconnect.php");
if(isset($_POST['register'])){
    if(strlen($_POST['Nombre'])>=1 && strlen($_POST['Apellido'])>=1 &&strlen($_POST['Correo'])>=1 &&strlen($_POST['contrasena'])>=1 ){
    $Nombre=trim($_POST['Nombre']);
    $Apellido=trim($_POST['Apellido']);
    $Correo=trim($_POST['Correo']);
    $contrasena=trim($_POST['contrasena']);
    $fecha=date('d/m/y');
    $consulta="INSERT INTO `usuarios`(`Nombre`, `Apellido`, `Correo`, `contrasena`, `fecha`)  VALUES ('$Nombre','$Apellido','$Correo','$contrasena','$fecha')";
    $resultado=mysqli_query($conn,$consulta);
     if($resultado){
            ?>
             <link rel="stylesheet" href="menu.css">
             <header>
             <h1>Coden#</h1>
             <nav>
              <ul class="nav__link">
                <li><a href="../index.html">Inicio</a></li>
                <li><a href="../Servicios/servicios.html">Servicios</a></li>
                <li><a href="../nosotros/nosotros.html">Sobre nosotros</a></li>
            </ul>      
            </nav>
            <a href="../Contacto/Contacto.html"><button>Contact</button></a>
            </header>
            <h3 class="inscrito">te has inscrito!</h3>
    <?php}
        else{    
            ?>
            
    <?php }
    }
    
}
?>
