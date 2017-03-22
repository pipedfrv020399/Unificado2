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
         <th class="text-center">Fecha</th>
         <th class="text-center">Cliente</th>
         <th class="text-center">Mesero</th>
         <th class="text-center">Personas</th>
          <th class="text-center">%</th>
         <th class="text-center">$</th>
         <th class="text-center">Estado</th>
         <th class="text-center">Opciones</th>
         </tr>
         </thead>
         <tbody class="">
           <tr  class="">
             <td>5567</td>
             <td>23/04/2009</td>
             <td>Eliza</td>
            <td>Luisa</td>
             <td>8</td>
             <td>15%</td>
             <td>120000</td>
             <td>Enviado</td>

             <td class="text-center">
             <a href="#infor" type="" class="btn bg-info"   data-toggle="modal"><span class="glyphicon glyphicon-eye-open"></span></a>
             <a href="#editar" type="" class="btn bg-orange" onclick="ModificarEstado(<?= $value['Codigo'] ?>)" data-toggle="modal"><span class="glyphicon glyphicon-pencil"></span></a>
             <a type="" class="btn bg-navy" href="<?= URL ?>estado/BorrarEstado/<?= $value['Codigo'] ?>"><span  class="glyphicon glyphicon-refresh"></span></a>
             </td>

           </tr>
            <tr  class="">
             <td>5567</td>
             <td>23/04/2009</td>
             <td>Eliza</td>
            <td>Luisa</td>
             <td>8</td>
             <td>15%</td>
             <td>120000</td>
             <td>Enviado</td>

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
        <h4 class="modal-title" id="exampleModalLabel">Registrar pedido</h4>
      </div>
      <div class="modal-body">
           <!--Formulario Empleado-->
     <form action="<?= URL ?>cliente/InsertarCliente" method="POST" accept-charset="utf-8">
  
  <div class="panel-body">

               <div class="card-body">
          <div class="row">
  <div class="col-md-5">
        <div class="form-group">
                 <div class="col-md-10" style="margin-left: -10px">
       <select name="tipo" id="identifi" class="form-control" style="" >
              <option value="Elija" >Buscar producto</opction>
              <option value="cc">Gaseosa</opction>
               </select>
               </div>
                
                <div class="col-md-2">
              <button type="text" class="btn btn-info boton" style="background: #3B82DF"><span class="glyphicon glyphicon-plus"></span></button>
            </div></div><br>
            <br>
            <table class="table table-bordered table-responsive table-hover">
            <thead>
             
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="col-xs-6 col-md-4" style="width: 155px; height: 120px;">
    <a href="#" class="thumbnail">
      <img src="img/demo-image.png" alt="..." style="width: 155px; height: 110px;">
    </a>
  </div>
                </td>
                <td>
                  <div class="col-xs-6 col-md-4" style="width: 155px; height: 120px;">
    <a href="#" class="thumbnail">
      <img src="img/demo-image.png" alt="..." style="width: 155px; height: 110px;">
    </a>
  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="col-xs-6 col-md-4" style="width: 155px; height: 120px;">
    <a href="#" class="thumbnail">
      <img src="img/demo-image.png" alt="..." style="width: 155px; height: 110px;">
    </a>
  </div>
                </td>
                <td>
                  <div class="col-xs-6 col-md-4" style="width: 155px; height: 120px;">
    <a href="#" class="thumbnail">
      <img src="img/demo-image.png" alt="..." style="width: 155px; height: 110px;">
    </a>
  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="col-xs-6 col-md-4" style="width: 155px; height: 120px;">
    <a href="#" class="thumbnail">
      <img src="img/demo-image.png" alt="..." style="width: 155px; height: 110px;">
    </a>
  </div>
                </td>
                <td>
                  <div class="col-xs-6 col-md-4" style="width: 155px; height: 120px;">
    <a href="#" class="thumbnail">
      <img src="img/demo-image.png" alt="..." style="width: 155px; height: 110px;">
    </a>
  </div>
                </td>
              </tr>
            </tbody></table>
  
 
  
  

            
    
    <div> </div> <div> </div> <div> </div> </div>

    <!-- otra columna-->
    <div class="col-md-6">
    <br>
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
         <th class="text-center">Código</th>
        <th class="text-center">Nombre</th>
         <th class="text-center">Precio unitario</th>
         <th class="text-center">Cantidad</th>
         <th class="text-center">Valor</th>
        
         </tr>
         </thead>
         <tbody class="">
          
           <tr  class="text-center">
             <td>565645</td>
             <td>Pollo</td>
             <td>12000</td>
            <td>2</td>
            <td>24000</td>
             
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