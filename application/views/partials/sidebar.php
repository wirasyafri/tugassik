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
					<a href="<?= base_url('home') ?>">
						<i class="la la-dashboard"></i>
						<p>Dashboard</p>
					</a>
				</li>
				
				<li class="nav-item">
					<a href="">
						<p>HRD</p>
					</a>
				</li>
					<ul>
						<li class="nav-item">
							<a href="<?= base_url('users') ?>">
								<i class="la la-user"></i>
								<p>Users</p>
							</a>
						</li>
					</ul>
				<li class="nav-item">
					<a href="">
						<p>Logistik</p>
					</a>
				</li>
					<ul>
						<li class="nav-item">
								<a href="<?= base_url('transaksi/data') ?>">
									<i class="la la-dashboard"></i>
									<p>Transaksi</p>
								</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('category') ?>">
								<i class="la la-tag"></i>
								<p>Category</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('product') ?>">
								<i class="la la-ambulance"></i>
								<p>Product</p>
							</a>
						</li>
					</ul>
						<li class="nav-item">
							<a href="">

								<p>Keuangan</p>
							</a>
						</li>
					<ul>
						<li class="nav-item">
							<a href="<?= base_url('/income') ?>">
								<i class="la la-line-chart"></i>
								<p>Income</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('/outcome') ?>">
								<i class="la la-thumb-tack"></i>
								<p>Outcome</p>
							</a>
						</li>
					</ul>
			</ul>
		</div>
	</div>
</div>
