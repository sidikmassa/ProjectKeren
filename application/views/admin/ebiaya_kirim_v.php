<div id="panel">	<?php echo anchor('admin/biaya_kirim','Browse biaya_kirim');?></div><div id="clear"></div><div id="box">	<h3 id="adduser">Tambah Biaya Pengiriman Barang</h3>	<?php		echo form_open('admin/biaya_kirim/save','id="form"');		foreach($detail_biaya_kirim->result() as $dbk):	?>	  <fieldset id="personal">		<legend> INPUT DATA BIAYA PENGIRIMAN</legend>		<label>Nama Kota</label>		<input value="<?php echo $dbk->nm_kota?>" name="nm_kota" type="text" size="40"/>		<input value="<?php echo $dbk->kd_biaya_krm?>" name="kd_biaya_krm" type="hidden"/>		<?php echo form_error('nm_kota')?>		<br />		<label>Biaya Pengiriman</label>		Rp. <input value="<?php echo $dbk->biaya_krm?>" name="biaya_krm" type="text" size="10"/>		<?php echo form_error('biaya_krm')?>		<br />	  </fieldset>	<?php endforeach ?>	  <div align="center">	  <input id="button1" type="submit" value="Simpan"/> 	  <input id="button2" type="button" value="Batal" OnClick="history.back()"/>	  </div>	</form></div>