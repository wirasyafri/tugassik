<div class="sidebar">
	<div class="scroll-wrapper scrollbar-inner sidebar-wrapper" style="position: relative;">
		<div class="scrollbar-inner sidebar-wrapper scroll-content scroll-scrolly_visible" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 328px;">
			<div class="user">
				<div class="photo">
					<img src="<?php echo base_url('assets/img/profile.jpg') ?>">
				</div>
				<div class="info">
					<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
						<span>
							<?php $user = $this->ion_auth->user()->row();?>
							<?= $user->username ?>
								<span class="user-level">
									<?= $user->email ?>
								</span>
								<span class="caret"></span>
						</span>
					</a>
					<div class="clearfix"></div>

					<div class="collapse in" id="collapseExample" aria-expanded="true">
						<ul class="nav">
							<li>
								<a href="#profile">
									<span class="link-collapse">My Profile</span>
								</a>
							</li>
							<li>
								<a href="#edit">
									<span class="link-collapse">Edit Profile</span>
								</a>
							</li>
							<li>
								<a href="#settings">
									<span class="link-collapse">Settings</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<ul class="nav">
			
				<li class="nav-item">
					<a href="<?= base_url('Logistik') ?>">
						<i class="la la-dashboard"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('Logistik/transaksi') ?>">
						<i class="la la-dashboard"></i>
						<p>Transaksi</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('Logistik/category') ?>">
						<i class="la la-tag"></i>
						<p>Category</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('Logistik/product') ?>">
						<i class="la la-ambulance"></i>
						<p>Product</p>
					</a>
				</li>

			
			
			</ul>
			<!-- <div class="user">
				<div class="info">
					<a class="" data-toggle="collapse" href="#c" aria-expanded="true">
						<span>							
								<span class="nav-item">
								<i class="la la-thumb-tack"></i>
									Invoice
								</span>
								
						</span>
					</a>
					<div class="clearfix"></div>

					<div class="collapse in" id="c" aria-expanded="true">
						<ul class="nav">
							<li>
								<a href="">
									<span class="link-collapse">My Profile</span>
								</a>
							</li>
							<li>
								<a href="">
									<span class="link-collapse">Edit Profile</span>
								</a>
							</li>
							<li>
								<a href="">
									<span class="link-collapse">Settings</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</div>
