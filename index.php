<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo PHP con IA</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #121212; /* Fondo oscuro a juego con la imagen */
            color: #e0e0e0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            background-color: #1e1e1e;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.5);
            border: 1px solid #333;
        }
        h1 {
            color: #00e5ff; /* Color cian neón para el texto */
            margin-bottom: 20px;
        }
        .ia-image {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            border: 2px solid #ff00e5; /* Borde rosa neón */
            box-shadow: 0 0 15px rgba(255, 0, 229, 0.5);
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <?php
            // Reemplaza "[Tu Nombre Aquí]" con tu nombre real
            $nombreEstudiante = "Renzo Lombardo Castillo Martinez";
            
            // Imprimimos el mensaje en pantalla
            echo "<h1>Hola mundo, soy $nombreEstudiante</h1>";
        ?>
        
        <img src="imagen_ia.png" alt="Megacomputadora futurista generada por IA" class="ia-image">
    </div>

</body>
</html>