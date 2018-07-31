<?php $this->load->view('partials/navbar') ?>
<div class="main-panel">
	<div class="content">
		<div class="container-fluid">
			<h4>Assalamualaikum , <?= $_SESSION['role']; ?></h4>
			<div class="row">
				<?php foreach($total as $ww): ?>
				<div class="col-md-3">
					<div class="card card-stats card-warning">
						<div class="card-body ">
							<div class="row">
								<div class="col-5">
									<div class="icon-big text-center">
										<i class="la la-users"></i>
									</div>
								</div>
								<div class="col-7 d-flex align-items-center">
									<div class="numbers">
										<p class="card-category">Tahun <?= $ww->year ?></p>
										<h4 class="card-title">
										<a><?= $ww->total_amount ?></a>
										</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach;?>
			</div>
			<div class="row row-card-no-pd">
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<p class="fw-bold mt-1">Total</p>
							<h4><b>
							<?php $sum = 0;
							foreach ($entuts as $request):
							$sum += $request->cash;
							endforeach;
							echo 'Rp.'.$sum; ?>
							</b></h4>
							<a href="<?= base_url('income') ?>" class="btn btn-primary btn-full text-left mt-3 mb-3"><i class="la la-plus"></i> Add Balance</a>
						</div>
						<div class="card-footer">
							<ul class="nav">
								<li class="nav-item"><a class="btn btn-default btn-link" href="#"><i class="la la-history"></i> History</a></li>
								<li class="nav-item ml-auto"><a class="btn btn-default btn-link" href="#"><i class="la la-refresh"></i> Refresh</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="card">
						<p class="fw-bold mt-1">Income Detail</p>
						<div class="card-body">
							<?php foreach($entuts as $dd): ?>
							<div class="progress-card">
								<div class="d-flex justify-content-between mb-1">
									<span class="text-muted"><?= $dd->note ?></span>
									<span class="text-muted fw-bold"> <?= $dd->cash.'K' ?></span>
								</div>
								<div class="progress mb-2" style="height: 7px;">
									<div class="progress-bar bg-success" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="78%"></div>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card card-stats">
						<div class="card-body">
							<p class="fw-bold mt-1">Timeline </p>
							<?php foreach($entuts as $dd): ?>
							<div class="row">
								
								<div class="col-5">
									<div class="icon-big text-center icon-warning">
										<i class="la la-pie-chart text-warning"></i>
									</div>
								</div>
								<div class="col-7 d-flex align-items-center">
									
									<div class="numbers">
										<p class="card-category">Biaya</p>
										<h4 class="card-title"><?= $dd->cash.'K' ?></h4>
									</div>
									
								</div>
							</div>
							<?php endforeach; ?>
							<hr>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-card-no-pd">
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<p class="fw-bold mt-1">Total</p>
							<h4><b>
							<?php $sum = 0;
							foreach ($outcome as $request):
							$sum += $request->cash;
							endforeach;
							echo 'Rp.'.$sum; ?>
							</b></h4>
							<a href="<?= base_url('outcome') ?>" class="btn btn-primary btn-full text-left mt-3 mb-3"><i class="la la-plus"></i> Add Balance</a>
						</div>
						<div class="card-footer">
							<ul class="nav">
								<li class="nav-item"><a class="btn btn-default btn-link" href="#"><i class="la la-history"></i> History</a></li>
								<li class="nav-item ml-auto"><a class="btn btn-default btn-link" href="#"><i class="la la-refresh"></i> Refresh</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="card">
						<p class="fw-bold mt-1">Outcome Detail</p>
						<div class="card-body">
							<?php foreach($outcome as $data): ?>
							<div class="progress-card">
								<div class="d-flex justify-content-between mb-1">
									<span class="text-muted"><?= $data->note ?></span>
									<span class="text-muted fw-bold"> <?=  $data->cash.'K'?></span>
								</div>
								<div class="progress mb-2" style="height: 7px;">
									<div class="progress-bar bg-success" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="78%"></div>
								</div>
							</div>
							<?php endforeach;?>
							
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card card-stats">
						<div class="card-body">
							<p class="fw-bold mt-1">Timeline</p>
							<?php foreach($outcome as $ww): ?>
							<div class="row">
								<div class="col-5">
									<div class="icon-big text-center icon-warning">
										<i class="la la-pie-chart text-warning"></i>
									</div>
								</div>
								<div class="col-7 d-flex align-items-center">
									<div class="numbers">
										<p class="card-category">Biaya </p>
										<h4 class="card-title"><?= $ww->cash.'K' ?></h4>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
							<hr>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('partials/footer') ?>
<?php $this->load->view('partials/sidebarkeu') ?>