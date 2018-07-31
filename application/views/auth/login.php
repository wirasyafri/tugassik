<?php $this->load->view('partials/header') ?>

<div id="infoMessage">
	<?php echo $message;?>
</div>
<h4 class="page-title"></h4>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="card">
			<?php echo form_open("auth/login");?>
			<div class="card-header">
				<div class="card-title">
					<?= lang('login_heading');?>
				</div>
				<small class="form-text text-muted">
					<?= lang('login_subheading');?>
				</small>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label for="email">
						<?php echo lang('login_identity_label', 'identity');?>
					</label>
					<input name="identity" type="email" class="form-control" id="email" placeholder="Enter Email">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input name="password" type="password" class="form-control" id="password" placeholder="Enter Password">
				</div>
				<div class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="checkbox" value="">
						<span class="form-check-sign">Remember me</span>
					</label>
				</div>
				<div class="form-group">
					<input type="submit" value="<?= lang('login_submit_btn') ?>" class="btn btn-success btn-block">
					<button class="btn btn-danger btn-block">Cancel</button>
				</div>
				<?php echo form_close();?>
			</div>
		</div>
	</div>
	<?php $this->load->view('partials/footer') ?>
