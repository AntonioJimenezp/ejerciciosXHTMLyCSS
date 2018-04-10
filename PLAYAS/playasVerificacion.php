<!DOCTYPE html>
<html>

<head>
    <meta charset="ISO-8859-1">
    <title>Verificacion datos</title>
    <link href="Estilos/estiloPlaya.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>

    <?php

if(isset($_POST["opinion"])){
    $valor = $_POST["opinion"];
    if($valor == "si")
        print '<p>Ha estado en la playa</p>';
    elseif ($valor == "no")
        print '<p>No ha estado en la playa</p>';
    else
        print '<p>Visitará la playa</p>';
}else{
    print '<p>No ha indicado si le gusta la playa</p>';
}

if (isset($_POST['valor'])) {
   print '<p>Datos enviados</p>';

}else{
    print '<p>No ha introducido apartado</p>';
}
?>
        <p><a href="SanLorenzo.html">Volver a la pagina San Lorenzo</a></p>
</body>

</html>
