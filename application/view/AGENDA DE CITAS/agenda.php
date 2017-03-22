 <div class="content-wrapper">
<br>
<div class="row content">

<div class="col-md-12">

<div class="box box-solid " style="border-top: solid #3B82DF">
<!--Listado-->
  <table class="table table-hover table-bordered">
    <thead>
      <tr style="font-size: 15px">
        <th class="text-center">Código</th>
        <th class="text-center">Tiempo establecido</th>
        <th class="text-center">Hora</th>
        <th class="text-center">Fecha</th>
        <th class="text-center">Cliente</th>
        <th class="text-center">Estado</th>
        <th class=" text-center">Opciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="">1666</td>
        <td class="">50 minutos</td>
        <td class="">12:30 p.m</td>
        <td class="">12/05/2017</td>
        <td class="">Ramiro</td>
        <td class="">Pendiente</td>
        <td class="text-center">
          
       <a href="<?= URL.'baja/actualizar/'.$baj['codigo']?>"  class="btn bg-orange"  data-toggle="modal"><span class="glyphicon glyphicon-pencil"></span></a>
             <a type="" class="btn bg-navy" href="<?= URL.'baja/eliminar/'.$baj['codigo']?>" ><span  class="glyphicon glyphicon-refresh"></span></a>
        </td>
      </tr>
    </tbody>
  </table>
  
  
   <a href="#registroB" style="color: #fff" data-toggle="modal"><button value="Nuevo" class="btn btn-info col-md-offset-11 " style="background: #3B82DF "><span class="glyphicon glyphicon-plus" ></span> Nuevo</button></a><br><br>
</div>
 </div>
</div>

<!--Registro baja-->
<div class="modal fade" id="registroB" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Registrar cita</h4>
      </div>
      <div class="modal-body">
          <!--Formulario Baja-->
  <form  action="<?= URL ?>baja/crear" method="post">
    <label class="">Tiempo establecido</label>
    <input type="text" class="form-control" id="ddlfechSa" name="ddlfechSa">
    <br>
     <label class="">Hora</label>
    <input type="time" class="form-control" id="ddlfechSa" name="ddlfechSa">
    <br>
     <label class="">Fecha</label>
    <input type="date" class="form-control" id="ddlfechSa" name="ddlfechSa">
    <br>
     <label class="">Cliente</label>
    <input type="text" class="form-control" id="ddlfechSa" name="ddlfechSa">
    
 
</form>
 <br>
 <div class="modal-footer" >
 <button value="registrar" class="btn btn-success col-md-offset-2" style="background: #3B82DF" type="submit"><span class="glyphicon glyphicon-ok"></span> Registrar</button>
  <button type="button" class="btn btn-danger" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
        </div></div>
  </div></div></div></div></div></div></div></div>
   <!--Fin.-->          

 </div></div></div>