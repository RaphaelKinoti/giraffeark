<?php $this->load->view('common/header');?>
<?php $this->load->view('common/navbar');?>
<?php $this->load->view('common/profile-header',array('content' => 'My Networks | <a href="'.base_url('#').'"><i class="fa fa-plus"></i> New network</a>','user' => $user));?>


<section class="section profile-section">
	<div class="container">
		<div class="row">
			<div class="loader text-center">
				<img src="<?=base_url();?>images/gifs/loader.gif">
			</div>
			<div class="col-md-6 col-md-offset-3">
				<div class="new-network">
					<h4 class="fa-color text-center">Create your network</h4>
					<?=form_open('#',array('class' => 'form-horizontal','role' => 'form'));?>
						<div class="form-group">
							<label>Network Name</label>
							<input class="form-control" name="name" type="text" id="netname" placeholder="Enter the network name">
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control" rows="3" name="description" id="netdesc" placeholder="Describe your network"></textarea>
						</div>
						<div class="form-group">
							<label>Membership minimum wallet balance</label>
							<input class="form-control" name="name" type="number" id="netwallet" placeholder="Enter amount">
						</div>

						<div class="form-group">
							<label>Loan interest rate</label>
							<input class="form-control" name="interest" type="number" id="netinterest" placeholder="Enter percentage eg 10">
						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-fill col-xs-12">Create now</button>
						</div>
					<?=form_close();?>
					<div class="loader text-center">
						<img src="<?=base_url();?>images/gifs/loader.gif">
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<?php $this->load->view('common/footer-inner',array('menu' => false));?>