<?php
	include("INCLUDES/header.php");
?>
<div class="container">

	<form class="form-horizontal" method="post" action="procesar.php">
  <div class="form-group">
    <label for="nombre" class="col-sm-2 control-label">Introduce nombre</label>
    <div class="col-sm-10">
      <input name="nombre"type="text" class="form-control" id="nombre" placeholder="introduce nombre" required>
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Contraseña</label>
    <div class="col-sm-10">
      <input name="password" type="password" class="form-control" id="password" placeholder="introduce contraseña">
    </div>
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
      <button>Enviar</button>
    </div>
  </div>
</form>
</div>


<?php
	include("INCLUDES/footer.php");
?>
		