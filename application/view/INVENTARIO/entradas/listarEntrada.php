 <div class="content-wrapper">
<br>
<div class="row content">

<div class="col-md-12">
<h1>Listar Entrada</h1>
<div class="box box-solid " style="border-top: solid #3B82DF">
<!--Listado-->
	<table class="table table-hover table-bordered" id="myTable">
		<thead>
			<tr style="font-size: 15px">
				<th class="text-center"">Código</th>
				<th class="text-center"">Fecha Ingreso</th>
				<th class="text-center"">Fecha Vencimiento</th>
				<th class="text-center"">Estado</th>
				<th class="text-center">Opciones</th>
			</tr>
		</thead>
		<tbody>
		<tr>
				<td class="">1</td>
				<td class="">12/09/2000</td>
				<td class="">15/09/2000</td>
				<td class="">Activo</td>
				<td class="text-center">	
					<a href="<?= URL.'baja/actualizar/'.$baj['codigo']?>"  class="btn bg-orange"  data-toggle="modal"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a type="" class="btn bg-navy" href= "<?= URL.'baja/eliminar/'.$baj['codigo']?>" ><span  class="glyphicon glyphicon-refresh"></span></a>
				</td>
			</tr> 
		</tbody>
	</table>
	
	<a href="#registroE" style="color: #fff" data-toggle="modal"><button value="Nuevo" class="btn btn-info col-md-offset-11 " style="background: #3B82DF "><span class="glyphicon glyphicon-plus" ></span> Nuevo</button></a><br><br>
</div>
 </div>
</div>

<!--Registro entradas-->
<div class="modal fade" id="registroE" tabindex="-1" data-target=".bs-example-modal-lg" 
 role="dialog" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Registrar Entrada</h4>
      </div>
      <div class="modal-body">

   <form  action="<?= URL ?>entrada/crear" method="post">
    
    <label>Fecha de ingreso</label>
    <input type="date" class="form-control" id="ddlfechIn" name="ddlfechIn"><br>
    <label>Fecha de vencimiento</label>
    <input type="date" class="form-control" id="ddlfechVenc" name="ddlfechVenc"><br>
    
</form>
 <br>
 <div class="modal-footer" >
 <button value="registrar" onclick="crear()" class="btn btn-success col-md-offset-2" style="background: #3B82DF" type="submit"><span class="glyphicon glyphicon-ok"></span> Registrar</button>
  <button type="button" class="btn btn-danger" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
        </div></div>
  </div></div></div></div></div></div></div></div>
   <!--Fin.-->  

 </div>
      </div>
    </div>
  </div>
</div>
 </div>
 </div>

 </section>
 </div>