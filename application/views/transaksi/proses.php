<?php if($_SESSION['role']=="logistik") {
	$this->load->view('partials/sidebarlogis');
}
else
	$this->load->view('partials/sidebar') 
?>

<?php $this->load->view('partials/header') ;
$this->load->view('partials/navbar');
?>
	<?php echo validation_errors();  ?>
	<?php echo form_open_multipart('transaksi/proses/'.$this->uri->segment(3)); ?>
					<!-- //FlexSlider -->


		<div class="main-panel">
			<div class="content">
				<div class="container-fluid">
					<div class="row">
					<div class="col-md-6">
								<div class="card">
									
					<div class="product-details">

						<div class="form-group">
						<label class="">ID TRANSAKSI</label>
						</div>
						<div class="form-group">
						<input type="text" class="form-control" name="id_tansaksi" value="<?php echo $user[0]->id_tansaksi?>" readonly="">
						</div>

						<div class="form-group">
						<label class="">ID_PROUCT</label>
						</div>
						<div class="form-group">
						<input type="text" class="form-control" name="id_product" value="<?php echo $user[0]->id_product?>" readonly="">
						</div>
						<div class="form-group">
						<label class="">PRODUCT</label>
						</div>
						<div class="form-group">
						<input type="text" class="form-control" name="product" value="<?php echo $user[0]->product?>" readonly="">
						</div>
						<div class="form-group">
						<label class="">CATEGOTY</label>
						</div>
						<div class="form-group">
						<input type="text" class="form-control" name="category" value="<?php echo $user[0]->category?>" readonly="">
						</div>
						<div class="form-group">
						<label class="">DESCRIPTION</label>
						</div>
						<div class="form-group">
						<textarea class="form-control" name="description" value="<?php echo $user[0]->description?>" readonly="" ><?php echo $user[0]->description?></textarea>
						</div>

						<div class="form-group">
						<label class="">HARGA</label>
						</div>
						<div class="form-group">
						<input type="text" class="form-control" name="harga" value="<?php echo $user[0]->harga?>" readonly="">
						</div>

						<div class="form-group">
						<label class="">NAMA PENERIMA</label>
						</div>
						<div class="form-group">
						<input type="text" class="form-control" name="penerima" value="<?php echo $user[0]->penerima?>" readonly="">
						</div>
						
						<div class="form-group">
						<label class="">JUMLAH PEMBELIAN</label>
						</div>
						<div class="form-group">
						<input type="text" class="form-control" name="jumlah" value="<?php echo $user[0]->jumlah?>" readonly="">
						</div>

						<div class="form-group">
						<label class="">ATM</label>
						</div>
						<div class="form-group">
						<input type="text" class="form-control" name="atm" value="<?php echo $user[0]->atm?>" readonly="">
						</div>
						
						<div class="form-group">
						<label class="">ALAMAT</label>
						</div>
						<div class="form-group">
						<textarea name="alamat" class="form-control" value="<?php echo $user[0]->alamat?>" readonly=""><?php echo $user[0]->alamat?></textarea>
						</div>

						<div class="form-group">
						<label class="">KOTA</label>
						</div>
						<div class="form-group">
						<input type="text" name="kota" class="form-control" value="<?php echo $user[0]->kota?>" readonly="">
						</div>

						<div class="form-group">
						<label class="">PROVINSI</label>
						</div>
						<div class="form-group">
						<input type="text" name="provinsi" value="<?php echo $user[0]->provinsi?>" class="form-control" readonly="">
						</div>

						<div class="form-group">
						<label class="">No Telepon</label>
						</div>
						<div class="form-group">
						<input type="number" class="form-control" name="no_tlp" value="<?php echo $user[0]->no_tlp?>" readonly="">
						</div>

						<div class="form-group">
						<label class="">Jasa pengantar / JNE / J&T</label>
						</div>
						<div class="form-group">
						<input type="text" class="form-control" name="jasa_kirim" value="<?php echo $user[0]->jasa_kirim?>" readonly="">
						</div>
						<div class="form-group">
						<label class="">STATUS</label>
						</div>
						<div class="form-group">
						 <select class="form-control" id="sel1" name="status" >
							    <option>PROSES</option>
							    <option>READY</option>
							    <option>SUKSES</option>
						 </select>
						</div>
						<div class="form-group">
						<label class="">NO RESI</label>
						<input type="text" class="form-control" name="no_resi" value="<?php echo $user[0]->no_resi?>">
						</div>

						<div class="form-group">

						<button type="submit" class="btn btn-success" > simpan</button>
						</div>
						</div>

					</div>
				</div>
		</div>
		</div>


<?php echo form_close(); ?>
<?php $this->load->view('partials/footer');?>