 <div class="content-wrapper">
<br>
<div class="row content">

<div class="col-md-12">
<h1>Listar Producto</h1>
<div class="box box-solid " style="border-top: solid #3B82DF">
<!--Listado-->
	<table class="table table-hover table-bordered" id="myTable">
		<thead>
			<tr style="font-size: 15px">
				<th class="text-center"">Código</th>
				<th class="text-center"">Nombre</th>
				<th class="text-center"">Cantidad</th>
				<th class="text-center"">Precio Unitario</th>
				<th class="text-center" ">Categoria</th>
				<th class="text-center" ">Imagen</th>
				<th class=" text-center"">Estado</th>
				<th class=" text-center">Opciones</th>
			</tr>
		</thead>
		<tbody>
	     <tr>
        <td class="">Código</td>
        <td class="">Nombre</td>
        <td class="">Cantidad</td>
        <td class="">Precio Unitario</td>
        <td class=" ">Categoria</td>
        <td class=" ">Imagen</td>
        <td class=" ">Estado</td> 
        <td class="text-center">
          
           <a href="<?= URL.'producto/actualizar/'.$produc['codigo']?>"  class="btn bg-orange"  data-toggle="modal"><span class="glyphicon glyphicon-pencil"></span></a>
             <a type="" class="btn bg-navy" href="<?= URL.'producto/eliminar/'.$produc['codigo']?>"><span  class="glyphicon glyphicon-refresh"></span></a>
        </td>
       </tr>
		</tbody>
	</table>

   <a href="#registroP" style="color: #fff" data-toggle="modal"><button value="Nuevo" class="btn btn-info col-md-offset-11 " style="background: #3B82DF "><span class="glyphicon glyphicon-plus" ></span> Nuevo</button></a><br><br>
</div>
 </div>
</div>


<div class="modal fade" id="registroP" tabindex="-1" data-target=".bs-example-modal-lg" 
 role="dialog" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Registrar Producto</h4>
      </div>
      <div class="modal-body">
  <form  action="<?= URL ?>producto/crear" method="post">
 
    <label>Nombre</label>
    <input type="text" class="form-control" id="ddlnom" name="ddlnom">
 <br>
 
    <label>Cantidad</label>
    <input type="number" class="form-control" id="ddlcant" name="ddlcant">
 <br>
 
    <label>Precio Unitario</label>
    <input type="number" class="form-control" id="ddlprecioU" name="ddlprecioU">
 <br>
 
    <label>Categoria</label>
    <input type="number" class="form-control" id="ddlCateg" name="ddlCateg">
 <br>
 
    <label>Imagen</label>
    <input type="text" class="form-control" id="ddlimg" name="ddlimg">
</form>

 <br>
 <div class="modal-footer" >
 <button value="registrar" class="btn btn-success col-md-offset-7" style="background: #3B82DF" type="submit"><span class="glyphicon glyphicon-ok"></span> Registrar</button>
  <button type="button" class="btn btn-danger" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
        </div></div>
  </div></div></div></div></div></div></div></div>
   <!--Fin.-->          

 </div></div></div>