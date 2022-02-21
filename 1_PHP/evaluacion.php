<!DOCTYPE html>
<html>
<head>
  <title>Prueba de formulario</title>
  <meta charset="UTF-8">
</head>
<body>
<form action="registrardatos.php" method="post">
  Seleccione uno o varios colores (Presione Ctrl para seleccionar varios colores)<br>
  <select name="colores[]" size="4" multiple>
    <option value="1">Rojo</option>
    <option value="2">negro</option>
    <option value="3">Azul</option>
  </select>
  <br>
  <input type="submit" value="jugar">
</form>
</body>
</html>
