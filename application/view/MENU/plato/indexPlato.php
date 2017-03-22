 <div class="content-wrapper">
<div class="row content">
 
<div class="col-md-12">
          <div class="nav-tabs-custom" style="">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#platos" data-toggle="tab">Platos</a></li>
              <li class="config"><a href="#config" data-toggle="tab">Configuraciones</a></li>
              
             
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="platos">
                <table class="table table-hover table-bordered" id="myTable">
                        <thead>
                            <tr style="font-size: 15px">
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Tipo</th>
                                <th>Estado</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($plato as $value): ?>
                            <tr>
                                <td><?= $value['codPlato'] ?></td>
                                <td><?= $value['nombre'] ?></td>
                                <td><?= $value['precioUnitario'] ?></td>
                                <td><?= $value['tipoplatonombre'] ?></td>
                                <td><?= $value['estado']== 1?"Activo":"Inactivo" ?></td>
                                <td>
                                    <a class="btn bg-info" onclick="ver(<?= $value['codPlato'] ?>, <?= $value{'tipoPlato'} ?>)"><span class="glyphicon glyphicon-eye-open"></span></a>

                                    <a class="btn bg-navy" onclick="editarPlato(<?= $value['codPlato'] ?>, <?= $value['tipoPlato'] ?>)" ><span class="glyphicon glyphicon-pencil"></span></a>

                                    <?php if($value["estado"]==1){ ?>
                                    <a href="#" onclick="cambiarEstado(<?= $value['codPlato']?>,0)"  class="btn bg-orange"><span class="glyphicon glyphicon-refresh"></span></a>
                                    <?php }else{ ?>
                                        <a href="#" onclick="cambiarEstado(<?= $value['codPlato']?>,1)"  class="btn bg-orange"><span class="glyphicon glyphicon-refresh"></span></a>
                                    <?php } ?>
                                </td>
                                
                            </tr>
                        <?php endforeach; ?>
                        
                    </tbody>
                        </table>
                        <a href="#crear" style="color: #fff" data-toggle="modal"><button value="Nuevo" class="btn btn-info col-md-offset-11 " style="background: #3B82DF "><span class="glyphicon glyphicon-plus" ></span> Nuevo</button></a><br><br>


              </div>
              <div class="tab-pane" id="config">
                hola
              </div>      
            </div>
            
          </div>
</div>

</div>

</div>

<form action="<?=URL ?>plato/crear" method="POST" enctype="multipart/form-data">
  <div class="modal fade" id="crear" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Registrar plato</h4>
        </div>
        <div class="modal-body">
              <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                  <label for="">Nombre:</label>
                  <input type="text" class="form-control" name="txtNombre" placeholder="Nombre" >
                </div>
                <div class="form-group">
                  <label for="">Precio:</label>
                  <input type="number" class="form-control" name="txtPrecio" placeholder="Precio">
                </div>
                <div class="form-group">
                  <label for="">Imagen:</label>
                  <input type="file" name="Imagen">

                </div>
                <div>
                    <label for="">Tipo Plato:</label>
                </div>
                <div class="form-group">
                  <select class="form-control" name="txtTipoPlato" id="txtTipoPlato">
                    <option>--Tipo de Plato--</option>
                    <?php foreach ($TipoPlato as $value): ?> 
                    <option value="<?= $value["codTipoPlato"] ?>"><?= $value["nombre"] ?></option>                
                    <?php endforeach; ?>
                    
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Descripción:</label>
                  <textarea class="form-control" placeholder="Descripcion" name="txtDescripcion"></textarea>
                </div>
                <div class="form-group">
                  <div class="col-md-3">
                    <label for="">Estado:</label>
                  </div>
                  <div class="col-md-offset-1">
                    <a  class="btn bg-orange" id="BtnEstado" onclick="Estado()">Activo</a>
                  </div>            
                </div>
                  </div>
                  <div class="col-md-3">
                    <div class="box box-solid">
                      <div class="box-header">
                        <div class="box-title">
                          Insumos
                        </div>
                      <div class="box-body">
                      <div class="form-group">
                        <select class="form-control" name="ddlInsumo" id="ddlInsumo" onclick="Unidad(this)">
                          <option>--Insumos--</option>
                          <?php foreach ($insumo as $value): ?> 
                                    <option unidad="<?= $value["nombreUnidad"]?>" value="<?= $value["codInsumo"] ?>"><?= $value["Nombre"] ?></option>                
                          <?php endforeach; ?> 
                        </select>
                      </div>
                        <div class="form-group">
                          <label>Cantidad</label>
                          <input class="form-control" id="ddlCantidad" name="ddlCantidad">
                        </div>
                        <div class="form-group">
                          <label>Unidad de Medida</label>
                          <p name="ddlUnidadMedida" id="ddlUnidadMedida"></p>
                        </div>
                        <div class="form-group">
                          <a class="btn bg-navy" onclick="agregarInsumo()">Agregar</a>
                        </div>
                      </div>
                      </div>
          
                    </div>
                  </div>
                   <div class="col-md-5">
                    <div class="box  box-solid">
                      <div class="box-header">
                        <div class="box-title">
                          Ingredientes
                        </div>
                      </div>
                      <div class="box-body" id="detalle" name="detalle">
                        
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>
 
 <div class="modal-footer" >
 <button class="btn btn-success col-md-offset-2" style="background: #3B82DF" type="submit" onclick="crear()"><span class="glyphicon glyphicon-ok"></span> Registrar</button>
  <button type="button" class="btn btn-danger" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
        </div>
     </div>
    </div>
  </div>
