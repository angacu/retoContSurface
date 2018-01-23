<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prueba de conexion</title>
  </head>
  <body>

    <?php
    // conexion a la base de datos
    $mysqli = new mysqli("localhost", "root", "", "world");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: " .
        $mysqli->connect_error;
        }else {
          $continent=$_POST["continent"];
          $surfacearea=$_POST["surfacearea"];

          $consulta="SELECT * FROM country WHERE SurfaceArea>$surfacearea AND Continent='".$continent."'" ;
          echo "CONECTADO A LA BBDD <BR><BR>";
          echo "El continente es: ".$_POST["continent"]."<br>";
          echo "El territorio es: ".$_POST["surfacearea"]."<br>";


    // consulta y metodo $_GET
    $consulta = $mysqli->query($consulta);
    foreach ($consulta as $fila) {
      echo "El pais: <br> ".$fila['Name'];
      echo "<br>";
    }
    }
    ?>

  </body>
</html>
