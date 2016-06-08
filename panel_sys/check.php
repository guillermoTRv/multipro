<?php 
	/*
	include("../cfg.php");
	$consulta = "SELECT * FROM check_list order by id_checklist ASC";
	$consulta = mysqli_query($enlace,$consulta);
	while ($array = mysqli_fetch_array($consulta)) {

	}
	*/
	/*
		include("../cfg.php");include("../time_fecha.php");

	$inmuebles = "SELECT * FROM inmuebles order by id_inmueble ASC";
	$inmuebles = mysqli_query($enlace,$inmuebles) or die("no");
	while ($arr = mysqli_fetch_array($inmuebles)) {
		$id_inmueble = $arr['id_inmueble'];
		$empresa = $arr['empresa'];
		$consulta = "SELECT * FROM check_list WHERE id_empresa='$empresa' order by id_checklist ASC";
		$consulta = mysqli_query($enlace,$consulta) or die("nos");
		
		while ($array = mysqli_fetch_array($consulta)) {
			echo $categoria = $array['categoria'];
			echo $situacion = $array['situacion_name'];
			$insert = "INSERT INTO estados_checklist_inmuebles(id_inmueble,categoria,situacion_name,fecha_registro_bd) VALUES('$id_inmueble','$categoria','$situacion','$fecha')";
			$ejecutar =mysqli_query($enlace,$insert) or die("no");


		}

	}

	*/





	/*
	id_checklist INT NOT NULL AUTO_INCREMENT, 
	id_empresa INT NOT NULL,
	categoria varchar(35),
	situacion_name varchar(40),
	status char(2),
	fecha_registro_bd DATETIME,

	id_eci INT NOT NULL AUTO_INCREMENT, 
		id_inmueble INT NOT NULL,
		categoria varchar(35),
		situacion_name varchar(40),
		status char(350),
		fecha_registro_bd DATETIME,
		primary key(id_eci)*/
?>