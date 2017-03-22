 <div class="content-wrapper">
<br>
<div class="row content">

<div class="col-md-12">

<div class="box box-solid " style="border-top: solid #3B82DF">
<!--Listado-->

<table class="table table-bordered "  table-responsive" id="tabe">
       <thead class="">
         <tr  class="" style="font-size: 15px">
         <th class="text-center">Código</th>
         <th class="text-center">Identificación</th>
         <th class="text-center">Nombre</th>
         <th class="text-center">Apellido</th>
         <th class="text-center">Correo</th>
         <th class="text-center">Estado</th>
         <th class="text-center">Opciones</th>
         </tr>
         </thead>
         <tbody class="">
           <tr  class="">
             <td>567</td>
             <td>2345</td>
             <td>Eliza</td>
            <td>González</td>
             <td>gonzalezmazoeliza@gmail.com</td>
             <td>Activo</td>

             <td class="text-center">
             <a href="#infor" type="" class="btn bg-info"   data-toggle="modal"><span class="glyphicon glyphicon-eye-open"></span></a>
             <a href="#editar" type="" class="btn bg-orange" onclick="ModificarEstado(<?= $value['Codigo'] ?>)" data-toggle="modal"><span class="glyphicon glyphicon-pencil"></span></a>
             <a type="" class="btn bg-navy" href="<?= URL ?>estado/BorrarEstado/<?= $value['Codigo'] ?>"><span  class="glyphicon glyphicon-refresh"></span></a>
             </td>

           </tr>
             
           </tbody>
 </table>

 <a href="#regism" style="color: #fff" data-toggle="modal"><button value="Cancelar" class="btn btn-info col-md-offset-11 " style="background: #3B82DF "><span class="glyphicon glyphicon-plus" ></span> Nuevo</button></a><br><br>
 </div>
 </div>
</div>

<!--Modal registro empleados-->
<div class="modal fade" id="regism" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Registrar cliente</h4>
      </div>
      <div class="modal-body">
          <!--Formulario Empleado-->
     <form action="<?= URL ?>cliente/InsertarCliente" method="POST" accept-charset="utf-8">
  
  <div class="panel-body">

               <div class="card-body">
          <div class="row">
  <div class="col-md-6">

          <label for="tipoc" class="control-label  ">Tipo documento:*</label>
                
               <select name="seltdo" id="seltdo" class="form-control" placeholder="Seleccione" >
               <?php foreach ($TiD as  $value): ?>
               
              <option value="Elija" ><?= $value["Nombre"] ?></opction>
            <?php endforeach; ?>
               </select>
            <br>
              <label for="nom" class="control-label  ">Nombres:*</label>
              <input type="text"  placeholder="Nombres" id="txtnom" name="txtnom" class="form-control">
              <br> 
            <label for="cel" class="control-label  ">Teléfono:</label>
              <input type="text"  placeholder="Teléfono" id="txttel" name="txttel" class="form-control">
            <br>
            <label for="cor" class="control-label  ">Dirección:*</label>
              <input type="text"  placeholder="Dirección" id="txtdir" name="txtdir" class="form-control">
            <br>
            <label for="cor" class="control-label  ">Correo:*</label>
              <input type="email"  placeholder="Correo" id="txtcor" name="txtcor" class="form-control">
              <br>   
            <label for="con" class="control-label  ">Contraseña:*</label>
              <input type="password"  placeholder="Usuario" id="txtcon2" name="txtcon2" class="form-control">
            
            
    
    <div> </div> <div> </div> <div> </div> </div>

    <!-- otra columna-->
    <div class="col-md-6">
    <label for="ide" class="control-label  ">Identificación:*</label>
              <input type="text"  placeholder="Identificación" id="txtide" name="txtide" class="form-control">
 
            <br>
            <label for="ape" class="control-label  ">Apellidos:*</label>
              <input type="text"  placeholder="Apellidos" id="txtape" name="txtape" class="form-control">
            <br>
             <label for="tel" class="control-label  ">Celular:</label>
              <input type="text"  placeholder="Teléfono" id="txtcel" name="txtcel" class="form-control">
            <br>
            <label for="ge" class="control-label  ">Género:*</label>
                
               <select name="tipo" id="selgen" class="form-control" name="selgen" >
              <?php foreach ($Gen as  $value): ?>
               
              <option value="Elija" ><?= $value["Nombre"] ?></opction>
            <?php endforeach; ?>
               </select>
               <br>
            <label for="cor" class="control-label  ">Usuario:*</label>
              <input type="text"  placeholder="Usuario" id="txtcor" name="txtusu" class="form-control">
                <br>

            <label for="con" class="control-label  ">Repita contraseña:*</label>
              <input type="password"  placeholder="Contraseña" id="txtcon" name="txtcon" class="form-control"><br>
  </div> </div> </div> 
             
</form><br>
<div class="modal-footer" >
      <button value="registrar" class="btn btn-success col-md-offset-9"  style="background: #3B82DF"   type="submit"><span class="glyphicon glyphicon-ok"></span> Registrar</button>
              <button value="Cancelar" class="btn btn-danger " data-dismiss="modal"><span class="glyphicon glyphicon-remove"  ></span> Cancelar</button>
         </div></div>
      </div>
    </div>
  </div>
</div></div>




 <!--Información de los clientes-->
  <div class="modal fade" id="infor" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog modal-lg " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Otra información</h4>
      </div>
      <div class="modal-body">
          <!--Tabla infomacion-->
            <table class="table table-bordered  table-hover table-responsive">
       <thead class="">
         <tr  class="" style="font-size: 15px">
         <th class="text-center">Tipo</th>
        <th class="text-center">Teléfono</th>
         <th class="text-center">Celular</th>
         <th class="text-center">Dirección</th>
         <th class="text-center">Género</th>
         <th class="text-center">Tipo cliente</th>
         <th class="text-center">Usuario</th>
         <th class="text-center">Contraseña</th>
         </tr>
         </thead>
         <tbody class="">
          
           <tr  class="text-center">
             <td>Cédula ciudadanía</td>
             <td>3435</td>
             <td>483785793</td>
            <td>Cr77 #45-44</td>
            <td>Fenemino</td>
             <td>VIP</td>
             <td>Eli22</td>
             <td>roots</td>
           </tr>

           </tbody>
 </table>
     </div>
     </div>
         </div>
      </div>
    </div>
  </div>
</div>
   
   <script type="text/javascript">
   var options = {
  valueNames: [ 'IDENTIFICACIÓN', 'NOMBRE' ]
};

var userList = new List('users', options);
</script>

 </section>
 </div>