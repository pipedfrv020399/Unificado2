<div class="content-wrapper">
 
    <section class="content-header">

    </section>

   
    <section class="content">

<div class="box box-solid">
	<table class="table table-bordered" id="myTable">
		<thead>
			<tr>
				<th class="col-md-1">Código</th>
				<th class="col-md-1">Nombre</th>
				<th class="col-md-1">Abreviatura</th>
				<th class="col-md-1">Estado</th>
				<th class="col-md-1 text-center">Opciones</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($medidas as $medida): ?>			
			<tr>
				<td class="col-md-1"><?= $medida['codigo'] ?></td>
				<td class="col-md-1"><?= $medida['nombre'] ?></td>
				<td class="col-md-1"><?= $medida['abreviatura'] ?></td>
				<td class="col-md-1"><?= $medida['estado'] ?></td>
				<td class="text-center">
					<a type="button" class="btn bg-navy" href="<?= URL.'unidadMedida/actualizar/'.$medida['codigo']?>">
					<span class="fa fa-pencil"></span></a>
						
					</a> 
					<a type="button"  href="<?= URL.'unidadMedida/eliminar/'.$medida['codigo']?>">
						<i class="fa fa-refresh"></i>
					</a>
				</td>
			</tr>
		<?php endforeach ?>
		</tbody>
	</table>
	<div class="box-footer">
	<div class="text-right">
	<button type="button" class="btn bg-blue" data-toggle="modal" data-target="#registroU">Nuevo</button>
</div>
 </div>
</div>


<div class="modal fade" id="registroU" tabindex="-1" data-target=".bs-example-modal-lg" 
 role="dialog" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Registrar Unidad de medida</h4>
      </div>
      <div class="modal-body">

<form  action="<?= URL ?>unidadMedida/crear" method="post">
  <div class="well">
  <div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" id="txtnom" name="txtnom">
  </div>
  <div class="form-group">
    <label>Abreviatura</label>
    <input type="text" class="form-control" id="txtabrev" name="txtabrev">
  </div>
  <div class="form-group">
    <label>Estado</label>
    <input type="text" class="form-control" id="txtest" name="txtest">
  </div>
  
  <button type="submit" class="btn btn-primary" onclick="crear()">Enviar</button>
  </div>
</form>


 </div>
      </div>
    </div>
  </div>
</div>
 </div>
 </div>

 </section>
 </div>