<section id="form"><!--form-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1">
				<div class="login-form"><!--login form-->
					<h2>Informasi Penerima</h2>
					<form action="<?php echo base_url(); ?>pemesanan/nonmember_temp" method="POST">
						<div class="form-group">
							<label for="nama">Nama Penerima</label>
							<input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap Penerima">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="email">Handphone</label>
							<input type="number" name="no_hp" class="form-control">
						</div>

						<h2>Alamat Pengiriman</h2>
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<textarea name="alamat" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label for="email">Kode Pos</label>
							<input type="number" name="kodepos" class="form-control">
						</div>

						<h2>Pilih Metode Pengiriman</h2>
						<div class="form-group">
							<select name="metode" class="form-control">
								<option value="jne">JNE</option>
								<option value="jnt">JNT</option>
								<option value="tiki">Tiki</option>
								<option value="pos">POS</option>
							</select>
						</div>

						<h2>Informasi Tambahan</h2>
						<div class="form-group">
							<label for="alamat">Keterangan</label>
							<textarea name="keterangan" class="form-control"></textarea>
						</div>

						<div class="text-left">
							<button type="submit">Submit</button>
							<a href="<?php echo base_url() ?>keranjang" class="btn btn-danger">Cancel</a>		
						</div>
						
					</form>
				</div><!--/login form-->
			</div>
		</div>
	</div>
</section><!--/form-->