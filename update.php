<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <h1>Update</h1>

    <?php 
    require_once('bd_conection.php');

    if(isset($_GET["id"])){
        $id = $_GET["id"];
/*         $stmt = $conn->prepare("SELECT * FROM legisladores WHERE id = ? ");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $result = $stmt->get_result();

 */


    } elseif (isset($_POST["name"])) {
        $name_nuevo = $_POST["name"];
        $stmt = $conn->prepare("UPDATE legisladores SET Nombre = ? WHERE id = ?");
        $stmt->bind_param("si",$name_nuevo,$_POST["id"]);
       
        $stmt->execute();
        var_dump($stmt);
        
        var_dump($_POST);

    }
    ?> 
    

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label>Name</label>
            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
            <input type="text" name="name" class="form-control">
            <input type="submit" value="Submit">
        </form>
 
</body>
</html>