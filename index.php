<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 9 DWES</title>
    <style>
        h1{
            text-align: center;
        }
        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
            border-radius: 10%;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            setTimeout(recargar, 5000);
        });
        function recargar(){
            location.reload();
        }
    </script>
</head>
<body>
    <h1>Imágenes de perretes obtenidas de una API Rest</h1>
    <img src="
        <?php 
            $datos = file_get_contents('https://dog.ceo/api/breeds/image/random');
            $imagenes = json_decode($datos);
            echo "$imagenes->message";
        ?>
    ">
</body>
</html>