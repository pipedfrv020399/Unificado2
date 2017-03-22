 <div class="content-wrapper">
<br>
<div class="row content">

<div class="col-md-12">

<!--Listado-->
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom" style="border-top: solid #3B82DF">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Categorias</a></li>
              <li><a href="#tab_2" data-toggle="tab">Unidades medida</a></li>
              <li><a href="#tab_3" data-toggle="tab">Estados</a></li>
              <li><a href="#tab_4" data-toggle="tab">Géneros</a></li>
              <li><a href="#tab_5" data-toggle="tab">Tipo documento</a></li>
              <li><a href="#tab_6" data-toggle="tab">Tipo cliente</a></li>
              <li><a href="#tab_7" data-toggle="tab">Roles</a></li>
            </ul>

            <div class="tab-content">

            <!--Tab categoria-->
              <div class="tab-pane active" id="tab_1">
             <table class="table  table-hover table-bordered table-responsive">
       <thead class="">
         <tr  class="" style="font-size: 15px">
         <th class="text-center">Código</th>
         <th class="text-center">Nombre</th>
         <th class="text-center">Opciones</th>
         </tr>
         </thead>
         <tbody class="">
           <tr  >
            <td >Código</td>
         <td>Nombre</td>
             <td class="text-center">
             <a href="#editar" type="" class="btn bg-orange" onclick="ModificarEstado(<?= $value['Codigo'] ?>)" data-toggle="modal"><span class="glyphicon glyphicon-pencil"></span></a>
             </td>
           </tr>
             
           </tbody>
 </table>
 <a href="#regisE" style="color: #fff" data-toggle="modal"><button value="Nuevo" class="btn btn-info col-md-offset-11 " style="background: #3B82DF "><span class="glyphicon glyphicon-plus" ></span> Nuevo</button></a><br><br>


               
              </div>

              <!--Tab unidades-->
              <div class="tab-pane " id="tab_2">
             <table class="table  table-hover table-bordered table-responsive">
       <thead class="">
         <tr  class="" style="font-size: 15px">
         <th class="text-center">Código</th>
         <th class="text-center">Nombre</th>
         <th class="text-center">Opciones</th>
         </tr>
         </thead>
         <tbody class="">
           <tr  >
            <td >Código</td>
         <td>Nombre</td>
             <td class="text-center">
             <a href="#editar" type="" class="btn bg-orange" onclick="ModificarEstado(<?= $value['Codigo'] ?>)" data-toggle="modal"><span class="glyphicon glyphicon-pencil"></span></a>
             </td>
           </tr>
             
           </tbody>
 </table>
 <a href="#regisE" style="color: #fff" data-toggle="modal"><button value="Nuevo" class="btn btn-info col-md-offset-11 " style="background: #3B82DF "><span class="glyphicon glyphicon-plus" ></span> Nuevo</button></a><br><br>


               
              </div>
            <!--Tab estados-->
              <div class="tab-pane " id="tab_3">
             <table class="table  table-hover table-bordered table-responsive">
       <thead class="">
         <tr  class="" style="font-size: 15px">
         <th class="text-center">Código</th>
         <th class="text-center">Nombre</th>
         <th class="text-center">Color</th>
         <th class="text-center">Opciones</th>
         </tr>
         </thead>
         <tbody class="">
           <tr  >
            <td >Código</td>
         <td>Nombre</td>
         <td>Color</td>
             <td class="text-center">
             <a href="#editar" type="" class="btn bg-orange" onclick="ModificarEstado(<?= $value['Codigo'] ?>)" data-toggle="modal"><span class="glyphicon glyphicon-pencil"></span></a>
             </td>
           </tr>
             
           </tbody>
 </table>
 <a href="#regisE" style="color: #fff" data-toggle="modal"><button value="Nuevo" class="btn btn-info col-md-offset-11 " style="background: #3B82DF "><span class="glyphicon glyphicon-plus" ></span> Nuevo</button></a><br><br>


               
              </div>
              <!--Tab géneros-->
              <div class="tab-pane" id="tab_4">
               <table class="table tablita  table-bordered table-hover table-responsive" >
       <thead class="cabecera">
         <tr  class="" style="font-size: 15px">
         <th class="text-center">Código</th>
         <th class="text-center">Nombre</th>
         <th class="text-center">Opciones</th>
         </tr>
         </thead>
         <tbody class="">
          <tr  >
            <td >Código</td>
         <td>Nombre</td>
             <td class="text-center">
             <a type="" class="btn bg-orange" href="<?= URL ?>genero/edit/<?= $value['Codigo'] ?>"><span class="glyphicon glyphicon-pencil"></span></a>
             </td>

           </tr>
           </tbody>
 </table>
 <a href="#regisG" style="color: #fff" data-toggle="modal"><button value="Nuevo" class="btn btn-info col-md-offset-11 " style="background: #3B82DF "><span class="glyphicon glyphicon-plus" ></span> Nuevo</button></a><br><br>

              </div>

              <!--Tab tipos documentos-->             
               <div class="tab-pane" id="tab_5">
                <table class="table table-bordered tablita table-responsive">
       <thead class="cabecera">
         <tr  class="" style="font-size: 15px">
         <th class="text-center">Código</th>
         <th class="text-center">Nombre</th>
         <th class="text-center">Opciones</th>
         </tr>
         </thead>
         <tbody class="ho">
          <tr  >
            <td >Código</td>
         <td>Nombre</td>
             <td class="text-center">
             <a type="" class="btn bg-orange" href="<?= URL ?>tdocumento/edit/<?= $value['Codigo'] ?>"><span class="glyphicon glyphicon-pencil"></span></a>
             </td>
           </tr>
           </tbody>
 </table>
  <a href="#regisD" style="color: #fff" data-toggle="modal"><button value="Nuevo" class="btn btn-info col-md-offset-11 " style="background: #3B82DF "><span class="glyphicon glyphicon-plus" ></span> Nuevo</button></a><br><br>
              </div>

          <!--Tab tipos clientes-->
                <div class="tab-pane" id="tab_6">
                <table class="table table-bordered  table-responsive">
       <thead class="">
         <tr  class="" style="font-size: 15px">
         <th class="text-center">Código</th>
         <th class="text-center">Nombre</th>
         <th class="text-center">Opciones</th>
         </tr>
         </thead>
         <tbody class="">
          <tr  >
            <td >Código</td>
         <td>Nombre</td>
             <td class="text-center">
             <a type="" class="btn bg-orange" href="<?= URL ?>tcliente/edit/<?= $value['Codigo'] ?>"><span class="glyphicon glyphicon-pencil"></span></a>
             </td>

           </tr>
             
           </tbody>
 </table>
  <a href="#regisTC" style="color: #fff" data-toggle="modal"><button value="Nuevo" class="btn btn-info col-md-offset-11 " style="background: #3B82DF "><span class="glyphicon glyphicon-plus" ></span> Nuevo</button></a><br><br>
               
              </div>

              <!--Tab roles-->
              <div class="tab-pane" id="tab_7">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>


