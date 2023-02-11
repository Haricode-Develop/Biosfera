<?php

class Conexion1
{
    //variable para almacenar la conexion
    private $connection;
    //constructor para probar la conexion
    public function __construct()
    {
        $this->connection = new mysqli('localhost', 'root', '', 'test');
    }
    //esta funcion recibe los parametros del formulario de registro y los mete a la bd.
    public function insertInformation($nombre, $apellido, $correo, $clave, $ciudad)
    {
        $connection2 = new mysqli('localhost', 'root', '', 'test');
        $queryInsertion = ('INSERT INTO usuarios2 (nombre, apellido, correo, clave, ciudad) VALUES (\'' . $nombre . '\',\'' . $apellido . '\',\'' . $correo . '\',aes_encrypt(\'' . $clave . '\', \'prueba\'),\'' . $ciudad . '\');');
        $result = mysqli_query($connection2, $queryInsertion);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function datosVentanaPrincipal($datoEspecifico)
    {
        $connection = new mysqli('localhost', 'root', '', 'test');
        $queryVentanaPrincipal = ('SELECT * FROM datos_principal ORDER by Id DESC LIMIT 1;');
        $result = mysqli_query($connection, $queryVentanaPrincipal);
        if ($result) {
            $row = mysqli_fetch_array($result);
            if ($row[$datoEspecifico] != NULL) {
                $devolucion = $row[$datoEspecifico];
                return $devolucion;
            } else {
                $devolucion = "No se pudo";
                return $devolucion;
            }
        } else {
            $no = "No se pudo concretar la operacion";
            return $no;
        }

    }
    
    public function getDatos($opt){
        $connection= new mysqli('localhost', 'root', '', 'weatherstation');        
        $querySelection = "";
        if($opt === 1){
            $querySelection = ('SELECT times, pressure FROM measures01');
        }else if($opt === 2){
            $querySelection = ('SELECT times, temperature FROM measures01');
        }else if($opt === 3){
            $querySelection = ('SELECT times, humidity FROM measures01');
        }else if($opt === 4){
            $querySelection = ('SELECT times, windspeed FROM measures01');
        }else if($opt === 5){
            $querySelection = ('SELECT times, winddirection FROM measures01');
        }else if($opt === 6){
            $querySelection = ('SELECT times, rain FROM measures01');
        }    
        
        $resultQuery = mysqli_query($connection, $querySelection);
        
        if ($resultQuery) {            
            $lista = [];
            $cantidad = mysqli_num_rows($resultQuery);
            while($cantidad > 0){
                $row = mysqli_fetch_row($resultQuery);
                array_push($lista, $row);
                var_dump($row);
                echo '<br><br>';
                $cantidad--;
            }
            
        }else{
            $error = "No se pudo retornar nada";
            return $error;
        }        
    }
}