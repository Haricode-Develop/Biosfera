<div id="tester" style="width:600px;height:250px;"></div>
 <?php 
    $conexion = new Conexion1;
    $tiempos = $conexion->getTime();
    $temp    = $conexion->getDatos(2);    
  ?>

<script type="text/javascript">
    // obtenemos el array de valores mediante la conversion a json del
    // array de php
    var arrayData=<?php echo json_encode($temp);?>; 
    var arrayTime=<?php echo json_encode($tiempos);?>; 
    console.log(arrayData);
    TESTER = document.getElementById('tester');
    // Mostramos los valores del array
    var datos = [];
    var tiempo = [];
    for(var i=0;i<arrayData.length;i++)
    {
        datos.push(arrayData[i][0]);
        tiempo.push(arrayTime[i][0]);
    }
    console.log(datos);
    Plotly.newPlot( TESTER, [{
	x: tiempo,
	y: datos }], {
	margin: { t: 0 } } );
</script>

