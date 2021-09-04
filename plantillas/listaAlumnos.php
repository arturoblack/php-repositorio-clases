<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Lista Alumnos</title>
</head>
<body>
    <header>
        <h1>Lista de alumnos</h1>
    </header>
    <section>
        <table class="tabla-alumno">
            <tr>
                <th>Codigo</th>
                <th>Nombres</th>
                <th>% falta</th>
            </tr>
            <?php foreach ($alumnos as $alum) { ?>
            <tr>
                <td><?php echo $alum->codigo ?></td>
                <td><?php echo $alum->nombres ?></td>
                <td><?php echo $alum->getPorcentajeFalta() ?></td>
            </tr>
            <?php } ?>
        </table>
    </section>
</body>
</html>