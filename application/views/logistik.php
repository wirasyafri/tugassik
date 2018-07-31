<?php $this->load->view('partials/navbar') ?>
<div class="main-panel">
			<div class="content">
				<div class="container-fluid">
					<div class="row">
					<div class="col-md-12">
							<div class="card">
									
									<div class="card-body">
										<table class="table table-head-bg-success">
											<thead>
												<tr>

												</tr>
											</thead>

										</table>

	<?php 
	echo "ASSALAMUALAIKUM ";
	echo $_SESSION['role'];
	// echo print_r($this->session->all_userdata());

	 ?>										
									</div>
								</div>
					</div>	
					</div>
				</div>
		</div>
		</div>

<?php $this->load->view('partials/footer') ?>

	<?php $this->load->view('partials/sidebarlogis') ?>


