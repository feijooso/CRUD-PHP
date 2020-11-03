<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="estilos.css" media="screen" title="no title">
    <title>Read</title>
</head>
<body>

    <div class="container">

        <?php
        require_once('bd_conection.php');
        $stmt = $conn->prepare("SELECT * FROM legisladores WHERE id = ? ");
        $stmt->bind_param("i",$_GET["id"]);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result){
            if(mysqli_num_rows($result) > 0){
                echo "<table class='table table-bordered table-striped'>";
                    echo "<thead>";
                        echo "<tr>";
                            echo "<th>#</th>";
                            echo "<th>Nombre</th>";
                            echo "<th>Apellido</th>";
                            echo "<th>Mail</th>";
                            echo "<th>Telefono</th>";
                            echo "<th>Direccion</th>";
                            echo "<th>Pais</th>";
                            echo "<th>Cantidad de votos</th>";
                            echo "<th>Partido</th>";
                            echo "<th>Inicio Mandato</th>";
                            echo "<th>Fin Mandato</th>";
                            echo "<th>Automatico</th>";
                        echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['Nombre'] . "</td>";
                            echo "<td>" . $row['Apellido'] . "</td>";
                            echo "<td>" . $row['Mail'] . "</td>";
                            echo "<td>" . $row['Telefono'] . "</td>";
                            echo "<td>" . $row['Direccion'] . "</td>";
                            echo "<td>" . $row['Pais'] . "</td>";
                            echo "<td>" . $row['Votos'] . "</td>";
                            echo "<td>" . $row['Partido'] . "</td>";
                            echo "<td>" . $row['Inicio_mandato'] . "</td>";
                            echo "<td>" . $row['Fin_mandato'] . "</td>";
                            echo "<td>" . $row['Automatico'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";                            
                echo "</table>";
            } 

        }

        $stmt->close();
        $conn->close();
        ?>
    </div>

</body>
</html>