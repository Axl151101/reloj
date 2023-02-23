<form method="post" action="">
    <label for="nombre">Ingrese su nombre:</label>
    <input type="text" name="nombre" id="nombre">
    <button type="submit">Guardar</button>
</form>
<?php 
date_default_timezone_set('America/Lima');
$tiempo_en_segundos = time();
$fecha_actual = date("d-m-Y h:i:s", $tiempo_en_segundos);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    echo "Hola, $nombre!, la fecha y hora actual es: $fecha_actual";
}
?>
