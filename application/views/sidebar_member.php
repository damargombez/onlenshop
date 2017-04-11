<!-- <p>Hai, <?php echo $username; ?></p> -->
<ul class="nav navbar-nav">
	<?php if($level >= '255') : ?>
	<li>
		<a href="<?php echo base_url('index.php/administrator/dashboard'); ?>"><i class="fa fa-star"></i>Admin</a>
	</li>
	<?php else: ?>
	<li>
		<a href="<?php echo base_url('index.php/keranjang'); ?>"><i class="fa fa-shopping-cart"></i>Keranjang</a>
	</li>
	<li>
		<a href="<?php echo base_url('index.php/pemesanan'); ?>"><i class="fa fa-star"></i>Pemesanan</a>
	</li>
	<li>
		<a href="<?php echo base_url('index.php/konfirmasi'); ?>"><i class="fa fa-star"></i>Konfirmasi</a>
	</li>
	<?php endif; ?>
	<li>
		<a href="<?php echo base_url('index.php/member/pengaturan'); ?>"><i class="fa fa-gear"></i>Pengaturan</a>
	</li>
	<li>
		<a href="<?php echo base_url('index.php/member/logout'); ?>"><i class="fa fa-star"></i>Logout</a>
	</li>
</ul>
