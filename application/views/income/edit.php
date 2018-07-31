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
								<?php echo form_open_multipart('income/edit/'.$this->uri->segment(3));?>
								<div class="card-header">
									<div class="card-title">Base Form Control</div>
								</div>
								<div class="card-body">

									<div class="form-group">
										<label for="income_category">Income Category</label>
										<select name="category" class="form-control input-pill">
										<option value="0">Pilih</option>
										<?php foreach($data as $list): ?>
											<option <?php if($cat[0]->category_income == $list->category_name){ echo 'selected';} ?> value="<?= $list->category_name ?>"><?= $list->category_name ?></option>
										<?php endforeach; ?>
										</select>
									</div>
									<div class="form-group">
										<label for="cash">Cash</label>
										<input value="<?= $cat[0]->cash ?>" name="cash" type="number" class="form-control" id="cash" placeholder="Enter name">
									</div>
										<div class="form-group">
											<label for="comment">Note</label>
											<textarea name="note" class="form-control" id="comment" rows="5"><?= $cat[0]->note ?></textarea>
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
