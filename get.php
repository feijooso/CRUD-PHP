<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="estilos.css" media="screen" title="no title">
    <title>Get</title>
</head>
<body>
    <h1>Legisladores</h1>

    <div class="contenedor">
        <?php 
            try {
                require_once('bd_conection.php');
                $sql = "SELECT * FROM legisladores";
                $result = $conn->query($sql);
            } catch (\Exception $e) {
                echo $e->getMessage();
            }

            if($result){
                if(mysqli_num_rows($result) > 0){
                    echo "<table class='table table-bordered table-striped'>";
                        echo "<thead>";
                            echo "<tr>";
                                echo "<th>#</th>";
                                echo "<th>Nombre</th>";
                                echo "<th>Apellido</th>";
                                echo "<th>Partido</th>";
                            echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['Nombre'] . "</td>";
                                echo "<td>" . $row['Apellido'] . "</td>";
                                echo "<td>" . $row['Partido'] . "</td>";
                                echo "<td>";
                                    echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                    echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                echo "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";                            
                    echo "</table>";
                } 

            }
            ?>

                
            <?php $conn->close(); ?>

    </div>
    
    
</body>
</html>