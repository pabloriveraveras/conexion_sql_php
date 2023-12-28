<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Funciones</title>
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>

<body>

<?php include("encabezado.html"); ?>
<section>
	<div id="productos">
		<h2>Listar datos de la Base de Datos</h2>
		<div id="contenido">
			<?php
			include('conect.php');
			$consulta = mysqli_query($conexion, "SELECT * FROM productos");

			while($listar_prod = mysqli_fetch_assoc($consulta)) { ?>
				<div class="prod">
					<h4><?php echo $listar_prod['nombre']; ?></h4>
					<p>$ <?php echo $listar_prod['precio']; ?></p>
					<p><?php echo $listar_prod['caracteristicas']; ?></p>
				</div>
			<?php
			}
			?>
		</div>
	</div>
</section>
<?php include("pie.html"); ?>

</body>
</html>
