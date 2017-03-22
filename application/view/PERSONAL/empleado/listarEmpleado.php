 <div class="content-wrapper">
<br>
<div class="row content">

<div class="col-md-12">

<div class="box box-solid " style="border-top: solid #3B82DF">
<!--Listado-->

<table class="table table-bordered  table-responsive">
       <thead class="cabecera">
         <tr  style="font-size: 15px;">
         <th class="text-center">Código</th>
         <th class="text-center">Identificación</th>
         <th class="text-center">Nombre</th>
         <th class="text-center">Apellido</th>
         <th class="text-center">Correo</th>
         <th class="text-center">Turno</th>
         <th class="text-center">Estado</th>
         <th class="text-center">Opciones</th>
         </tr>
         </thead>
         <tbody class="ho">
           <tr  class="">
             <td>456</td>
             <td>984395</td>
             <td>Samu</td>
             <td>González</td>
             <td>Samu@gmail</td>
             <td>Mañana</td>
             <td>Inactivo</td>
             <td class="text-center">
             <a href="#infor" type="" class="btn bg-info"   data-toggle="modal"><span class="glyphicon glyphicon-eye-open"></span></a>
             <a href="#editar" type="" class="btn bg-orange" onclick="ModificarEstado(<?= $value['Codigo'] ?>)" data-toggle="modal"><span class="glyphicon glyphicon-pencil"></span></a>
             <a type="" class="btn bg-navy" href="<?= URL ?>estado/BorrarEstado/<?= $value['Codigo'] ?>"><span  class="glyphicon glyphicon-refresh"></span></a>
             </td>

           </tr>
             
           </tbody>
 </table>



 <a href="#regisC" style="color: #fff" data-toggle="modal"><button value="Cancelar" class="btn btn-info col-md-offset-11 " style="background: #3B82DF "><span class="glyphicon glyphicon-plus" ></span> Nuevo</button></a><br><br>

<!--Modal registro empleados-->
<div class="modal fade" id="regisC" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Registrar mesero</h4>
      </div>
      <div class="modal-body">
          <!--Formulario Empleado-->
     <form>
  
  <div class="panel-body">

               <div class="card-body">
          <div class="row">
  <div class="col-md-6">

          <label for="tipoc" class="control-label  ">Tipo documento:*</label>
                
               <select name="tipo" id="identifi" class="form-control" >
              <option value="Elija" >Elija tipo de documento</opction>
              <option value="cc">Cédula de ciudadanía (CC)</opction>
              <option value="rc">Registro Civil (RC)</opction>
              <option value="ti">Tarjeta de identidad (TI)</opction>
              <option value="ce">Cédula de extranjería</opction>
               <option value="dni">Documento nacional de identidad (DNI)</opction>
               </select>
            <br>
              <label for="nom" class="control-label  ">Nombres:*</label>
              <input type="text"  placeholder="Nombres" id="txtnom" class="form-control">
              <br> 
            <label for="cel" class="control-label  ">Teléfono:</label>
              <input type="text"  placeholder="Celular" id="txtide" class="form-control">
            <br>
            <label for="cor" class="control-label  ">Dirección:*</label>
              <input type="email"  placeholder="Correo" id="txtcor" class="form-control">
            <br>
            <label for="ge" class="control-label  ">Género:*</label>
                
               <select name="tipo" id="identifi" class="form-control" >
              <option value="Elija" >Elija tipo de género</opction>
              <option value="cc">Mujer</opction>
              <option value="rc">Hombre</opction>
               </select>
            
            <br>
             <label for="ge" class="control-label  ">Turno:*</label>

             <select name="tipo" id="identifi" class="form-control" >
              <option value="Elija" >Elija turno</opction>
              <option value="cc">Tarde</opction>
              <option value="rc">Mañana</opction>
               </select>
            
           
              <br>
             <label for="con" class="control-label  ">Contraseña:*</label>
              <input type="password"  placeholder="Contraseña" id="txtcon" class="form-control">
            
            
    
    <div> </div> <div> </div> <div> </div> </div>

    <!-- otra columna-->
    <div class="col-md-6">
    <label for="ide" class="control-label  ">Identificación:*</label>
              <input type="text"  placeholder="Identificación" id="txtide" class="form-control">
 
            <br>
            <label for="ape" class="control-label  ">Apellidos:*</label>
              <input type="text"  placeholder="Apellidos" id="txtape" class="form-control">
            <br>
             <label for="tel" class="control-label  ">Celular:</label>
              <input type="text"  placeholder="Teléfono" id="txttel" class="form-control">
            <br>
             <label for="fec" class="control-label  ">Fecha nacimiento:*</label>
              <input type="date"  placeholder="Fecha" id="txtfec" class="form-control">
            <br>
            <label for="usu" class="control-label  ">Correo:*</label>
              <input type="text"  placeholder="Usuario" id="txtusu" class="form-control">
              
            
             <br>
            <label for="con" class="control-label  ">Usuario:*</label>
              <input type="text"  placeholder="Usuario" id="txtcon" class="form-control">
               <br>
            <label for="con" class="control-label  ">Repita contraseña:*</label>
              <input type="password"  placeholder="Contraseña" id="txtcon" class="form-control">
             
              
               
    <br>
  </div> </div> </div> </div> </form>
  <div class="modal-footer" >
   <button value="registrar" class="btn btn-success col-md-offset-9"  style="background: #3B82DF"  type="button"><span class="glyphicon glyphicon-ok"></span> Registrar</button>
              <button value="Cancelar" class="btn btn-danger " data-dismiss="modal"><span class="glyphicon glyphicon-remove"  ></span> Cancelar</button>
             
        
     </div>
         </div>
      </div>
    </div>
  </div>
</div></div>



 <!--Información de los meseros-->
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
         <tr  class="" style="">
         <th>Tipo </th>
        <th class="text-center">Teléfono</th>
         <th class="text-center">Celular</th>
         <th class="text-center">Dirección</th>
         <th class="text-center">Fecha nacimiento</th>
         <th class="text-center">Género</th>
         <th class="text-center">Usuario</th>
         <th class="text-center">Contraseña</th>
         </tr>
         </thead>
         <tbody class="">
      
           <tr  class="">
             <td>Tarjeta identidad</td>
             <td>5453</td>
             <td>754975894</td>
            <td>Calle gatuna</td>
            <td>09/07/2003</td>
            <td>Felino</td>
             <td>Samulito</td>
             <td>hello</td>
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
 <!--Fin-->  

 </div></div></div>