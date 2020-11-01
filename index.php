<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Directorio Legislativo</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="estilos.css" media="screen" title="no title">
  </head>
  <body>

    <div class="contenedor">
      <h1>Formulario</h1>

        <div class="contenido">

          <form class="" action="respuesta.php" method="post">

            <div class="informacion">

                  <div class="campo">
                      <label for="nombre">Nombre
                          <input type="text" name="nombre" id="nombre">
                      </label>
                  </div>

                  <div class="campo">
                      <label for="apellido">Apellido
                          <input type="text" name="apellido" id="apellido">
                      </label>
                  </div>

                  <div class="campo">
                      <label for="mail">Mail
                          <input type="text" name="mail" id="mail">
                      </label>
                  </div>

                  <div class="campo">
                      <label for="telefono">Telefono
                          <input type="text" name="telefono" id="telefono">
                      </label>
                  </div>

                  <div class="campo">
                      <label for="direccion">Direccion
                          <input type="text" name="direccion" id="direccion">
                      </label>
                  </div>

                  <div class="campo">
                      <label for="pais">Pais
                          <input type="text" name="pais" id="pais">
                      </label>
                  </div>

                  <div class="campo">
                      <label for="votos">Cantidad de votos
                          <input type="text" name="votos" id="votos">
                      </label>
                  </div>
                  
                  <div class="campo">
                      <h5> Partido </h5>
                      <select name="partido" value='-Any-'>
                        <option value= "">--Elegir partido--</option>
                        <option value="rojo">Rojo</option>
                        <option value="azul">Azul</option>
                        <option value="verde">Verde</option>
                      </select>
                  </div>

                  <div class="campo">
                      <h5>Fecha de mandato</h5>
                      <label for="mandato-year">Año (formato yyyy)
                        <input type="text" name="mandato-year" id="mandato-year">
                      </label>
                      <label for="mandato-month">Mes (formato mm)
                        <input type="text" name="mandato-month" id="mandato-month">
                      </label>
                      <label for="mandato-day">Dia (formato dd)
                        <input type="text" name="mandato-day" id="mandato-day">
                      </label>
                      
                      <input type="submit">
                  </div>



          </div> 

          </form>


        </div>

        <div>
            <h2>Ver todos</h2>

            <a href="get.php" role="button">Ver Legisladores</a>

        </div>

        <div>
            <h2>Borrar</h2>
            <a href="delete.php" role="button">Borrar Legisladores</a>
        </div>


    </div>




  </body>
</html>
