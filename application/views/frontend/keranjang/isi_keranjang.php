<?php
echo form_open(current_url());
$base_path = 'images/produk/';
$i = 1;
?>
<section id="cart_items">
	<div class="col-sm-12">
		<div class="table-responsive cart_info">
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu">
						<td class="image">Item</td>
						<td class="description"></td>
						<td class="price">Price</td>
						<td class="quantity">Quantity</td>
						<td class="total">Total</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<?php 
					// print_r($keranjang);die();
					foreach($keranjang as $items):
						if(is_file($base_path . $items['id'] . '.jpg'))
						{
							$path_file = base_url() . $base_path . $items['id'] . '.jpg';
						}
						else
						{
							$path_file = base_url() . $base_path . 'no_foto.jpg';
						}
					?>
						<tr>
							<td class="cart_product text-left">
								<a href="">
									<img src="<?php echo $path_file; ?>" width="150" height="150" alt=""><br>
								</a>
								<h4><a href=""><?php echo $items['name'] ?></a></h4>
							</td>
							<td class="cart_description text-right"></td>
							<td class="cart_price">
								<p><?php echo rupiah($items['price']) ?></p>
							</td>
							<td class="cart_quantity col-xs-2 text-left">
								<input class="form-control" type="number" name="quantity" value="<?php echo $items['qty'] ?>">	
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo rupiah($items['price'] * $items['qty']); ?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="<?php echo base_url('index.php/keranjang/batal/' . $items['rowid']); ?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
					<?php 
					endforeach; 
					?>
				</tbody>
			</table>
		</div>
			<input type="submit" class="btn btn-fefault cart" name="do_checkout" value="Checkout"/>
			<input type="submit" class="btn btn-fefault cart" name="do_update" value="Update"/>
			<a href="<?php echo base_url(); ?>" class="btn btn-fefault cart">Lanjutkan belanja</a> 
			<a href="<?php echo base_url('index.php/keranjang/batal_semua'); ?>" class="btn btn-fefault cart">Kosongkan keranjang</a>
		</form>
	</div>
</section> <!--/#cart_items-->

