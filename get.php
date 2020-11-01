<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                $resultado = $conn->query($sql);
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
            ?>
            <?php 


                while ($legisladores = $resultado->fetch_assoc()){ 
                    echo "Nombre: ";
                    echo $legisladores['Nombre'];
                    echo " ";
                    echo $legisladores['Apellido'];
                    echo "<br>";
                    echo "Mail: ";
                    echo $legisladores['Mail'];
                    echo "<br>";
                    echo "Telefono: ";
                    echo $legisladores['Telefono'];
                    echo "<br>";
                    echo "Direccion: ";
                    echo $legisladores['Direccion'];
                    echo "<br>";
                    echo "Pais: ";
                    echo $legisladores['Pais'];
                    echo "<br>";
                    echo "Votos: ";
                    echo $legisladores['Votos'];
                    echo "<br>";
                    echo "Partido: ";
                    echo $legisladores['Partido'];
                    echo "<br>";
                    echo "Inicio mandato: ";
                    echo $legisladores['Inicio_mandato'];
                    echo "<br>";
                    echo "Fin mandato: ";
                    echo $legisladores['Fin_mandato'];
                    echo "<br>";
                    echo "------------------";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";


                 } 
                
                ?> 

                
            <?php $conn->close(); ?>

    </div>
    
    
</body>
</html>