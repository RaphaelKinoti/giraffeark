<?php $this->load->view('common/header');?>
<?php $this->load->view('common/navbar');?>
<section class="section account-section animated zoomIn">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="account-form">
					<div class="row account-form-header">
						<h3 class="text-center">Create your free account</h3>
					</div>
					<?=form_open(base_url('profile/signup'),array('class' => 'form-horizontal','role' => 'form'));?>
						<div class="form-group">
							<label>Your M-PESA number</label>
							<input type="tel" class="form-control" name="phone" placeholder="Enter your phone number" required>
						</div>
						<div class="form-group">
							<label>Your email</label>
							<input type="email" class="form-control" name="email" placeholder="Enter your email address" required>
						</div>
						<div class="form-group">
							<label>Choose password</label>
							<input type="password" class="form-control" name="password" placeholder="Enter your password" required>
						</div>
						<br>
						<div class="form-group text-center">
							<button type="submit" class="btn btn-fill col-sm-12 col-xs-12">Signup</button>
						</div>
					<?=form_close();?>
					<div class="loader text-center">
						<img src="<?=base_url();?>images/gifs/loader.gif">
					</div>
					<?php if(!empty($error)):?>
						<div class="row" id="errors">
							<?=$error;?>
						</div>
					<?php endif;?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $this->load->view('common/footer-inner',array('menu' => false));?>