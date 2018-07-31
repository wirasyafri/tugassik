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
									<div class="form-group">
										<a href="<?= base_url('outcome/create') ?>" class="btn btn-md btn-success"><i class="la la-plus"></i>&nbsp;Add Outcome</a>
										<a href="<?= base_url('outcome_category') ?>" class="btn btn-md btn-info"><i class="la la-tag"></i>&nbsp;Outcome Category</a>
									</div>
										<table class="table table-head-bg-success">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Income Category</th>
													<th scope="col">Cash</th>
													<th scope="col">Note</th>
													<th scope="col">Date</th>
													<th scope="col">Option</th>
												</tr>
											</thead>
											<tbody>
												<?php $no =1; ?>
												<?php foreach($list as $data): ?>
												<tr>
													<td><?= $no++ ?></td>
													<td><?= $data->category ?></td>
													<td><?= $data->cash ?></td>
													<td><?= $data->note ?></td>
													<td><?= $data->date_attemps ?></td>
													
													<td>
														<a href="<?= base_url('outcome/edit/').$data->id_outcome ?>" class="btn btn-default">
															<i class="la la-pencil-square-o"></i>
														</a>
														<a href="<?= base_url('outcome/delete/').$data->id_outcome ?>" class="btn btn-default">
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
