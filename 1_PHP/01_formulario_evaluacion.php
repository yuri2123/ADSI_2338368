<!DOCTYPE html>
<html>
<head>
  <title>Prueba de formulario</title>
  <meta charset="UTF-8">
</head>
<body>
<form action="_evaluacion.php" method="post">
<label>Nombres: </label>
<input type="text" name="Nombres"><br>
<label for="tentacles">valor de apuesta [1-20]:</label>
<input type="number" id="valor de apuesta" name="valor de apuesta"
       min="1" max="20">

<br> 
<label>escoja un color: </label>
  <input type="text" name="escoja un color">
  
  <select name="colores[]" size="4" multiple>
  <option value="1">Rojo</option> 
    <option value="2">Negro</option>
    <option value="3">Azul</option>
  </select>
  <br>
  <input type="submit" value="jugar"> 
</form>
</body>
</html>

<?php 
echo "la suma de los pares es: " . $suma+$i;