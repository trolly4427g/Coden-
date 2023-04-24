<link rel="stylesheet" href="CSS/inicio.css">

<?php

include("dbconnect.php");
    if(isset($_POST['enviar'])){

      
        if(empty($_POST["Correo"])and empty($_POST["password"])){
            echo '<h2 class="error">Usuario o Contraseña incorrectos</h2>';

        }
        else{
            $usuario=trim($_POST['Correo']);
            $contrasena=trim($_POST['contrasena']);
            $sql=$conn->query("SELECT * FROM `usuarios` WHERE Correo='$usuario' and contrasena='$contrasena' ");
            $user=$conn->query("SELECT `Nombre` , `Apellido` FROM `usuarios` WHERE Correo='$usuario' and contrasena='$contrasena' ");
            $user_result = $user->fetch_object();
            if($datos=$sql->fetch_object()){
           
                ?>
<link rel="stylesheet" href="CSS/login.css">

<body class="falla">
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
        <?php  echo '<a href="##"><button class="cambio">' . $user_result->Nombre  . " ".  $user_result->Apellido. '</button></a>';?>

    </header>
    <div class="pos_inscrito">
        <h3 class="inscrito">Has iniciado sesion</h3>
        <div class="tiburonsin">
            <img src="img/tiburon.gif" alt="404 image" srcset="" class="tiburon">
        </div>

    </div>
    <script src="js/node.js"></script>

</body>



<?php  
         }else{
            ?>
<header>
    <h1>Coden.#</h1>
    <nav>
        <ul class="nav__link">
            <li><a href="../index.html">Inicio</a></li>
            <li><a href="../Servicios/servicios.html">Servicios</a></li>
            <li><a href="../nosotros/nosotros.html">Sobre nosotros</a></li>
        </ul>
    </nav>
    <a href="../Contacto/Contacto.html"><button>Contact</button></a>
</header>
<h1 class="inicio">Inicia Sesion</h1>
<section class="tamano">
    <div class="contenedor">
        <form action="login.php" method="post">
            <input type="email" name="Correo" placeholder="Correo" class="correo" required
                value="<?php echo isset($_POST['Correo']) ? $_POST['Correo'] : ''; ?>">
            <input type="password" name="contrasena" id="" placeholder="Contraseña" class="contrasena" required>
            <button name="enviar" id="enviar">Iniciar Sesion</button>
        </form>
    </div>
</section>
<h2 class="error"> Usuario o Contraseña incorrectos</h2>
<script>
const agranda = document.querySelector('.error');
agranda.classList.add('aumenta');
</script>
<?php  };


      }
    }
?>