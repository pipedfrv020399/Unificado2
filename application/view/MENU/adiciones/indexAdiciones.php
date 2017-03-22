<div class="content-wrapper">
	<div class="row content">
		<div class="col-md-12">
          <div class="nav-tabs-custom" style="border-top: solid #3B82DF">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#adiciones" data-toggle="tab">Adiciones</a></li>
                           
             
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="adiciones">
                <table class="table table-hover table-bordered" id="myTable">
                        <thead>
                            <tr style="font-size: 15px">
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Tipo</th>
                                <th>Estado</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($adicion as $value): ?>
                            <tr>
                                <td><?= $value['codPlato'] ?></td>
                                <td><?= $value['nombre'] ?></td>
                                <td><?= $value['precioUnitario'] ?></td>
                                <td><?= $value['tipoplatonombre']?></td>
                                <td><?= $value['estado']== 1?"Activo":"Inactivo" ?></td>
                                <td>
                                    <a class="btn bg-info"  data-toggle="modal" data-target="#ver"><span class="glyphicon glyphicon-eye-open"></span></a>

                                    <a class="btn bg-navy" onclick="editarPlato(<?= $value['codPlato'] ?>, <?= $value['tipoPlato'] ?>)" ><span class="glyphicon glyphicon-pencil"></span></a>

                                    <?php if($value["estado"]==1){ ?>
                                    <a href="#" onclick="cambiarEstado(<?= $value['codPlato']?>,0)"  class="btn bg-orange"><span class="glyphicon glyphicon-refresh"></span></a>
                                    <?php }else{ ?>
                                        <a href="#" onclick="cambiarEstado(<?= $value['codPlato']?>,1)"  class="btn bg-orange"><span class="glyphicon glyphicon-refresh"></span></a>
                                    <?php } ?>
                                </td>
                                
                            </tr>
                        <?php endforeach; ?>
                        
                    </tbody>
                        </table>
                        <a href="#crear" style="color: #fff" data-toggle="modal"><button value="Nuevo" class="btn btn-info col-md-offset-11 " style="background: #3B82DF "><span class="glyphicon glyphicon-plus" ></span> Nuevo</button></a><br><br>


              </div>    
            </div>
            
          </div>
</div>
	</div>
</div>
