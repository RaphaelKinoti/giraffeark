<?php $this->load->view('common/header'); ?>
<?php $this->load->view('common/navbar');?>

<section class="section load-wallet">
	<div class="container">
		<div class="row">
			<div class="wallet text-center">
				<h1 class="title"><span class="wallet-no"></b>Wallet No. <b>0018d01</b></span></h1>
								
			</div>
		</div>
	</div>
</section>

<section class="section wallet-bonus">
	<div class="container">
		<div class="row">
			<p class="wallet-summary">
				Your wallet balance is Ksh <b>10.00</b>
			</p>
		</div>
	</div>
</section>

<section class="section wallet-form-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="wallet-form text-center">
					<div class="form-group">
						<label>Transfer money to another wallet</label>
						<input class="form-control" type="text" id="amount" name="walletno" placeholder="Enter wallet number">
					</div>
					<div class="form-group">
						<label>Enter amount</label>
						<input class="form-control" type="number" id="amount" name="amount" placeholder="Enter amount">
					</div>
					<div class="form-group">
						<a id="topbtn" href="#loadmoney"><button class="btn btn-fill btn-dark col-sm-12 col-xs-12">Confirm first</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="modal fade animated zoomIn" id="loadmoney">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<?=form_open(base_url(),array('class' => 'form-horizontal','role' => 'form'));?>
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
				<h3 class="modal-title text-center fa-color">How to load your wallet</h3>
			</div>
			<div class="modal-body">
				<div class="paybill">
					<h5>Send M-PESA <span class="fa-color">Ksh.<span class="payamount">100</span></span> to Pay Bill Business number <span class="fa-color">991290</span>. Submit the Confirmation Code below.</h5>
					<br>
					<ul class="list-unstyled paybill-menu">
						<li><b>1.</b> Go to M-PESA on your phone</li>
						<li><b>2.</b> Select Paybill option</li>
						<li><b>3.</b> Enter Business no. <b>991290</b></li>
						<li><b>4.</b> Leave the account no. blank</li>
						<li><b>5.</b> Enter the amount <b>Ksh.<span class="payamount">100</span></b></li>
						<li><b>6.</b> Enter your M-PESA PIN and send</li>
						<li><b>7.</b> You will receive a confirmation SMS from M-PESA with a Confirmation Code</li>
						<li><b>8.</b> After you receive the confirmation SMS, enter your phone number and the Confirmation Code</li>
						<li><b>9.</b> Click on Complete</li>
						<li><b>10.</b> Wait for confirmation SMS from <b>MYMSANII</b>.</li>
					</ul>
					<br>
					<div class="form-group paybill-input">
						<label>Phone Number</label>
						<input class="form-control" type="tel" required name="phone" value="<?=$user->phone;?>">
					</div>
					<div class="form-group paybill-input">
						<label>Confirmation Code</label>
						<input class="form-control" type="tel" required name="code" value="">
					</div>							
				</div>
			</div>
			<div class="modal-footer">
				<a href="#"><button type="button" class="btn btn-fill btn-dark pull-left">Not now, later <i class="fa fa-clock-o"></i></button></a>
				<button type="submit" class="btn btn-fill pull-right">Complete <i class="fa fa-check-circle"></i></button>
			</div>
			<?=form_close();?>
		</div>
	</div>
</div>

<?php $this->load->view('common/footer-inner',array('menu' => false));?>