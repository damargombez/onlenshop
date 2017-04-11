<!-- <form action="<?php echo current_url(); ?>" method="POST">
<div class="grid_12">
	<table>
	<tbody>
		<tr>
			<td>Username</td>
			<td><input type="text" placeholder="Username" name="username"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" placeholder="Email" name="email"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" placeholder="password" name="password"></td>
		</tr>
		<tr>
			<td>Retype Password</td>
			<td><input type="password" placeholder="Ketikkan ulang password" name="re_password"></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td><input type="text" placeholder="Nama Lengkap" name="nama_lengkap"></td>
		</tr>
		<tr>
			<td>No. Hp</td>
			<td><input type="text" placeholder="No. HP" name="no_hp"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><textarea name="alamat"></textarea></td>
		</tr>
	</tbody>
	</table>
</div>
<div class="clear"></div>
<div class="grid_12">
	<input type="submit" name="do_register" value="Register" class="button"> <input type="reset" value="Reset" class="button">
</div>
<div class="clear"></div>
</form> -->

<section id="form"><!--form-->
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<div class="signup-form"><!--sign up form-->
					<h2>Register</h2>
					<form action="<?php echo current_url(); ?>" method="POST">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" placeholder="Username" name="username">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" placeholder="Email" name="email">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" placeholder="password" name="password">
						</div>
						<div class="form-group">
							<label for="repassword">Retype Password</label>
							<input type="password" placeholder="Ketikkan ulang password" name="re_password">
						</div>
						<div class="form-group">
							<label for="namalengkap">Nama Lengkap</label>
							<input type="text" placeholder="Nama Lengkap" name="nama_lengkap">
						</div>
						<div class="form-group">
							<label for="nohp">No. Hp</label>
							<input type="text" placeholder="No. HP" name="no_hp">
						</div>
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<textarea name="alamat"></textarea>
						</div>
						<button type="submit" name="do_register" class="btn btn-default">Signup</button>
					</form>
				</div><!--/sign up form-->
			</div>
		</div>
	</div>
</section><!--/form-->