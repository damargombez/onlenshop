<?php 
$base_path = 'images/produk/';
?>
<div class="features_items"><!--Produk Terbaru-->
	<h2 class="title text-center">Produk Terbaru</h2>
	<?php 
	if (is_array($latest) && count($latest) > 0) {
		foreach ($latest as $row) {
			/*Cek Gambar*/
			if(is_file($base_path . $row['id'] . '.jpg')) {
				$path_file = base_url() . $base_path . $row['id'] . '.jpg?time=' . time();
			} else {
				$path_file = base_url() . $base_path . 'no_foto.jpg';
			}

			/*Cek Tersedia*/
			if($row['tersedia'] === '0') {
				$soldout = ' soldout';
			} else {
				$soldout = '';
			}

	?>
			<div class="col-sm-4">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="<?php echo $path_file; ?>" alt="" />
							<h2><?php echo rupiah($row['harga']) ?></h2>
							<p><?php echo $row['nama'] ?></p>
							<a href="<?php echo base_url('index.php/produk/lihat/' . $row['id']); ?>" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Detail</a>
							<a href="<?php echo base_url('index.php/keranjang/tambah/' . $row['id']); ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>
						<div class="product-overlay">
							<div class="overlay-content">
								<h2><?php echo rupiah($row['harga']) ?></h2>
								<p><?php echo $row['nama'] ?></p>
								<a href="<?php echo base_url('index.php/produk/lihat/' . $row['id']); ?>" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Detail</a>
								<a href="<?php echo base_url('index.php/keranjang/tambah/' . $row['id']); ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
						</div>
						<img src="<?php echo assets(); ?>images/home/new.png" class="new" alt="" />
					</div>
				</div>
			</div>
	<?php 
		}
	} else {
	?>
		<div class="alert-message alert-message-warning">
            <h4>
                Informasi</h4>
            <p>
                Maaf Data Masih Kosong.</p>
        </div>
	<?php 
	}
	?>
</div><!--Produk Terbaru-->

<!--recommended_items-->
<div class="recommended_items">
	<h2 class="title text-center">Produk Terpopuler</h2>
	
	<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">

		<?php 
		if (is_array($populer) && count($populer) > 0) {
		?>
			<div class="carousel-inner">
				<div class="item active">
					<?php 
					$i = 1;
					foreach ($populer as $row) {
						/*Cek Gambar*/
						if(is_file($base_path . $row['id'] . '.jpg')) {
							$path_file = base_url() . $base_path . $row['id'] . '.jpg?time=' . time();
						} else {
							$path_file = base_url() . $base_path . 'no_foto.jpg';
						}

						/*Cek Tersedia*/
						if($row['tersedia'] === '0') {
							$soldout = ' soldout';
						} else {
							$soldout = '';
						}

						if ($i == 4) echo "</div><div class='item'>";
					?>
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo $path_file; ?>" alt="" />
											<h2><?php echo rupiah($row['harga']) ?></h2>
											<p><?php echo $row['nama'] ?></p>
											<a href="<?php echo base_url('index.php/produk/lihat/' . $row['id']); ?>" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Detail</a>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
					<?php 
					$i++;
					}
					?>
				</div>
			</div>
		<?php 
		}
		?>

		 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
			<i class="fa fa-angle-left"></i>
		  </a>
		  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
			<i class="fa fa-angle-right"></i>
		  </a>			
	</div>
</div>
<!--/recommended_items-->