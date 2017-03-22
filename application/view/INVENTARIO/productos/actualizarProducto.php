<form class="container" action="<?= URL ?>producto/editar/<?=$produc['codigo'] ?>" method="post">
  <div class="well">
  <div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" id="ddlnom" name="ddlnom" value="<?=$produc['nombre'] ?>">
  </div>
  <div class="form-group">
    <label>Cantidad</label>
    <input type="number" class="form-control" id="ddlcant" name="ddlcant" value="<?=$produc['cantidad'] ?>">
  </div>
  <div class="form-group">
    <label>Precio Unitario</label>
    <input type="number" class="form-control" id="ddlprecioU" name="ddlprecioU" value="<?=$produc['precioUnitario'] ?>">
  </div>
  <div class="form-group">
    <label>Categoria</label>
    <input type="number" class="form-control" id="ddlCateg" name="ddlCateg" value="<?=$produc['categoria'] ?>">
  </div>
  <div class="form-group">
    <label>Imagen</label>
    <input type="text" class="form-control" id="ddlimg" name="ddlimg" value="<?=$produc['imagen'] ?>">
  </div>
  <div class="form-group">
    <label>Estado</label>
    <input type="text" class="form-control" id="ddlest" name="ddlest" value="<?=$produc['estado'] ?>">
  </div>
  
  <button type="submit" class="btn btn-primary" >Enviar</button>
  </div>
</form>
