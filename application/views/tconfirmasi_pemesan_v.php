<?php	echo '<h1>'.$title.'</h3>';	echo '<h3>Selamat</h3>';	echo 'Pemesanan Anda Telah Terkirim. Pengiriman Barang Akan Kami Lakukan Setelah Anda Melakukan Pembayaran Sebesar <b>		'.$this->session->userdata('sesi_totalbayar').'</b> ke Rekening Kami :<br />';	foreach($browse_perusahaan as $bp):	echo '&nbsp; Bank : '.$bp->bank.'<br />';	echo '&nbsp; No. Rekening : '.$bp->no_rek.'<br />';	echo '&nbsp; Atas Nama : '.$bp->atas_nm.'<br /><br />';	endforeach;	echo '<h3>Catatan</h3>Kami juga mengirimkan konfirmasi ini ke alamat email anda.			Perlu kami sampaikan, jika tidak dilakukan pembayaran selama 3 hari,			maka Kami akan membatalkan pemesanan yang anda lakukan. Terimakasih.';?>