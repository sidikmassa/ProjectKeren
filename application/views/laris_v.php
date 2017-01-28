<?php
	/*$sql_dpesan = "SELECT kd_brg, (SELECT COUNT(kd_brg) FROM dpesan WHERE kd_brg = dp.kd_brg)jum FROM dpesan dp ORDER BY jum DESC LIMIT 1";
	$que_dpesan = mysql_query($sql_dpesan);
	$dp = mysql_fetch_array($que_dpesan);
	$dkd_brg = $dp['kd_brg'];*/
	$sql_laris = "SELECT kd_brg, nm_brg, nama_field FROM barang ";
		$sql_laris .= " WHERE kd_brg IN (SELECT kd_brg FROM dpesan)";
		$sql_laris .= " ORDER BY kd_brg DESC LIMIT 0,3";
	$que_barang = mysql_query($sql_laris);
?>
<div class="block-top"></div>
    <div class="block-content">
	<?php
		while($dl = mysql_fetch_array($que_barang)):
			$arimg = array(
				'src' => 'asset/images/barang/thumbs/'.$dl['nama_field'],
				'title' => 'Barang Laris'
			);
			echo anchor('barang/detail/ecommerce/'.$dl['kd_brg'],img($arimg));
			echo anchor('barang/detail/ecommerce/'.$dl['kd_brg'],$dl['nm_brg']);
			echo '<br />';
			echo '<br />';
		endwhile;
	?>
    </div>
<div class="block-bottom"></div>