<form class="container" action="<?= URL ?>baja/editar/<?=$baj['codigo']?>" method="post">
  <div class="well">
  <div class="form-group">
    <label>Fecha de Salida</label>
    <input type="date" class="form-control" id="ddlfechSa" name="ddlfechSa" value="<?=$baj['fechaSalida'] ?>">
  </div>
  <div class="form-group">
    <label>Descripcion</label>
    <input type="text" class="form-control" id="ddldesc" name="ddldesc" value="<?=$baj['descripcion'] ?>">
  </div>
  <div class="form-group">
    <label>Estado</label>
    <input type="text" class="form-control" id="ddlest" name="ddlest" value="<?=$baj['estado'] ?>">
  </div>
  
  <button type="submit" class="btn btn-primary" >Enviar</button>
  </div>
</form>
