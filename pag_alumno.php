<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo de proyectos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .dropdown {
            display: inline-block;
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            width: 100%;
            overflow: auto;
            box-shadow: 0px 10px 10px 0px rgba(0, 0, 0, 0.4);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            display: block;
            color: #000000;
            padding: 5px;
            text-decoration: none;
            background-color: white;
        }

        .dropdown-content a:hover {
            color: #FFFFFF;
            background-color: #00A4BD;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .btn-dashboard {
            background-color: darkblue;
            color: #ffffff;
            cursor: pointer;
            padding: 10px;
            text-align: center;
            border: none;
            border-radius: 5px;
            width: 100%;
        }

        .btn-dashboard:hover {
            background-color: #00A4BD;
        }
    </style>
</head>

<body>
    <?php
    include 'conexion.php';
    ?>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="#" class="nav-link text-white">
                <img src="img/logo.png" alt="mi logo" width="50px" height="50px">
            </a>
            <a class="navbar-brand" href="#">Prog Web</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <div class="dropdown">
                            <a href="#" class="nav-link text-white">Bienvenido Alumno:
                                <?php
                                echo $colum['nombre'] . ' ';
                                echo $colum['apellidos'];
                                ?>
                            </a>
                            <div class="dropdown-content">
                                <a href="areas_interes.php">Áreas de interés</a>
                                <a href="home.html">Cerrar sesión</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <form id="formularioProyecto" method="post">
        <label for="nombre">Nombre:</label>
        <?php
        echo '<input type="text" name="nombre" id="nombre" placeholder="';
        echo $colum['nombre'];
        echo '" readonly>';
        ?>
        <label for="apellidos">Apellidos:</label>
        <?php
        echo '<input type="text" name="apellidos" id="apellidos" placeholder="';
        echo $colum['apellidos'];
        echo '" readonly>';
        ?>
        <label for="sexo">Sexo:</label>
        <?php
        echo '<input type="text" name="sexo" id="sexo" placeholder="';
        echo $colum['sexo'];
        echo '" readonly>';
        ?>
        <label for="edad">Edad:</label>
        <?php
        echo '<input type="text" name="edad" id="edad" placeholder="';
        echo $colum['edad'];
        echo '" readonly>';
        ?>
        <label for="interes">Temas de interés:</label>
        <?php
        echo '<input type="text" name="interes" id="interes" placeholder="';
        echo $colum['interes'];
        echo '" readonly>';
        ?>
        <button class="btn-dashboard" onclick="window.location.href='#'">Registrar proyecto</button>
    </form>
</body>

</html>