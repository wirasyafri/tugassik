<?php $this->load->view('partials/header') ?>
  <?php $this->load->view('partials/navbar') ?>
  <?php if($_SESSION['role']=="logistik") {
	$this->load->view('partials/sidebarlogis');
}
else
	$this->load->view('partials/sidebar') 
?>
		<div class="main-panel">
			<div class="content">
				<div class="container-fluid">
					<div class="row">
					<div class="col-md-12">
							<div class="card">
									<div class="card-header">
										<div class="card-title">DATA TRANSAKSI</div>
										
									</div>
									<div class="table-responsive">
									<div class="card-body">
										<table class="table table-head-bg-success" id="example">
											<thead>
												<tr>
													<th bgcolor="yellow">ID TRANSAKSI</th>
													<th bgcolor="yellow">ID PRODUCT</th>
													<th bgcolor="yellow">PRODUCT</th>
													<th bgcolor="yellow">CATEGORY</th>
													<th bgcolor="yellow">DESRIPTION</th>
													<th bgcolor="yellow">HARGA</th>
													<th bgcolor="yellow">PENERIMA</th>
													<th bgcolor="yellow">JUMLAH</th>
													<th bgcolor="yellow">ATM</th>
													<th bgcolor="yellow">ALAMAT</th>
													<th bgcolor="yellow">KOTA</th>
													<th bgcolor="yellow">PROVINSI</th>
													<th bgcolor="yellow">NO TELEPON</th>
													<th bgcolor="yellow">JASA KIRIM</th>
													<th bgcolor="yellow">STATUS</th>
													<th bgcolor="yellow">NO RESI</th>
													<th bgcolor="yellow">AKSI</th>
													<th bgcolor="yellow">DELETE</th>
												</tr>
											</thead>
											
										</table>
										
									</div>
								</div>
					</div>	
					</div>
				</div>
		</div>
		</div>
<?php $this->load->view('transaksi/footer_transaksi')?>