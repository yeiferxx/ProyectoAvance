<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro bovino</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap');


        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none; /* quitar las lineas de los enlaces */
            list-style: none; /*  quitar las bolitas de los enlaces */
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color:#95aa61 ;
        }
        
        /* Estilos para la imagen */
        .fotobovino {
            background-image: url('/pruebaProyecto/fotobovino.jpg');
            background-size: cover;
            background-position: center;
            width: 900px; /* Mismo tamaño que el formulario */
            height: 810px; /* Ajusta la altura automáticamente */
            border-radius: 10px; /* Esquinas redondeadas */
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); /* Sombra similar al formulario */
        }
        
        /* Ocultar la imagen en pantallas pequeñas */
        @media (max-width: 768px) {
            .fotobovino {
                display: none; /* La imagen desaparece en pantallas pequeñas */
            }
        
            .formulario {
                flex-direction: column; /* Alinea solo el formulario en pantalla pequeña */
            }
        
            .form {
                width: 90%; /* Formulario ocupa más espacio en pantallas pequeñas */
            }
        }
        
        .fotobovino img{
            width: 500px; /* Ancho igual al del formulario */
            height: auto; /* Mantiene la proporción de la imagen */
            max-height: 500px; /* Limita la altura para evitar que crezca demasiado */
        }
        
        
        .logotipe {
            position: relative;
            top: -30px;
            left: 50px;
            display: flex;
            width: 100%;
            justify-content: flex-end;
            align-items: flex-start;
            max-width: 500px;
            margin: 0 auto;
            box-sizing: border-box;
        }
        
        .logotipe img {
            width: 50%;
            max-width: 100px;
            height: auto;
        }
        
        .formulario{
            margin-top: 100px;
            margin-bottom: 100px;
            display: flex;
            justify-content: start;
            align-items: center;
        }
        
        form{
        background-color: #D6E68A;
            padding: 50px;
            width: 500px; /* El formulario tiene un ancho fijo de 500px */
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }
        
        form h2{
            font-size: 25px;
            color: #323232;
            text-transform: uppercase;
            margin-bottom: 35px;
        }
        
        .input-container{
            position: relative;
        }
        
        .input-container > i{
            padding: 14px;
            border-radius: 50%;
            background-color: #02B1F4;
            color: #ffffff;
            position: absolute;
            font-size: 20px;
            top: 4px;
            left: 10px;
        }
        
        .input-container > input, textarea {
            padding: 17px 15px 17px 65px;
            width: 100%;
            margin-bottom: 25px;
            border-radius: 35px;
            background-color: transparent;
            border: 2px solid #000000;
            font-size: 16px;
            outline: none;
            color: #323232;
        }
        
        
        
        textarea {
            font-family: 'Poppins', sans-serif;
            height: 150px;
        }
        
        ::placeholder {
            color:#000000;
            font-size: 16px;
        }
        
        .btn {
            background-color: #899752;
            padding: 17px 30px;
            width: 100%;
            border: 0;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            border-radius: 25px;
            color: #ffffff;
            font-size: 15px;
            cursor: pointer;
        }
        
        .btn:hover{
        transition: 1s;
        background-color: #000000;
        }
        
        
        /*ESTILOS  TIPO DE ALIMENTACIÓN*/
        .input-container > select {
            padding: 17px 15px 17px 65px;
            width: 100%;
            margin-bottom: 25px;
            border-radius: 35px;
            background-color: transparent;
            border: 2px solid #02B1F4;
            font-size: 16px;
            outline: none;
            color: #323232;
            appearance: none; /* Para eliminar el estilo por defecto del navegador */
        }
        
        .input-container select:focus {
            border-color: #029bda; /* Cambio de color al hacer foco */
        }
        
        /* Para agregar una flecha personalizada en el select */
        .input-container {
            position: relative;
        }
        
        .input-container:after {
            content: '\f078'; /* Código unicode para la flecha de Font Awesome */
            font-family: 'FontAwesome';
            position: absolute;
            top: 20px;
            right: 20px;
            color: #a0a0a0;
            pointer-events: none;
        }
        
        @media (max-width: 500px) {
            .fotobovino{
                position: relative;
                max-width: 100px;
                left:50%;
                bottom: 40px;
            }
        }
        
        
        
        
        @media (max-width: 1192px){
            
            .fotobovino{
                position: relative;
                max-width: 10%;
                left:50%;
                bottom: 40px;
            }
        
            .menu {
                padding: 20px;
            }
        
            .menu label{
                display: initial;
            }
        
            .menu .navbar {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background-color: #ffffff;
                display: none;
            }
        
            .menu .navbar ul li {
                width: 100%;
            }
        
            #menu:checked ~ .navbar {
                display: initial;
            }
        
            .header {
                min-height: 0vh;
                padding: 80px 30px 50px 30px;
            }
        
            .header-content {
                flex-direction: column;
            }
        
            .header-txt {
                text-align: center;
                width: 100%;
                margin-bottom: 25px;
            }
        
            .header-img {
                width: 100%;
            }
            
            .header-img img{
                width: 100%;
            }
            
            .about{
                padding: 30px;
                flex-direction: column;
            }
            
            .about-img {
                width: 100% ;
                order: 2;
            }
            
            .about-img img {
                width: 100%;
            }
            
            .about-txt {
                width: 100%;
                margin-left: 0;
                text-align: center;
                margin-bottom: 25px;
            }
            
            .servicios {
                padding: 30px;
            }
            
            .servicios-content {
                margin-top: 25px;
                flex-direction: column;
            }
            
            .servicio-1 {
                margin-bottom: 20px;
            }
            
            .formulario{
                padding: 30px;
                margin-top: 0;
                margin-bottom: 0;
            }
            
            form {
                width:100%;
            }
        }
    </style>

