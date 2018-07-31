<?php if($_SESSION['role']=="logistik") {
	$this->load->view('partials/sidebarlogis');
}
else
	$this->load->view('partials/sidebar') 
?>

<?php $this->load->view('partials/header') ;
$this->load->view('partials/navbar');
?>
		<div class="main-panel">
			<div class="content">
				<div class="container-fluid">
					<div class="row">
					<div class="col-md-6">
								<div class="card">
						<?php echo form_open_multipart('Product/edit/'.$this->uri->segment(3));?>
									<div class="card-header">
										<div class="card-title">Base Form Control</div>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label for="name">Name</label>
											<input value="<?= $cat[0]->product ?>" name="product" type="text" class="form-control" id="name" placeholder="Enter name">
										</div>
										<div class="form-group">
										<label for="pillSelect">Category</label>
										<select name="category" class="form-control input-pill" id="pillSelect">
											<?php foreach($data as $ket): ?>
												<option value="<?= $ket->id ?>"><?= $ket->name ?></option>
											<?php endforeach; ?>
										</select>
									</div>
										<div class="form-group">
											<label for="name">Description</label>
											<input value="<?= $cat[0]->description ?>" name="description" type="text" class="form-control" id="name" placeholder="Enter name">
										</div>
										<div class="form-group">
											<label for="name">QTY</label>
											<input value="<?= $cat[0]->qty ?>" name="qty" type="text" class="form-control" id="name" placeholder="Enter name">
										</div>
										<div class="form-group">
											<label for="name">Price</label>
											<input value="<?= $cat[0]->price ?>" name="price" type="text" class="form-control" id="name" placeholder="Enter name">
										</div>	
										<div class="form-group">
											<label for="name">Price</label>
											<img src="<?=base_url()?>assets/uploads/<?= $cat[0]->foto?>">
											<input value="" name="foto" type="file" class="form-control" id="foto" placeholder="Enter name">
										</div>
										</div>
										<div class="card-action">
											<button type="submit" class="btn btn-success">Submit</button>
											<button class="btn btn-danger">Cancel</button>
										</div>
									</div>
								</div>	
					</div>
				</div>
		</div>
		</div>
		<?php echo form_close(); ?>
<?php $this->load->view('partials/footer') ?>
