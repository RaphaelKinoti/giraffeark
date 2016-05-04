<?php $this->load->view('common/header');?>
<?php $this->load->view('common/navbar');?>
<section class="section account-section animated zoomIn">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="account-form">
					<div class="row account-form-header">
						<h3 class="text-center">Reset your password</h3>
					</div>
					<?=form_open(base_url('users/resetpassword'),array('class' => 'form-horizontal','role' => 'form'));?>
						<div class="form-group">
							<label>New password</label>
							<input type="password" class="form-control" name="password" placeholder="Enter your new password" required>
						</div>
						<div class="form-group">
							<label>Your email</label>
							<input type="email" class="form-control" name="user_email" placeholder="Enter your email" required>
						</div>
						<input type="hidden" name="url_user_email" value="<?=$this->uri->segment(4);?>">

						<input type="hidden" name="activation_code" value="<?=$this->uri->segment(3);?>">
						<div class="form-group text-center">
							<button type="submit" class="btn btn-fill col-sm-12 col-xs-12">Reset <i class="fa fa-check-circle"></i></button>
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