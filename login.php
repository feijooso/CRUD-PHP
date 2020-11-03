<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <title>Login</title>
</head>
<body>

    <h1>Registrarse</h1>
    <p>Completa para ingresar</p>

    <?php

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $user_ingresado = $_POST["user"];
            $password_ingresado =  $_POST["password"];

            require_once('bd_conection.php');
            $stmt = $conn->prepare ("SELECT password FROM users WHERE user = ?");
            $stmt->bind_param("s",$user_ingresado);
            $stmt->execute();
            $stmt->store_result();
            

            if($stmt->num_rows == 1) {
                $stmt->bind_result($password_valida);
                $stmt->fetch();
                if ($password_ingresado == $password_valida){
                    header("location: get.php");
                }
                else {
                    echo "maaaaaal";
                    echo $password_valida;
                    echo $password_ingresado;
                }
            } 
        }

        


    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control">
        </div>    

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Login">
        </div>
    </form>

    
</body>
</html>