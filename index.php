<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina con PHP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">Logo</a>
            <input type="checkbox"  id="menu">
            <label for="menu">
                <img src="/Media/menu.png" class="menu-icono" alt="Menú">
            </label>
            
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>

            </nav>

        </div>
        <div class="header-content container">
            <div class="header-txt">
                <h1>Medical center</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsa accusamus eos excepturi repudiandae voluptatum, eligendi neque unde quia et error assumenda fuga iure non ut aspernatur aperiam nostrum facilis?
                </p>
                <a href="#" class="btn-1">Información</a>
            </div>
            <div class="header-img">
                <img src="/Media/left.png" alt="Imagen del banner">
            </div>
    
        </div>

    </header>

    <section class="about container">
        <div class="about-img">
            <img src="/Media/about.png" alt="">
        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam alias libero assumenda repellendus beatae illum, culpa accusantium facere incidunt ad rem optio minima voluptate natus, cupiditate ab velit nemo ea?
            </p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam alias libero assumenda repellendus beatae illum, culpa accusantium facere incidunt ad rem optio minima voluptate natus, cupiditate ab velit nemo ea?
            </p>
        
        </div>

    </section>

    <main class="servicios">

        <h2>Servicios</h2>
        <div class="servicios-content container">

            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-hospital-user"></i>
                <h3>Pediatria</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-stethoscope"></i>
                <h3>Ginecologia</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-bed-pulse"></i>
                <h3>Dermatologia</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-hospital"></i>
                <h3>Cardiologia</h3>
            </div>
        </div>
    </main>


    <section class="formulario container">

        <form method="post" autocomplete="off">

            <h2>Agenda consulta</h2>

            <div class="input-group">

                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre y Apellido">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Telefono Celular">
                    <i class="fa-solid fa-phone"></i>
                </div>

                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo">
                    <i class="fa-solid fa-envelope"></i>
                </div>

                <div class="input-container">
                    <textarea name="message" placeholder="Detalles de la consulta">
                    </textarea>
                </div>

                <input type="submit" name="send" class="btn" onClick="myFunction()">
            </div>

        </form>

    </section>


    <footer class="footer">
        <div class="footer-content container">

            <div class="link">
                <a href="#" class="logo">logo</a>
            </div>

            <div class="link">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>

            </div>

        </div>
    </footer>

    <?php
        include("send.php");
    ?>

    <script>
        function myFunction() {
            window.location.href = "http://localhost/MiPRIMERFORMULARIO"
        }
    </script>

</body>
</html>