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
					<div class="col-md-12">
							<div class="card">
									<div class="card-header">
										<div class="card-title">Category</div>
									</div>
									<div class="card-body">
									<a href="<?= base_url('outcome_category/create') ?>" class="btn btn-md btn-success"><i class="la la-plus"></i>&nbsp;Add Category</a>
									<br>
									<br>
										<table class="table table-head-bg-success">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Outcome Category</th>
													<th scope="col">Description</th>
													<th scope="col">Option</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach($list as $data): ?>
												<tr>
													<td><?= $data->id ?></td>
													<td><?= $data->name ?></td>
													<td><?= $data->desc ?></td>
													<td>
														<a href="<?= base_url('outcome_category/edit/').$data->id ?>" class="btn btn-default">
															<i class="la la-pencil-square-o"></i>
														</a>
														<a href="<?= base_url('outcome_category/delete/').$data->id ?>" class="btn btn-default">
															<i class="la la-trash"></i>
														</a>
													</td>
												</tr>
												<?php endforeach; ?>
											</tbody>
										</table>
										
									</div>
								</div>
					</div>	
					</div>
				</div>
		</div>
		</div>

<?php $this->load->view('partials/footer') ?>
