<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Sexo</title>
<link href="estilo3.css" rel="stylesheet" type="text/css" title="Color" />
</head>
<body>

<?php


if (isset($_POST["opinion"])) {
    $dato = $_POST["opinion"];
 if ($dato == 1) {
    echo 'Eres un <strong>hombre</strong>';
} else {
    echo 'Eres una <strong>mujer</strong>';
}
} else {
    echo 'No ha marcado su sexo';
}

?>

</body>
</html>
