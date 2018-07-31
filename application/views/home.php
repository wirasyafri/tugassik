<?php $this->load->view('partials/navbar') ?>
<div class="main-panel">
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<h4 class="page-tile">Assalamulaikum , <?= $_SESSION['role'] ?></h4>
				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							
							<div class="row">
								<?php foreach($get as $uwu): ?>
								<div class="col-md-3">
									<?php if ($uwu->active == 1): ?>
										<span class="badge badge-default">Aktif</span>
									
										<?php elseif ($uwu->active != 1): ?>
										<span class="badge badge-default">tidak aktif</span>
									<?php endif ?>
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
													<p class="card-category"><?= $uwu->first_name ?></p>
													<h4 class="card-title"><?= $uwu->last_login ?></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('partials/footer') ?>
<?php $this->load->view('partials/sidebar') ?>