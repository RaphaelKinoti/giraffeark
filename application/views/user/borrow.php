<?php $this->load->view('common/header');?>
<?php $this->load->view('common/navbar');?>
<?php $this->load->view('common/profile-header',array('content' => 'Borrow Money','user' => $user));?>

<section class="section borrow-money-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
			<div class="borrow-money-form">
				<?=form_open(base_url(),array('class' => 'form-horizontal','role' => 'form'));?>
					<div class="form-group">
						<label>From network</label> 
						<select class="form-control" name="network">
							<option value="">Select</option>
							<option value="1">Self help group</option>
						</select>
					</div>
					<div class="form-group">
						<label>Enter amount</label> 
						<input type="number" name="amount" class="form-control" required placeholder="eg 5000">
					</div>

					<div class="form-group">
						<label>Repayment Date</label> 
						<input type="date" name="repaymentdtate" class="form-control" required placeholder="">
					</div>

					<div class="form-group">
						<input type="checkbox" name="agree"> I agree to the <a href="#">terms and conditions</a> of self help group network and Taslimu
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-fill btn-dark col-sm-12 col-xs-12">Borrow</button>
						<span class="clearfix"></span>
					</div>

				<?=form_close();?>
			</div>
		</div>
		</div>
	</div>
</section>

<?php $this->load->view('common/footer-inner',array('menu' =>false));?>