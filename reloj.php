<form method="post" action="">
    <label for="nombre">Ingrese un nombre:</label>
    <input type="text" name="nombre" id="nombre">
    <button type="submit">Guardar</button>
</form>
<?php 
date_default_timezone_set('America/Lima'); // establecer la zona horaria de Perú

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    file_put_contents("nombres.txt", $nombre . PHP_EOL, FILE_APPEND);
}
$hora_actual = date('H:i:s');
echo '<h1> La hora actual en Perú es : ' . $hora_actual . '</h1>' ;
$nombres = file_get_contents("nombres.txt");
$nombres_array = explode(PHP_EOL, $nombres);
echo "<ul>";
foreach ($nombres_array as $nombre) {
    if (!empty($nombre)) {
        echo "<li>$nombre</li>";
    }
}
echo "</ul>";
?>
