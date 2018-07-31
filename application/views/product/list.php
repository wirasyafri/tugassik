
		<div class="main-panel">
			<div class="content">
				<div class="container-fluid">
					<div class="row">
					<div class="col-md-12">
							<div class="card">
									<div class="card-header">
										<div class="card-title">Product</div>
										<a href="<?= base_url('product/create') ?>" class="btn btn-success">CREATE PRODUCT</a>
									</div>
									<div class="card-body">
										<table class="table table-head-bg-success">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Product</th>
													<th scope="col">Category</th>
													<th scope="col">Description</th>
													<th scope="col">QTy</th>
													<th scope="col">Price</th>
													<th scope="col">Image</th>
													<th scope="col">Options</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach($list as $data): ?>
												<tr>
													<td><?= $data->id ?></td>
													<td><?= $data->product ?></td>
													<td><?= $data->category ?></td>
													<td><?= $data->description ?></td>
													<td><?= $data->qty ?></td>
													<td><?= $data->price ?></td>
													<td><img src="<?=base_url()?>assets/uploads/<?= $data->foto ?>"></td>
													<td>
														<a href="<?= base_url('product/edit/').$data->id ?>" class="btn btn-default">
															<i class="la la-pencil-square-o"></i>
														</a>
														<a href="<?= base_url('product/delete/').$data->id ?>" class="btn btn-default">
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
