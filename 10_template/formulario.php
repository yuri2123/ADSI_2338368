<?php

require_once("plantilla/plantilla_formulario.php");

?>
<div class="formulario">
<form action="" method="">
    <div class="mb-3">
        <label>Nombres completos</label>
        <input type="text" class="form-control" neme="nombre" aria-describedby="emailHelp">
    </div> 
    <div class="mb-3">
        <label>Email</label>
        <input type="email" class="form-control" neme="email" placeholder="Email..." aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label>password</label>
        <input type="text" class="form-control" neme="password" aria-describedby="emailHelp">
    </div> 
    <div class="mb-3">
        <label>Digite su password de nuevo</label>
        <input type="text" class="form-control" neme="password" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
</form>
</div>