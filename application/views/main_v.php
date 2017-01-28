<!--<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">-->
<html>
<head>	
<title><?php echo $title?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="shortcut icon" href="<?php echo base_url().'asset/images/theme/favicon.png';?>" type="image/x-icon">
<script type="text/javascript">
//<![CDATA[
    // var BLANK_URL = 'http://demo.mage-world.com/1402/js/blank.html';
    // var BLANK_IMG = 'http://demo.mage-world.com/1402/js/spacer.gif';
//]]>
</script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/screen.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/easybanner.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/smartmenu.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/superfish.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/superfish-vertical.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/print.css" media="print">
<script type="text/javascript" src="<?php echo base_url()?>asset/css/470fe3190c7d0ea4aacc14677c226000.js"></script>
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="http://demo.mage-world.com/1402/skin/frontend/default/mapple/css/styles-ie.css" media="all" />
<![endif]-->
<!--[if lt IE 7]>
<script type="text/javascript" src="http://demo.mage-world.com/1402/media/js/69347a9b66cc56b8167f5e45ef350f4b.js"></script>
<![endif]-->	
	<script src="Home%20page_files/script.js" type="text/javascript"></script>
	<link type="text/css" href="<?php echo base_url()?>asset/css/style.css" rel="stylesheet">
</head>
<body class=" cms-index-index cms-home">
<div class="wrapper">
	<noscript>
        <div class="noscript">
            <div class="noscript-inner">
                <p>&nbsp;</p>
            </div>
        </div>
    </noscript>
<div class="mw_container">
	<div class="header-container">
	<div class="header">
		<h1 id="logo" class="logo" title="Magento Commerce">
       <img src="asset/images/barang/logo.jpg">
		</h1>
        	<div class="mw_right_head">
	<fieldset class="form-language">
    <p><a href="facebook.com"><img src="asset/images/barang/fb.jpg"></a>
        <a href="blogger.com"><img src="  asset/images/barang/blog.jpg"></a>
        <a href="twitter.com"> <img src=" asset/images/barang/twitter.jpg"></a>
        <a href="youtube.com"><img src=" asset/images/barang/tube.jpg"></a>
        <?php $this->load->view('combokategori_v')?>
		</fieldset>
		<div class="clear_both"></div>
		<ul class="links">
        
			
           <li class="first"><?php echo anchor(base_url(),'Home')?></li>
			<li><?php echo anchor('barang/carabeli','Cara Pembelian')?></li>
			<li><?php echo anchor('biaya_kirim','Daftar biaya transport')?></li>
			<li class=" last"><?php echo anchor('perusahaan/about_us','Tentang kami')?></li>
		</ul>
	<div class="clear_both"><span> </span></div>
	<?php $this->load->view('search_v')?>
	</div>
		<div class="clear_both"><span> </span></div>
	</div>
	</div>
<div class="main-area">
<div class="nav-container"><?php $this->load->view('topmenu_v')?></div>
<!--<script type="text/javascript">
	var menu=new menu.dd("menu");
	menu.init("menu","menuhover");
</script>-->
		<div class="mw_main">
			<div class="main col2-right-layout">
			<div class="breadcrumbs"></div>
			<div class="col-main">
			<div class="std"></div>
<div class="std">
<div class="col-left side-col">
<h3>Produk Terlaris</h3>
<p class="home-callout">
	<?php $this->load->view('terlaris_v')?>
</p>
<div class="block block-tags">
    <div class="block-title">
        <h3>Online Support</h3>
    </div>
    <div class="block-content">
		<a href="ymsgr:sendIM?mgcn_sidik" class="support_online">
			<img src=" asset/images/theme/online_support.png">
		</a>        
    </div>
	<div class="block-bottom"></div>
</div>
<div class="block block-subscribe" id="bukutamu">
	<p>
	  <?php $this->load->view('bukutamu_v')?>
	  </p>
	<p><form action="mail.php" method="POST" class="newsletter">
	<h3>Newsletter Subscribe </h3>
	<input type="text" name="email" placeholder="Enter email address" size=40 class="input"/>
	<input type="submit" value="Subscribe" class="button" />
</form></p>
</div>
</div>
<div class="home-spot">
	<?php $this->load->view($main);?>
</div>
</div>
</div>
<div class="col-right sidebar"> 
	<div class="block block-cart">
		<div class="block-title"><h4>Keranjang Belanja</h4></div>
		<div class="block-content" id="cart">
			<p>Untuk melihat keranjang belanja, klik
			<?php echo anchor('pesan/browse','disini')?></p>
		</div>
		<div class="block-bottom"></div>
	</div>
	<div style="clear: both;"></div>
	<div class="mv_smartmenu_head"><h4>Kategori Barang</h4></div>
	<div class="mv_smartmenu">
		<div class="mv_smartmenu_content">
		
		<?php echo $this->load->view('menukategori_v')?></div>		
	
	</div>
<div class="block-bottom" style="clear: both; margin-bottom: 10px;"></div>
<div style="clear: both;"></div>
<div class="block block-tags">
	<?php $this->load->view('linkkoleksi_v')?>
</div>

<div class="block block-banner">
	<?php $this->load->view('laris_v')?>
</div>
</div>
</div>
</div>
<div class="mw_footer">
	<p>
	  <?php echo $this->load->view('footer_v.php');?><a href="ipaymu.com"> <img src="asset/images/barang/bank.jpg"></a> </p>
	<table width="106" border="1">
	  <tr>
	   
	    </tr>
	  </table>
</div>
</div>
</div>
</div>
</body></html>