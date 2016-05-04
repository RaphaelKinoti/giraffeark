<?php $this->load->view('common/header');?>
<?php $this->load->view('common/navbar');?>

<section class="section verification-section animated zoomIn">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="account-form">
				<div class="row account-form-header">
					<h3 class="text-center">Enter code sent to your phone number to verify</h3>
				</div>
				<?=form_open(base_url('profile/confirm'),array('class' => 'form-horizontal','role' => 'form'));?>
					<div class="form-group">
						<input class="form-control" type="text" name="code" placeholder="Enter code here">
					</div>
					<input type="hidden" name="hash" value="<?=$this->uri->segment(3);?>">
					<div class="form-group">
						<button class="btn btn-fill col-sm-12 col-xs-12">Finish <i class="fa fa-check-circle"></i></button>
					</div>
				<?=form_close();?>
				
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