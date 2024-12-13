<?php
    echo "<h2>EMPLEADOS</h2>";
    class Empleado {

        public function inicializar($nom, $dineroSueldo){
            $this->nombre = $nom;
            $this->sueldo = $dineroSueldo;
        }
        public function imprimir(){
            echo "El empleado se llama: $this->nombre.<br>";
            if($this->sueldo >= 3000){
                echo "$this->nombre cobra $this->sueldo, es rico y debe pagar impuestos.<br>";
            }
            else{
                echo "$this->nombre cobra $this->sueldo, es pobre, tiene panza y no debe pagar impuestos.<br>";
            }
        }
    }

    $empleado1 = new Empleado();
    $empleado1->inicializar("Miguel", 4000);
    $empleado1->imprimir();

    $empleado2 = new Empleado();
    $empleado2->inicializar("Javi", 1000);
    $empleado2->imprimir();
?>