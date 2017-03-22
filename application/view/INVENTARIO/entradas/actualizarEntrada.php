<form class="container" action="<?= URL ?>entrada/editar/<?=$entr['codigo'] ?>" method="post">
  <div class="well">

  <div class="form-group">
    <label>Fecha de ingreso</label>
    <input type="date" class="form-control" id="ddlfechIn" name="ddlfechIn" value="<?=$entr['fechaIngreso'] ?>">
  </div>
  <div class="form-group">
    <label>Fecha de vencimiento</label>
    <input type="date" class="form-control" id="ddlfechVenc" name="ddlfechVenc" value="<?=$entr['fechaVenc'] ?>">
  </div>
  <div class="form-group">
    <label>Estado</label>
    <input type="text" class="form-control" id="ddlest" name="ddlest" value="<?=$entr['estado'] ?>">
  </div>
  
  <button type="submit" class="btn btn-primary" >Enviar</button>
  </div>
</form>
