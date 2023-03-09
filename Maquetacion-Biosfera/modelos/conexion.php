<?php

class Conexion1
{
    //variable para almacenar la conexion
    private $connection;
    //constructor para probar la conexion
    public function __construct()
    {
        $this->connection = new mysqli('172.27.220.200', 'usertest', 'wetterstation', 'WEATHERSTATION');
    }
    //esta funcion recibe los parametros del formulario de registro y los mete a la bd.
    public function insertInformation($nombre, $apellido, $correo, $clave, $ciudad)
    {
        $queryInsertion = ('INSERT INTO usuarios2 (nombre, apellido, correo, clave, ciudad) VALUES (\'' . $nombre . '\',\'' . $apellido . '\',\'' . $correo . '\',aes_encrypt(\'' . $clave . '\', \'prueba\'),\'' . $ciudad . '\');');
        $result = mysqli_query($this->connection, $queryInsertion);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }    
    public function datosVentanaPrincipal($datoEspecifico)
    {
        $queryVentanaPrincipal = ('SELECT * FROM MeasuresNew WHERE id = (SELECT MAX(id) FROM MeasuresNew);');
        $result = mysqli_query($this->connection, $queryVentanaPrincipal);
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
        $querySelection = "";
       
        if($opt === 1){
            $querySelection = ('SELECT pressure FROM MeasuresNew WHERE DATE(timestamps) = CURDATE();');
        }else if($opt === 2){
            $querySelection = ('SELECT temperature FROM MeasuresNew WHERE DATE(timestamps) = CURDATE();');
        }else if($opt === 3){
            $querySelection = ('SELECT humidity FROM MeasuresNew WHERE DATE(timestamps) = CURDATE();');
        }else if($opt === 4){
            $querySelection = ('SELECT windspeed FROM MeasuresNew WHERE DATE(timestamps) = CURDATE();');
        }else if($opt === 5){
            $querySelection = ('SELECT windspeed, winddirection FROM measures01');
        }else if($opt === 6){
            $querySelection = ('SELECT rain FROM measures01');
        }    
        
        $resultQuery = mysqli_query($this->connection, $querySelection);
        
        if ($resultQuery) {            
            $lista = [];
            $cantidad = mysqli_num_rows($resultQuery);
            while($cantidad > 0){
                $row = mysqli_fetch_row($resultQuery);
                array_push($lista, $row);
                $cantidad--;                
            }
            return $lista;
            
        }else{
            $error = "No se pudo retornar nada";
            return $error;
        }        
    }

    public function getTime(){
        $querySelection = ('SELECT timestamps FROM MeasuresNew WHERE DATE(timestamps) = CURDATE();');
        $resultQuery = mysqli_query($this->connection, $querySelection);
        
        if ($resultQuery) {            
            $lista = [];
            $cantidad = mysqli_num_rows($resultQuery);
            while($cantidad > 0){
                $row = mysqli_fetch_row($resultQuery);
                array_push($lista, $row);
                $cantidad--;                
            }
            return $lista;
            
        }else{
            $error = "No se pudo retornar nada";
            return $error;
        }
    }
}