<?php
session_start();
include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Números</title>
</head>
<body>
    <div class="container">
    <?php
        $query = "SELECT * FROM grupo";
         if ($result = mysqli_query($conexion,$query)) {
            $i = 1;     
         while ($row = $result->fetch_assoc()) {
            

         $nombre_grupo = $row["nombre_grupo"];
         $numero_grupo = $row["numero_grupo"];
         echo "<div " . "id=" . $i . " class=" . "grupo" .">";
         echo $nombre_grupo;
         echo "<form method=post action='index.php'>";
         echo "<input ". 'type="submit" ' .  'value="Listar"' . "id='botonListar". $i. "'" . "name='botonListar'". $i. "/>";
         echo "</form>";
         echo "<form method=post action='index.php'>";
         echo "<input ". 'type="submit" ' .  'value="Agregar"' . "id='botonAgregar". $i. "'" . "name='botonListar'". $i. "/>";
         echo "<p id='valor" . $i . "'" . "hidden" .">" . "hola" . "</p>" ;
         echo "</form>";
         echo "</div>";
         $i++;
         }}
       

?>

 </div> 

 <script src="script.js"></script>
</body>
</html>

