<?php
require_once("../../template/plantillaFormulario.php");
?>
<div class="formulario">
<center>
    <h3>Formulario Login</h3>
</center>
<form action="../controlador/login.php" method="POST" >
    <div class="mb-3">
        <label>Email</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" class="form-control" name="password" aria-describedby="emailHelp">
    </div>
   
    <button type="submit" name="btn_enviar" class="btn btn-primary">Ingresar</button>
</form>
</div>