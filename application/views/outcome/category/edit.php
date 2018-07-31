<?php if($_SESSION['role']=="keuangan") {
	$this->load->view('partials/sidebarkeu');
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
									<?php echo form_open_multipart('outcome_category/edit/'.$this->uri->segment(3));?>
									<div class="card-header">
										<div class="card-title">Base Form Control</div>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label for="name">Name</label>
											<input value="<?= $cat[0]->name ?>" name="category" type="text" class="form-control" id="name" placeholder="Enter name">
										</div>
											<div class="form-group">
												<label for="comment">Description</label>
												<textarea name="description" class="form-control" id="comment" rows="5"><?= $cat[0]->desc ?></textarea>
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

<?php $this->load->view('partials/footer') ?>
