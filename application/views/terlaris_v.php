<?php
	$sql_dpesan = "SELECT kd_brg, (SELECT COUNT(kd_brg) FROM dpesan WHERE kd_brg = dp.kd_brg)jum FROM dpesan dp ORDER BY jum DESC LIMIT 1";
	$que_dpesan = mysql_query($sql_dpesan);
	$dp = mysql_fetch_array($que_dpesan);
	$dkd_brg = $dp['kd_brg'];
	$sql_laris = "SELECT kd_brg, nm_brg, nama_field FROM barang
			WHERE kd_brg = ".$dkd_brg."
			ORDER BY kd_brg DESC LIMIT 1";
	$que_barang = mysql_query($sql_laris);
	if($que_barang){
		$dl = mysql_fetch_array($que_barang);
		$arimg = array(
			'src' => 'asset/images/barang/thumbs/'.$dl['nama_field'],
			'class' => 'gb-laris',
			'title' => 'Barang Terlaris'
		);
		echo anchor('barang/detail/ecommerce/'.$dl['kd_brg'],img($arimg));
	}else{
		echo 'Belum ada barang terlaris';
	}
?>