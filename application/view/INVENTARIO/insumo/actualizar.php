<form class="container" action="<?= URL ?>insumo/editar/<?=$insu['codigo']?>" method="post">
  <div class="well">
  
  <div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" id="ddlnombre" name="ddlnombre" value="<?=$insu['nombre']?>">
  </div>
  <div class="form-group">
    <label>Cantidad</label>
    <input type="text" class="form-control" id="ddlcantidad" name="ddlcantidad" value="<?=$insu['cantidad']?>">
  </div>
  <div class="form-group">
    <label>Codigo Unidad de Medida</label>
    <input type="text" class="form-control" id="ddlcoduni" name="ddlcoduni" value="<?=$insu['codUnidadMedida']?>">
  </div>
  <div class="form-group">
    <label>Stock Minimo</label>
    <input type="text" class="form-control" id="ddlstockmin" name="ddlstockmin" value="<?=$insu['stockMinimo']?>">
  </div>
  <div class="form-group">
    <label>Stock Maximo</label>
    <input type="text" class="form-control" id="ddlstockmax" name="ddlstockmax" value="<?=$insu['stockMaximo']?>">
  </div>
   <div class="form-group">
    <label>Estado</label>
    <input type="text" class="form-control" id="ddlest" name="ddlest" value="<?=$insu['estado']?>">
  </div>

  
  <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>