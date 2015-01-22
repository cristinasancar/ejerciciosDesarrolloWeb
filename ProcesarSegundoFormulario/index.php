<?php
	include("INCLUDES/header.php");
?>
<div class="container">

	<form class="form-horizontal" method="post" action="procesarSaludos.php">
  <div class="form-group">
    <label for="nombre" class="col-sm-2 control-label">Introduce nombre</label>
    <div class="col-sm-10">
      <input name="nombre"type="text" class="form-control" id="nombre" placeholder="introduce nombre" required>
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">E-mail</label>
    <div class="col-sm-10">
      <input name="email" type="email" class="form-control" id="email" placeholder="introduce e-mail">
    </div>
  </div>
   <div class="form-group">
    <label for="poblacion" class="col-sm-2 control-label">Introduce población</label>
    <div class="col-sm-10">
      <input name="poblacion"type="text" class="form-control" id="poblacion" placeholder="introduce ciudad" required>
    </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button class='btn btn-warning' type="submit">Enviar</button>
    </div>
  </div>
</form>
</div>


<?php
	include("INCLUDES/footer.php");
?>
		