</head>
<body>

    
    
    <section class="formulario container">
        
        <form method="post" autocomplete="off">
        
            <div class="logotipe">
            <img  src="https://www.shutterstock.com/image-vector/farm-cow-head-sketch-hand-600nw-2254086281.jpg" alt="logo">
            </div>
            
            
            
            <h2>Registrar nuevo bovino</h2>

            <div class="input-group">

                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-container">
                    <input type="text" name="raza" placeholder="Raza">
                    <i class="fa-solid fa-cow"></i>
                </div>

                <div class="input-container">
                    <select name="sexo" >
                        <option value="" disabled selected>Sexo</option>
                        <option value="Macho">Macho</option>
                        <option value="Hembra">Hembra</option>
                    </select>
                    <i class="fa-solid fa-venus-mars"></i>
                </div>
                

                <div class="input-container">
                    <input type="text" name="padres" placeholder="Padre y Madre">
                    <i class="fa-solid fa-users"></i>
                </div>

                <div class="input-container">
                    <input type="date" name="birthdate" placeholder="Fecha de nacimiento">
                    <i class="fa-solid fa-calendar"></i>
                </div>
                
                <div class="input-container">
                    <select name="foodType">
                        <option value="" disabled selected>Tipo de alimentación</option>
                        <option value="Pasto">Pasto</option>
                        <option value="Sal al 8%">Sal al 8%</option>
                        <option value="Purina cremosa repila">Purina cremosa repila</option>
                    </select>
                    <i class="fa-solid fa-utensils"></i>
                </div>
                
                <!-- <div class="input-container">
                    <textarea name="message" placeholder="Detalles de la consulta">
                    </textarea>
                </div> -->

                <input type="submit" name="send" class="btn" value="Crear perfil" onClick="myFunction()">
            </div>

        </form>
        <div class="fotobovino">
    
        </div>

    </section>

    <?php
        include("send.php");
    ?>


    <script>
    function myFunction() {
        alert("El perfil se está creando...");
    }
    </script>

    <script>
        function myFunction() {
            window.location.href = "http://localhost/prueba"
        }


    </script>

</body>
</html>