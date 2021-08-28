<?php

    class Cita {
        private $paciente;
        private $medico;
        public $fecha;
        public $hora;
        private $duracion = 30;

        function __construct($paciente, $medico, $fecha, $hora)
        {
            $this->paciente = $paciente;
            $this->medico = $medico;
            $this->fecha = $fecha;
            $this->hora = $hora;
        }

        // GETER para $paciente
        function getPaciente() {
            return $this->paciente;
        }
        // SETER para $paciente
        function setPaciente($nuevoPaciente) {
            $this->paciente = $nuevoPaciente;
        }

        // GETTER para $medico
        // () -> String
        function getMedico() {
            return $this->medico;
        }

        // SETTER para medico
        // (String) -> void
        function setMedico($newMedico) {
            $this->medico = $newMedico;
        }

        // () -> String;
        function imprimirDetalleCita() {
            // $cadena = ""; // " hola 'amigo' dsds $var"
            // $cadena = ''; // " hola 'amigo' dsds "
            $detalle = <<<EOD
                Estimado paciente $this->paciente:
                LA cita con el medico $this->medico: 
                es el dia $this->fecha a las $this->hora.

                por favor llege temprano
            EOD;
            // $detalle2 = "Estimado paciente NOMBRE:";
            // $detalle2 = $detalle."Estimado paciente NOMBRE:";
            // $detalle2 .= "Estimado paciente NOMBRE:";
            // $detalle2 .= "Estimado paciente NOMBRE:";

            return $detalle;
        }


    }
    
    function quienEsMayor($n1, $n2) {
        // return $n1 > $n2 ? $n1 : $n2; //condicional ternario
        $mayor = NULL;
        if ($n1 > $n2) {
            $mayor = $n1;
        } else {
            $mayor = $n2;
        }
        return $mayor;

    }

    $cita1 = new Cita("Jorgito", "Saul", "12/12/2021", "03:45");

    echo $cita1->fecha." ".$cita1->hora."\n";
    echo $cita1->fecha = "15/08/2022";
    echo $cita1->fecha." ".$cita1->hora."\n";
    echo $cita1->getPaciente();

    echo $cita1->getPaciente();
    echo "\n";
    echo $cita1->imprimirDetalleCita();
    echo "\n";
    echo "el mayor entre 2 y 3 es: ";
    echo quienEsMayor(2, 3);
