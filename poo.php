<?php
    // Clases y herencias

    // La DEFINICION de una entidad
    class Localidad {
        public $nombre;
        public $codigoUbigeo; //codigoDeUbigeo

        // se ejecuta al crear el objeto ** new
        function __construct($nombre, $xyz) {
            // $this "ESTO" refiere a la clase que se esta materializando
            $this->nombre = $nombre;
            $this->codigoUbigeo = $xyz;
        }
    }

    /*
    $localidad = new Localidad();

    echo $localidad->nombre;
    echo "\n";
    echo $localidad->codigoUbigeo;
    echo "\n";
    $localidad->nombre = "Tambo";
    echo $localidad->nombre;
    // ---- 
    echo "\n";
    */
    echo "*-------------*\n";
    $huancayo = new Localidad("Huancayo", "120101");
    $tambo = new Localidad("Tambo", "120201");
    $chilca = new Localidad("Chilca", "120301");
    echo $huancayo->nombre;
    echo "\n";
    echo $tambo->nombre;
    echo "\n";
    echo $chilca->nombre;
    echo "\n";
?>
