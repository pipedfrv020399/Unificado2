<html lang="en">
  <head>
    
    <div class="container">

        <!-- add song form -->
        <div>
            <h3>Editar usuario</h3>
            <form action="<?php echo URL; ?>usuario/updateUsuario" method="POST">

                <input type="hidden" name="idUsuario" value="idUsuario" />


                <label>Nombre:</label>
                <input type="text" name="txtnom" value="nombre" />
                <label>contraseña:</label
                <input type="text" name="txtcon" value="contraseña"  />
                <label>Rol:</label>
                <input type="text" name="txtrol" value="rol" />
                <label>Estado:</label>
                <input type="text"  name="txtest" value="estado" />

                <input type="submit" name="update" id="update" value="Update" />
            </form>
        </div>
    </div>


  </body>
</html>
