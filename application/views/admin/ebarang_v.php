<div id="panel">	<?php echo anchor('admin/barang','Browse Barang');?></div><div id="clear"></div><div id="box">	<h3 id="adduser">Update Barang</h3>	<?php		foreach($detail_barang as $db):		echo form_open_multipart("admin/barang/save","id='form'");	?>	  <fieldset id="personal">		<legend> UPDATE DATA BARANG</legend>		<label>Kode&nbsp;Kategori</label> 		<select name="kd_ktgr" class="required">			<?php foreach($browse_kategori as $bk):?>			<option <?php if($db->kd_ktgr == $bk->kd_ktgr) echo 'selected';?> value='<?php echo $bk->kd_ktgr?>'><?php echo $bk->nm_ktgr;?> </option>			<?php endforeach ?>		</select><?php echo form_error('kd_ktgr')?>		<br />		<label>Nama Barang</label>		<input name="kd_brg" type="hidden" value="<?php echo $db->kd_brg?>"/>		<input name="nm_brg" type="text" class="required" value="<?php echo $db->nm_brg?>" size="50"/><?php echo form_error('nm_brg')?>		<br />		<label>Bahan</label>		<input name="bahan" type="text" value="<?php echo $db->bahan?>" size="30"/><?php echo form_error('bahan')?>		<br />		<label>Ukuran</label>		<input name="ukuran" type="text" class="required" value="<?php echo $db->ukuran?>" size="10"/>		<?php echo form_error('ukuran')?>		<br />		<label>Harga</label>		<input name="harga" type="text" value="<?php echo $db->harga?>" size="10"/>,00 <?php echo form_error('harga')?>		<br />		<label>Stok</label>		<input name="stok" type="text"  value="<?php echo $db->stok?>"size="1"/> pcs <?php echo form_error('pcs')?>		<br />		<label>Foto</label>		<?php echo img('asset/images/barang/thumbs/'.$db->nama_field);?>		<input name="nama_field" type="file"/>		<br />		<label>Keterangan</label>		<textarea name="keterangan"><?php echo $db->keterangan?></textarea>	  </fieldset>	  <div align="center">	  <input id="button1" type="submit" value="Update" /> 	  <input id="button2" type="button" value="Batal" OnClick="history.back()"/>	  </div>	</form>	<?php endforeach ?></div>