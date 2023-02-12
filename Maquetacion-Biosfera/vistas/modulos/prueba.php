<div id="tester" style="width:600px;height:250px;"></div>
 <?php 
    $conexion = new Conexion1;
    $tiempos = $conexion->getTime();
    $temp    = $conexion->getDatos(2);    
  ?>

<script type="text/javascript">
    // obtenemos el array de valores mediante la conversion a json del
    // array de php
    var arrayJS=<?php echo json_encode($temp);?>;    
    console.log(arrayJS);
    TESTER = document.getElementById('tester');
    // Mostramos los valores del array
    var datos = [];
    for(var i=0;i<arrayJS.length;i++)
    {
        datos.push(arrayJS[i][0]);
    }
    console.log(datos);
    Plotly.newPlot( TESTER, [{
	x: [1, 2, 3, 4, 5, 6],
	y: datos }], {
	margin: { t: 0 } } );
</script>

