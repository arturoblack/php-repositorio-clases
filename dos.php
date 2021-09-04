<?php

require_once 'SimpleTemplateEngine/loader.php';
$env = new SimpleTemplateEngine\Environment('./plantillas');


class Alumno {
    public $nombres;
    public $codigo;
    private $porcentaje_falta = 0; //geter sette

    function __construct($nombres, $codigo) {
        $this->nombres = $nombres;
        $this->codigo = $codigo;
    }

    function getPorcentajeFalta() {
        return $this->porcentaje_falta;
    }

    function setPorcentajeFalta($nuevoPorcentaje) {
        $this->porcentaje_falta = $nuevoPorcentaje;
    }
}


$alumnos_desarrollo = [
    new Alumno('BARRERA CAMARENA NIVIA EDITH',	'2225746'),
    new Alumno('BOTTGER ALOR DICK FERNANDO',	'2115649'),
    new Alumno('CALDERON BARRETO YONEL FABBRI',	'2623180'),
    new Alumno('CARPIO CORDOVA PETER RICARDO',	'2226050'),
    new Alumno('CHATE TANTA VICTOR',	'2225955'),
    new Alumno('CHAVEZ GABINO GLINDERIA CECIL',	'2115647'),
    new Alumno('COLLANQUI DIAZ JUAN CARLOS',	'2226338'),
    new Alumno('ECHEVARRIA NINAHUAMAN JAEL KAREN',	'2225927'),
    new Alumno('GAGO ARROYO HANS JIVAN',	'2225647'),
    new Alumno('HERMOZA BAYONA ADRIAN RONALDO',	'2225620'),
    new Alumno('JIMENEZ BARRIENTOS PAOLA',	'1125215'),
    new Alumno('LAURA ESPINOZA LUCIO RUBEN',	'2225718'),
    new Alumno('LOPEZ INGARUCA KEVIN HENRY',	'1010024'),
    new Alumno('MALPARTIDA COLQUI TERESA EVELYN',	'2225240'),
    new Alumno('PACHECO CUADRADO YSRAEL JONATHAN',	'2115899'),
    new Alumno('PALPA LANDA JEAN PIERRE',	'2225668'),
    new Alumno('PICHA MAQUE HECTOR RICHARD',	'2115785'),
    new Alumno('PUMA CASTRO JOAO CRISTHIAN',	'1221069'),
    new Alumno('QUISPE DURAND JOEL EVER',	'2226027'),
    new Alumno('RIVERA ESPINOZA JHEAN MARCO',	'2225921'),
    new Alumno('ROMAN AQUINO EDER ZE LUIS',	'2115665'),
    new Alumno('ROMERO LOPEZ DAVID HAROLD',	'2225950'),
    new Alumno('SANCHEZ HERRERA CARLOS ENRIQUE',	'1320841'),
    new Alumno('SARAVIA PINO CRISTIAN',	'2225678'),
    new Alumno('VELASQUEZ TORRES FERNANDO',	'2226315'),
    new Alumno('VELIZ TORRES DANIEL JUNIOR',	'2115896'),
    new Alumno('VENTURA RAMOS JONATHAN HENRY',	'2115440'),
];

$datos = [
    "alumnos" => $alumnos_desarrollo,
];

echo $env->render('listaAlumnos.php', $datos);
