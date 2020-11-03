<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1>Borrar</h1>

    <?php
        require_once('bd_conection.php');
        $stmt = $conn->prepare("DELETE FROM legisladores WHERE id = ?");
        $stmt->bind_param("i",$_GET["id"]);
        $stmt->execute();
    ?>
    <p>
        Se ha borrado el legislador
    </p>

    <a href="get.php" role="button">Volver</a>
    
    </div>


    
</body>
</html>