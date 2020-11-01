<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="estilos.css" media="screen" title="no title">
  </head>
  <body>

    <div class="contenedor">
      <h1>Respuesta</h1>
      <?php 
        $resultado = $_POST; 

        $error = FALSE;
        echo $error;
        echo "<br>";

        //Nombre
        if(empty($resultado['nombre']) || is_numeric($resultado['nombre'])) {
          echo "Nombre invalido";
          $error += TRUE;
          echo $error;
          echo "<br>";
        }


        //Apellido
        if(empty($resultado['apellido']) || is_numeric($resultado['nombre'])) {
          echo "Apellido invalido";
          $error += TRUE;
          echo $error;
          echo "<br>";
        }

        //Mail
        if(empty($resultado['mail'])) {
          echo "Mail invalido";
          $error += TRUE;
          echo $error;
          echo "<br>";
        }

        //Telefono
        if(empty($resultado['telefono']) || !is_numeric($resultado['telefono'])) {
          echo "Telefono invalido";
          $error += TRUE;
          echo $error;
          echo "<br>";
        }

        //Pais
        if(empty($resultado['pais']) || is_numeric($resultado['nombre'])) {
          echo "Pais invalido";
          $error += TRUE;
          echo $error;
          echo "<br>";
        }

        //Votos
        if(empty($resultado['votos']) || !is_numeric($resultado['telefono'])) {
          echo "Cantidad de votos invalida";
          $error += TRUE;
          echo $error;
          echo "<br>";
        }

        //Partido
        $partidos = array("rojo", "verde", "azul");
        $automatico = 0;
        if($resultado['partido'] == "") {
          $partido = $partidos[array_rand($partidos)];
          $automatico = 1;
        } else {
          $partido = $resultado['partido'];
          echo $partido;
        }

        //Fecha mandato
        if(empty($resultado['mandato-year']) || empty($resultado['mandato-day']) || empty($resultado['mandato-month'])) {
          $error += TRUE;
          echo "Fecha mandato vacia";
        } elseif (!checkdate ($resultado['mandato-month'], $resultado['mandato-day'], $resultado['mandato-year'])) {
          $error += TRUE;
          echo "Fecha mandato invalida";
        } else {
          $date_string = $resultado['mandato-year']."-".$resultado['mandato-month']."-".$resultado['mandato-day'];
          $fecha_inicio = new DateTime($date_string);
          $fecha_fin = date_add($fecha_inicio, date_interval_create_from_date_string("1 year"));
        }

      ?>

      <pre>
        <?php var_dump($_POST); ?>
      </pre>
 
      <?php
      
      echo $error;
        if($error == 0) {
          try {
            echo "Cargando...";
            require_once('bd_conection.php');
            $stmt = $conn->prepare("INSERT INTO legisladores(Nombre, Apellido, Mail, Telefono, Direccion, Pais, Votos, Partido, Inicio_mandato, Fin_mandato, Automatico) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param("sssississss",$resultado['nombre'],$resultado['apellido'],$resultado['mail'],$resultado['telefono'],$resultado['direccion'],$resultado['pais'],$resultado['votos'],$partido,$date_string,$fecha_fin->format('Y-m-d H:i:s'),$automatico);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            echo "Carga exitosa";
        } catch (\Exception $e) {
            echo $e->getMessage();
          }
      }
        
      ?>

    </div>


  </body>
</html>
