<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
</head>

<body>
    <form action="app3.php" method="post">
        <table>
            <tr>
                <th>MATEMATICAS</th>
                <th>LENGUAJE</th>
                <th>CIENCIAS</th>
                <th>SOCIALES</th>
                <th>MORAL</th>
            </tr>
            <tr>
                <td><input type="text" name="matematicas" id="" value="<?php echo isset($_POST['matematicas']) ? $_POST['matematicas'] : ''; ?>"></td>
                <td><input type="text" name="lenguaje" id="" value="<?php echo isset($_POST['lenguaje']) ? $_POST['lenguaje'] : ''; ?>"></td>
                <td><input type="text" name="ciencias" id="" value="<?php echo isset($_POST['ciencias']) ? $_POST['ciencias'] : ''; ?>"></td>
                <td><input type="text" name="sociales" id="" value="<?php echo isset($_POST['sociales']) ? $_POST['sociales'] : ''; ?>"></td>
                <td><input type="text" name="moral" id="" value="<?php echo isset($_POST['moral']) ? $_POST['moral'] : ''; ?>"></td>
            </tr>
        </table>
        <input type="submit" name="promediar" value="PROMEDIAR">
        <input type="submit" name="reset" value="NUEVO">
    </form>

</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_POST['promediar'])) { //agregue esto para limpiar el formulario
        $matematica = isset($_POST['matematicas']) ? $_POST['matematicas'] : "";
        $lenguaje = isset($_POST['lenguaje']) ? $_POST['lenguaje'] : "";
        $ciencias = isset($_POST['ciencias']) ? $_POST['ciencias'] : "";
        $sociales = isset($_POST['sociales']) ? $_POST['sociales'] : "";
        $moral = isset($_POST['moral']) ? $_POST['moral'] : "";


        $promedio = ($matematica + $lenguaje + $ciencias + $sociales + $moral) / 5;
        echo "EL PROMEDIO DEL ESTUDIANTE ES:" . $promedio;
    } elseif (isset($_POST['reset'])) {
        $_POST = [];
    }
}
?>