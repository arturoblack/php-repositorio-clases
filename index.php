<!-- 
    http://localhost:8000/ 
    protocolo :// dominio :puerto
    http -> HyperText Transport Protocol
        -> Protocolo de transporte de Hiper Text
        -> Hiper Text : como el texto pero hiper -- TEXTO
-->

<?php
//include the loader
require_once 'SimpleTemplateEngine/loader.php';
$env = new SimpleTemplateEngine\Environment('./plantillas');

$suma = 4 + 2;
$datos = [
    "titulo" => "Hola mundo",
    "descripcion" => "Bienvenido a mi pagia web",
    "suma" => $suma,
];

echo $env->render('template.php', $datos);

?>
