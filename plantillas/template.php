<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Mi pagina web</title>
</head>
<body>
    <div id="cuadrado" 
        class="cuadrado" 
        onmouseover="toRectangulo()"
        onmouseleave="toCuadrado()">
        <p>hola!!!</p>
    </div>
    <h1 class="titulo"> <?php echo $titulo; ?> </h1>
    <p class="parrafo"> <?php echo $descripcion; ?> </p>
    <p class="parrafo">
        <button onclick="hola()">
        Saludame
        </button>
        <button onclick="cambiaColor()">
            Cambiar de colo al titulo
        </button>
        la suma es <?php echo $suma; ?>
    </p>
    <img src="/img/img.jpg" alt="imagen">

    <script src="/js/app.js"></script>
</body>
</html>
