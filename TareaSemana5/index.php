<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Bucle Do...While en PHP - U20230560</title>
</head>

<body>
    <h1>Simulación de Puntos en un Juego</h1>
    <p>Este ejemplo simula la acumulación de puntos hasta alcanzar o superar 50 puntos.</p>
    <ul>
        <?php
        $totalPuntos = 0;
        do {
            $puntos = rand(1, 10);
            $totalPuntos += $puntos;
            echo "<li>Puntos obtenidos: $puntos (Total acumulado: $totalPuntos)</li>";
        } while ($totalPuntos < 50);
        ?>
    </ul>
</body>

</html>