</form>
           

 

  <form action="<?= URL ?>plato/Modificar" method="POST">
      <div class="modal fade" id="edit" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <label class="modal-title">EDITAR</label> 
          <input type="hidden" name="txtCodigoVer" id="txtCodigoVer">

        </div>
        <div class="modal-body">
            <div class="form-group">
                                    <label for="">Nombre:</label>
                  <input type="text" class="form-control" name="txtNombreEdit" id="txtNombreEdit" placeholder="Nombre" >
                </div>
                <div class="form-group">
                  <label for="">Precio:</label>
                  <input type="price" class="form-control" name="txtPrecioEdit" id="txtPrecioEdit" placeholder="Precio">
                </div>
                <div class="form-group">
                  <label for="">Imagen:</label>
                  <input type="file" name="ImagenEdit">

                </div>
                <div>
                    <label for="">Tipo Plato:</label>
                </div>
                <div class="form-group">
                    <select class="form-control" name="txtTipoPlatoEdit" id="txtTipoPlatoEdit">
                        <option>--Tipo de Plato--</option>
                        <?php foreach ($TipoPlato as $value): ?> 
                            <option value="<?= $value["codTipoPlato"] ?>"><?= $value["nombre"] ?></option>                
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Descripción:</label>
                    <textarea class="form-control" placeholder="Descripcion" name="txtDescripcionEdit" id="txtDescripcionEdit"></textarea>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button class="btn bg-orange" onclick="Modificar()">Modificar</button>
        </div>
      </div>
    </div>
  </div>
  </form>

<div class="modal fade" id="ver" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <label>Plato: </label><br><input disabled="true" class="form-control" name="txtCodigoVer" id="txtNombreVer">
        </div>
        <div class="modal-body">
          <table class="table table-hover table-bordered"">
            <thead>
              <tr style="font-size: 15px">
                <th>Precio</th>
                <th>Tipo</th>
                <th>Descripcion</th>               
              </tr>
            </thead>
            <tbody>
              <td><input disabled="true" class="form-control" type="number" name="txtPrecioVer" id="txtPrecioVer"></td>
              <td><input disabled="true" class="form-control" name="txtTipoVer" id="txtTipoVer"></td>
              <td><input disabled="true" class="form-control" name="txtDescripcionVer" id="txtDescripcionVer"></td>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
</div>        
<script type="text/javascript">

    var Estado = function(){
        var estado = document.getElementById("BtnEstado");

        if (estado.className == "btn bg-navy") {
            estado.innerHTML = "Activo";
            estado.className = "btn bg-orange";
            
        }else{
            estado.className = "btn bg-navy";
            estado.innerHTML = "Inactivo";
            estado.value = 0;

        }
    }
</script>
<script type="text/javascript">
  var Unidad = function(elemento){
        var valor = $("#ddlInsumo").val();
        var unidad = $("#ddlInsumo [value='"+valor+"']").attr("unidad");
        $("#ddlUnidadMedida").text(unidad);
    }

     var quitarInsumo = function(elemento){
      var e = $(elemento).parent().parent();
      $(e).remove();
    }

  var agregarInsumo = function(){
    var insumoCd = $("#ddlInsumo").val();
    var nombreInsumo = $("#ddlInsumo [value='"+insumoCd+"']").text();
    var cantidad = $("#ddlCantidad").val();

    var html  = '<div class="row">';
    html += '<div class="col-md-7">';
    html +=         '<p>Nombre: '+nombreInsumo+'</p>';
    html +=         '<p>Cantidad: '+cantidad+'</p>';
    html += '</div>';
    html += '<input type="hidden" name="insumo[]" value="'+insumoCd+'">';
    html += '<input type="hidden" name="cantidad[]" value="'+cantidad+'">';
    html += '<div class="col-md-1">';
    html +=         '<a class="btn bg-red glyphicon glyphicon-remove" onclick="quitarInsumo(this)"></a>';
    html += '</div>';

    $("#detalle").append(html);
  }

  
</script>

