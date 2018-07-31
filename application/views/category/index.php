
		<div class="main-panel">
			<div class="content">
				<div class="container-fluid">
					<div class="row">
					<div class="col-md-12">
							<div class="card">
									<div class="card-header">
										<div class="card-title">Category</div>
										<a href="<?= base_url('category/create') ?>" class="btn btn-success">CREATE CATEGORY</a>
									</div>
									<div class="card-body">
										<table class="table table-head-bg-success">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Category</th>
													<th scope="col">Description</th>
													<th scope="col">Option</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach($list as $data): ?>
												<tr>
													<td><?= $data->id ?></td>
													<td><?= $data->name ?></td>
													<td><?= $data->description ?></td>
													<td>
														<a href="<?= base_url('category/edit/').$data->id ?>" class="btn btn-default">
															<i class="la la-pencil-square-o"></i>
														</a>
														<a href="<?= base_url('category/delete/').$data->id ?>" class="btn btn-default">
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

