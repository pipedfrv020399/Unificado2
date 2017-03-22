<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>login</title>


      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <link rel="stylesheet" type="text/css" href="<?= URL ?>/assets/css/style2.css">
      <link rel="stylesheet" href="<?= URL ?>asset/css/style2.css">


</head>

<body>
  <div class="wrapper">
	<div class="container">
		<h1>Bienvenido</h1>
<form action="<?php echo URL; ?>usuario/logueo" method="POST">

			<input  type="text" name="nombre" id="nombre" placeholder="Usuario">





			<input type="password" name="contraseña" id="contraseña" placeholder="Contraseña">

      <button type="submit" id="login" name="login">Entrar</button>
      <br>
      <br>


		</form>
	</div>

	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
<script src="assets/js/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/sweetalert.css">
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script type="text/javascript" src="<?php echo URL ?>/assets/js/index.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
