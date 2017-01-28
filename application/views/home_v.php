<div class="top-callout"></div>
<script src="<?php echo base_url()?>asset/css/jquery.js" type="text/javascript"></script>
<div id="top_banner">
	<div style="" id="divSimpleSlider">
		<?php foreach($browse_slide as $bt){ ?>
			<a style="position: absolute; top: 0px; left: 0px; display: none; z-index: 2; opacity: 0;"
				href="<?php echo base_url().'barang/detail/ecommerce/'.$bt->kd_brg.'/'.$bt->nm_brg?>">
				<img src="<?php echo base_url()?>asset/images/barang/thumbs/<?php echo $bt->nama_field?>" alt="">
				<div class="description">
					<?php
						echo '<b>'.$bt->nm_brg.'</b><br />';
						echo "Harga : ".$bt->harga.'<br />';
						echo "Size : ".$bt->harga.'<br />';
						echo "Keterangan : <br />".character_limiter($bt->keterangan,250).'<br />';
					?>
				</div>
			</a>
		<?php } ?>
	  </div>
      <div id="divSimpleSliderRotate" style="position:absolute; z-index:9999;right:5px;bottom:5px;">
	  </div>
</div>
<script type="text/javascript">
var $j = jQuery.noConflict();
  $j(document).ready(function(){
    //Setup the main rotater on the home page
    $j('#divSimpleSlider').cycle({
      speed:       2000,
      timeout:     3500,
      pager:      '#divSimpleSliderRotate',
      pagerEvent: 'click',
      fastOnEvent: false
    });
     $j('#top_banner').fadeIn(1500);
  });
</script>
<div class="bottom-callout"></div>
<!--<div class="listing-type-grid  block">-->
<div class="clear_both"></div>
<?php echo '<div class="pagination">'.$this->pagination->create_links().'</div>'?>
<div class="box best-selling">
	<h3>Galeri Produk</h3>
			<table border="0" cellspacing="0">
			<tbody>
				<tr class="odd">
				<?php $x=1; foreach($browse_thumbs as $bth){?>
				<td>
					<?php
						$arr_img = array(
							'src' => 'asset/images/barang/thumbs/'.$bth->nama_field
						);
						echo anchor('barang/detail/ecommerce/'.$bth->kd_brg.'/'.$bth->nm_brg, img($arr_img));
						echo '<div class="product-description"><h5>'.anchor('barang/detail/ecommerce/'.$bth->kd_brg,$bth->nm_brg).'</h5>';
						echo '</div>';
					?>
					<div class="clear"></div>
				</td>
				<?php
					$j= $x++;
					if($j % 3 == 0) echo "<tr class='odd'>";
					}
				?>
				</tr>
			</tbody>
			</table>
    <script type="text/javascript">decorateTable('products-grid-table')</script>
    <div class="bottom-callout"></div>
	<?php echo '<div class="pagination">'.$this->pagination->create_links().'</div>'?>
</div>