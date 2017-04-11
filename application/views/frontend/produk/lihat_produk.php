<?php
	$base_path = 'images/produk/';
	if(is_file($base_path . $id . '_large.jpg'))
	{
		$path_file = base_url() . $base_path . $id . '_large.jpg?time=' . time();
	}
	else
	{
		$path_file = base_url() . $base_path . 'no_foto_large.jpg';
	}
?>
<div class="product-details"><!--product-details-->
	<div class="col-sm-5">
		<div class="view-product">
			<img src="<?php echo $path_file; ?>" alt="" />
			<!-- <h3>ZOOM</h3> -->
		</div>
	</div>
	<div class="col-sm-7">
		<div class="product-information"><!--/product-information-->
			<img src="images/product-details/new.jpg" class="newarrival" alt="" />
			<h2><?php echo $nama; ?></h2>
			<!-- <p>Web ID: </p> -->
			<img src="<?php echo assets(); ?>images/product-details/rating.png" alt="" />
			<span>
				<span><?php echo rupiah($harga); ?></span>
				<!-- <label>Quantity:</label>
				<input type="text" value="3" /> -->
				<?php 
					if($member_level < 255): 
				?>
						<?php 
						if($tersedia == 1): 
						?>
							<a href="<?php echo base_url('index.php/keranjang/tambah/' . $id); ?>" class="btn btn-fefault cart">
								<i class="fa fa-shopping-cart"></i>
								Tambah ke Keranjang
							</a>
						<?php 
						else: 
						?>
							<a class="soldout_txt">Sold Out</a>
						<?php 
						endif; 
						?>
				<?php 
					else: 
				?>
						<a href="<?php echo base_url('index.php/administrator/produk/edit/' . $id); ?>" class="btn btn-fefault cart">
							<i class="fa fa-shopping-cart"></i>
							Edit Produk
						</a>
				<?php 
				endif; 
				?>
			</span>
			<p><b>Availability:</b> In Stock</p>
			<p><b>Condition:</b> New</p>
			<p><b>Brand:</b> E-SHOP</p>
			<a href=""><img src="<?php echo assets(); ?>images/product-details/share.png" class="share img-responsive"  alt="" /></a>
		</div><!--/product-information-->
	</div>
</div><!--/product-details-->

<div class="category-tab shop-details-tab">
	<div class="col-sm-12">
		<h2>Deskripsi</h2>
		<p><?php if(trim($deskripsi) !== '') { echo $deskripsi; } else { echo 'Tidak ada deskripsi'; }?></p>
	</div>
</div>