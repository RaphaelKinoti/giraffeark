<?php $this->load->view('common/header');?>
<?php $this->load->view('common/navbar');?>
<section class="section account-section animated zoomIn">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="account-form">
					<div class="row account-form-header">
						<h3 class="text-center">Recover your password</h3>
					</div>
					<?=form_open(base_url('users/passwordreset'),array('class' => 'form-horizontal','role' => 'form'));?>
						<div class="form-group">
							<label>Your email</label>
							<input type="email" class="form-control" name="user_email" placeholder="Enter your email address" required>
						</div>					
						
						<div class="form-group text-center">
							<button type="submit" class="btn btn-fill col-sm-12 col-xs-12">Recover</button>
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