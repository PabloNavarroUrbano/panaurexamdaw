<?php
$host = "172.24.0.2";
$username = "root";
$password = "root";
$dbname = "panaur";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT * FROM valores";
$result = $conn->query($sql);

echo '<h1>Tabla valores</h1>';

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr>";

    $row = $result->fetch_assoc();
    foreach ($row as $key => $value) {
        echo "<th>$key</th>";
    }
    echo "</tr>";

    // Imprimir datos
    $result->data_seek(0); // Reiniciar el puntero del resultado para leer desde el principio
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No hay registros en la base de datos.";
}

$conn->close();
?>
