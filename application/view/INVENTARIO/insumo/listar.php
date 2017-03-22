 <div class="content-wrapper">
<br>
<div class="row content">

<div class="col-md-12">
<h1>Listar Insumo</h1>
<div class="box box-solid " style="border-top: solid #3B82DF">
<!--Listado-->
	<table class="table table-bordered table-hover table-responsive" id="myTable">
      <thead>
			<tr style= "font-size: 15px">
				<th class="text-center">Codigo</th>
				<th class="text-center">Nombre</th>
				<th class="text-center">Cantidad</th>
				<th class="text-center">Medida</th>
				<th class="text-center">Stock Min</th>
				<th class="text-center">Stock Max</th>
		      <th class="text-center">Estado</th>
				<th class=" text-center">Opciones</th>
			</tr>

		</thead>
         <tbody>
	         <tr>
      <td class="">Codigo</td>
        <td class="">Nombre</td>
        <td class="">Cantidad</td>
        <td class="">codUnidad</td>
        <td class="">StockMin</td>
        <td class="">StockMax</td>
        <td class="">estado</td>
            <td class="text-center">

          <a href="<?= URL.'insumo/actualizar/'.$insumo['codigo']?>"  class="btn bg-orange"  data-toggle="modal"><span class="glyphicon glyphicon-pencil"></span></a>
          <a type="" class="btn bg-navy" href="<?= URL.'insumo/eliminar/'.$insumo['codigo']?>" ><span  class="glyphicon glyphicon-refresh"></span></a>   
           </td>
      </tr>
		</tbody>
 </table>

   <a href="#registro" style="color: #fff" data-toggle="modal"><button value="Nuevo" class="btn btn-info col-md-offset-11 " style="background: #3B82DF "><span class="glyphicon glyphicon-plus" ></span> Nuevo</button></a><br><br>
	</div>
 </div>
</div>

	
<!--Registro insumos-->
<div class="modal fade" id="registro" tabindex="-1" data-target=".bs-example-modal-lg" 
 role="dialog" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Registrar Insumo</h4>
      </div>
      <div class="modal-body">

    <form  action="<?= URL ?>insumo/crear" method="post">
    <label>Nombre</label>
    <input type="text" class="form-control" id="ddlnombre" name="ddlnombre">
  <br>
    <label>Cantidad</label>
    <input type="number" class="form-control" id="ddlcantidad" name="ddlcantidad">
  <br>
    <label>Unidad de Medida</label>
    <input type="text" class="form-control" id="ddlcoduni" name="ddlcoduni">
  <br>
    <label>Stock Mínimo</label>
    <input type="number" class="form-control" id="ddlstockmin" name="ddlstockmin">
  <br>
    <label>Stock Máximo</label>
    <input type="number" class="form-control" id="ddlstockmax" name="ddlstockmax">
 
</form>
<br>
<div class="modal-footer" >
 <button value="registrar" class="btn btn-success col-md-offset-7" style="background: #3B82DF" type="submit"><span class="glyphicon glyphicon-ok"></span> Registrar</button>
  <button type="button" class="btn btn-danger" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
        </div></div>
  </div></div></div></div></div></div></div></div>
   <!--Fin.-->          

</div></div></div>