<form class="container" action="<?= URL ?>unidadMedida/editar/<?=$uni['codigo']?>" method="post">
  <div class="well">
  <div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" id="txtnom" name="txtnom" value="<?=$uni['nombre']?>">
  </div>
  <div class="form-group">
    <label>Abreviatura</label>
    <input type="text" class="form-control" id="txtabrev" name="txtabrev" value="<?=$uni['abreviatura']?>">
  </div>
  <div class="form-group">
    <label>Estado</label>
    <input type="text" class="form-control" id="txtest" name="txtest" value="<?=$uni['estado']?>">
  </div>
  
  <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>
