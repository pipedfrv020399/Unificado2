<html lang="en">
  <head>

    <div class="container">

        <!-- add song form -->
        <div>
            <h3>Editar usuario</h3>
            <form action="<?php echo URL; ?>usuario/updateUsuario" method="POST">

                <input type="hidden" name="idUsuario" value="idUsuario" />


                <label>Tipo reserva:</label>
                <input type="text" name="txtnom" value="Tipo reserva" />
                <label>Numero de mesas:</label
                <input type="text" name="txtcon" value=">Numero de mesas"  />
                <label>Fecha de la reserva:</label>
                <input type="text" name="txtrol" value="Fecha de la reserva" />
                <label>Numero de Personas:</label>
                <input type="text"  name="txtest" value="Numero de Personas" />
                <label>Hora reserva:</label>
                <input type="text"  name="txtest" value="Hora reserva" />

                <input type="submit" name="update" id="update" value="Update" />
            </form>
        </div>
    </div>


  </body>
</html>