<!--Registro de los estados-->
        <div class="modal fade" id="regisE" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Registrar Estado</h4>
      </div>
      <div class="modal-body">
          <!--Formulario Empleado-->
      <form action="<?= URL ?>estado/InsertarEstado" method="POST" accept-charset="utf-8">
                    <label for="fec" class="control-label texto ">Nombre:</label>
              <input type="text"  placeholder="Nombre" id="txtnom" name="txtnom" class="form-control cajon"  >
            <br>
              <label for="con" class="control-label texto ">Color:</label>
              <input type="text"  placeholder="Color" id="txtcol" name="txtcol" class="form-control" ><br><br>
               <div class="modal-footer" >
                <button value="registrar" class="btn btn-success col-md-offset-2"  style="background: #3B82DF"  type="submit"><span class="glyphicon glyphicon-ok"></span> Registrar</button>
              <button value="Cancelar" class="btn btn-danger " data-dismiss="modal"><span class="glyphicon glyphicon-remove"  ></span> Cancelar</button></div></div></form>
  </div></div></div></div></div></div></div></div>

<!--Registro de los géneros-->
<div class="modal fade" id="regisG" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Registrar Género</h4>
      </div>
      <div class="modal-body">
          <!--Formulario Géneros-->
      <form action="<?= URL ?>genero/InsertarGenero" method="POST" accept-charset="utf-8">
                    <label for="fec" class="control-label texto ">Nombre:</label>
              <input type="text"  placeholder="Nombre" id="txtnom" name="txtnom" class="form-control cajon"  >
              <br>
               <br>
   <div class="modal-footer" >
    <button value="registrar" class="btn btn-success col-md-offset-2" type="submit" style="background: #3B82DF"  type="submit"><span class="glyphicon glyphicon-ok" ></span> Registrar</button>
              <button value="Cancelar" class="btn btn-danger " data-dismiss="modal"><span class="glyphicon glyphicon-remove"  ></span> Cancelar</button>
      </div></form>
  </div></div></div></div></div> </div></div></div></div>

  <!--Registro de los tipos de documentos-->
<div class="modal fade" id="regisD" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Registrar tipo documento</h4>
      </div>
      <div class="modal-body">
          <!--Formulario tipo documentos-->
       <form action="<?= URL ?>tipoDocumento/InsertarTDocumento" method="POST" accept-charset="utf-8">
                    <label for="fec" class="control-label texto ">Nombre:</label>
              <input type="text"  placeholder="Nombre" id="txtnom" name="txtnom" class="form-control cajon" >
              <br>
               <br>
                <div class="modal-footer" >
  <button value="registrar" class="btn btn-success col-md-offset-2" type="submit" style="background: #3B82DF"  type="submit"><span class="glyphicon glyphicon-ok"></span> Registrar</button>
             <button type="button" class="btn btn-danger" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
     </div>        
</form>
  </div></div></div></div></div> </div></div></div></div>

  <!--Registro de los tipos de clientes-->
<div class="modal fade" id="regisTC" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Registrar tipo cliente</h4>
      </div>
      <div class="modal-body">
          <!--Formulario tipo clientes-->
       <form action="<?= URL ?>tipoCliente/InsertarTCliente" method="POST" accept-charset="utf-8">
                    <label for="fec" class="control-label texto ">Nombre:</label>
              <input type="text"  placeholder="Nombre" id="txtnom" name="txtnom" class="form-control cajon">
              <br>
               <br>
                <div class="modal-footer" >
  <button value="registrar" class="btn btn-success col-md-offset-2" type="submit" style="background: #3B82DF"  type="submit"><span class="glyphicon glyphicon-ok"></span> Registrar</button>
             <button type="button" class="btn btn-danger" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
             
</div></form>
  </div></div></div></div></div> </div></div></div></div>








 </section>
 </div>