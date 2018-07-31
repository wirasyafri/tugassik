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
									<?php echo form_open_multipart('category/create');?>
									<div class="card-header">
										<div class="card-title">Create Category</div>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label for="name">Name</label>
											<input name="category" type="text" class="form-control" id="name" placeholder="Enter name">
										</div>
											<div class="form-group">
												<label for="comment">Description</label>
												<textarea name="description" class="form-control" id="comment" rows="5">
												</textarea>
											</div>
										</div>
										<div class="card-action">
											<button class="btn btn-success">Submit</button>
											<button class="btn btn-danger">Cancel</button>
										</div>
									</div>
								</div>	
					</div>
				</div>
		</div>
		</div>

<?php $this->load->view('partials/footer') ?>
