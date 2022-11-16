<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquetacion con Grids</title>
    <link rel="stylesheet" href="../css/estilos.css?545454">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
    <div class="contenedor">
    <header class="cabecera"> 
        <div><i class="fa-brands fa-facebook"></i>mascotasloja@municipiodeloja.com</div> 
    </header>   
    <section class="cabeceraPrincipal">
        <section class="fondo">
            <div class="menu">
                <section class="logotipo"><img src="../img/logo.png"></section>
                <nav class="menu">
                    <a href="../">Inicio</a>
                    <a href="#">Servicios</a>
                    <a href="#">Productos</a>
                    <a href="#">Adopción</a>
                    <a href="#">Contactos</a>
                </nav>
            </div>
            <div class="boton">
                <h4>PROYECTO DE ADOPCION DE MASCOTAS</h4>
                <button>ADOPTAME</button>
            
            </div>   
        </section>
        
    </section>
    <section class="separador"> 
        <h2>REGISTRO</h2>
    </section>
    <main class="contenido1">
            <form action="procesar.php" method="post">
            <ul class="formulario">
                <li>
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" placeHolder="Ingrese su nombre">
                </li>
                <li>
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" placeHolder="Ingrese su apellido">
                </li>
                <li>
                    <label for="cedula">cedula:</label>
                    <input type="number" id="cedula" name="cedula" placeHolder="Ingrese su numero cedula" require>
                </li>
                <li>
                    <label for="telefono">Telefono:</label>
                    <input type="text" id="telefono" name="telefono" placeHolder="Ingrese su numero de telefono">
                </li>
                <li>
                    <label for="mail">Correo:</label>
                    <input type="email" id="mail" name="mail" placeHolder="Ingrese su correo">
                </li>
                <li>
                    <label for="fecha">Fecha nacimiento:</label>
                    <input type="date" id="fecha" name="fecha">
                </li>
                
            </ul>
            <button type="submit">Guardar</button>

            </form>
    
    </main>
    <footer class="piePagina">
        <section class="derechos">
			<h6>Derechos Reservados UTPL 2022</h6>
		</section>
		<nav class="redesSociales">
			<a href=""><i class="fa-brands fa-facebook"></i></a>
			<a href=""><i class="fa-brands fa-instagram"></i></a>
			<a href=""><i class="fa-brands fa-tiktok"></i></a>
		</nav>
    </footer>
    </div>
</body>
</html>