<?php
    $objDb = new db();
	$link = $objDb->conecta_mysql();


	$sql = " SELECT * from lc_itens ";
	$sql2 = " SELECT * from lc_centro_custo ";
	$resultado_item = mysqli_query($link, $sql);
    $resultado_cc = mysqli_query($link, $sql2);
?>