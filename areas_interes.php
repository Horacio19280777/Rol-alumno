<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temas de interés</title>
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
            box-shadow: 0px 10px 10px 0px rgba(0,0,0,0.4);
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
        input[type="submit"] {
            background-color: darkblue;
            color: #ffffff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #00A4BD;
        }
        .btn-cancel {
            background-color: red;
            color: #ffffff;
            margin-bottom: 15px;
            cursor: pointer;
            padding: 10px;
            text-align: center;
            border: none;
            border-radius: 5px;
            width: 100%;
        }
        .btn-cancel:hover {
            background-color: bisque;
            color: black;
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
                        <?php
                            echo '<a href="#" class="nav-link text-white">Bienvenido Alumno: ';
                            echo $colum['nombre'].' ';
                            echo $colum['apellidos'];
                            echo '</a>';
                            ?>
                            <div class="dropdown-content">
                                <a href="home.html">Cerrar sesión</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1></h1>
    <form id="formularioProyecto" method="post" action="modificar.php">
        <label for="interes">Tema de interés:</label>
        <input type="text" name="interes" id="interes" placeholder="<?php echo $colum['interes']; ?>" required>
        <input type="submit" name="submit" value="Modificar">
        <button class="btn-cancel" onclick="window.location.href='pag_alumno.php'">Regresar</button>
    </form>
</body>
</html>