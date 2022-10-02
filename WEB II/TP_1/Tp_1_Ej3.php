<?php
if (!empty($_POST)){
$nombre = $_POST["nombre"];
$ciudad = $_POST["ciudad"];
echo("Nombre:". $nombre);
echo("<br>");
echo("<br>");
echo("Ciudad:". $ciudad);
echo("<br>");
echo("<br>");
}

?>

<form class="row g-3 needs-validation" method="POST" action="Tp_1_Ej3.php" novalidate> 
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="validationCustom01" value="" required name="nombre">
          <div class="valid-feedback">
          Por favor ingrese un nombre.
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom03" class="form-label">Ciudad</label>
          <input type="text" class="form-control" id="validationCustom03" required name="ciudad">
          <div class="invalid-feedback">
            Por favor ingrese una ciudad valida.
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">envio de formulario</button>
        </div>
      </form>

      <a href="Tp_1_Ej3.php">Volver</a>