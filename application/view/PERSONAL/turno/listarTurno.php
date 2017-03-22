 <div class="content-wrapper">
<br>
<div class="row content">

<div class="col-md-12">

<div class="box box-solid " style="border-top: solid #3B82DF">
<!--Listado-->

<table class="table table-bordered  table-hover table-responsive">
       <thead class="">
         <tr  class="" style="font-size: 15px;">
         <th class="text-center">Código</th>
         <th class="text-center">Nombre</th>
        <th class="text-center">Fecha inicio</th>
          <th class="text-center">Fecha final</th>
          <th class="text-center">Descripcion</th>
          <th class="text-center">Estado</th>
          <th class="text-center">Opciones</th>
         </tr>
         </thead>
         <tbody class="">
           <tr  class="">
             <td>6564</td>
             <td>Mañana</td>
             <td>12/07/2017</td>
              <td>20/07/2017</td>
              <td>Comer pescado</td>
              <td>Activo</td>
             <td class="text-center">
             <a type="" class="btn bg-orange" href="<?= URL ?>turno/edit/<?= $value['Codigo'] ?>"><span class="glyphicon glyphicon-pencil"></span></a>
             <a type="" class="btn bg-navy" href="<?= URL ?>estado/BorrarEstado/<?= $value['Codigo'] ?>"><span  class="glyphicon glyphicon-refresh"></span></a>
             
             </td>

           </tr>
             
           </tbody>
 </table>
   <a href="#regisT" style="color: #fff" data-toggle="modal"><button value="Cancelar" class="btn btn-info col-md-offset-11 " style="background: #3B82DF "><span class="glyphicon glyphicon-plus" ></span> Nuevo</button></a><br><br>

 </div>

        <!--Registro de los turnos-->
      

       <div class="modal fade" id="regisT" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Registrar Estado</h4>
      </div>
      <div class="modal-body">
          <!--Formulario Empleado-->
       <form action="<?= URL ?>turno/InsertarTurno" method="POST" accept-charset="utf-8">
                    <label for="fec" class="control-label  ">Nombre:</label>
              <input type="text"  placeholder="Nombre" id="txtnom" name="txtnom" class="form-control " ><br>
              <label for="fec" class="control-label  ">Fecha inicio:</label>
              <input type="date"  placeholder="Nombre" id="txtini" name="txtini" class="form-control "  ><br>
              <label for="fec" class="control-label  ">Fecha final:</label>
              <input type="date"  placeholder="Nombre" id="txtfin" name="txtfin" class="form-control "  >
              <br>
              <label for="des" class="control-label  ">Descripción:</label>
             
              <textarea cols="30" rows="10" class="form-control" id="txtdes" name="txtdes" style=" height: 60px"></textarea>
    
               <br><br>
               </form>
                <div class="modal-footer" >
  <button value="registrar" class="btn btn-success col-md-offset-2"  style="background: #3B82DF " type="submit"><span class="glyphicon glyphicon-ok"></span> Registrar</button>
             <button type="button" class="btn btn-danger" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
        </div></div>
  </div></div></div></div></div></div></div></div>
      <!--Fin-->

</div></div></div>