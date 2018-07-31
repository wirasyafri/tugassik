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
										<div class="card-title">Category Income</div>
									</div>
									<div class="card-body">
										<table class="table table-head-bg-success">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Category</th>
													<th scope="col">Note</th>
													<th scope="col">Option</th>
												</tr>
											</thead>
											<tbody>
											<?php $no = 1;?>
												<?php foreach($list as $data): ?>
												<tr>
													<td><?= $no++ ?></td>
													<td><?= $data->category_name ?></td>
													<td><?= $data->note ?></td>
													<td>
														<a href="<?= base_url('Category_Income/edit/').$data->id_cat_income ?>" class="btn btn-default">
															<i class="la la-pencil-square-o"></i>
														</a>
														<a href="<?= base_url('Category_Income/delete/').$data->id_cat_income ?>" class="btn btn-default">
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
