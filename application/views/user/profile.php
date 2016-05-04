<?php $this->load->view('common/header');?>
<?php $this->load->view('common/navbar');?>
<?php $this->load->view('common/profile-header',array('content' => 'Welcome '.$user->name,'user' => $user));?>

<section class="section profile-menu text-center">
	<div class="container">
		<div class="row">
			<h4 class="text-faded fa-color"><b>What you can do with Taslimu</b></h4>
			<div class="col-md-3">
				<div class="lend">
					<a href="<?=base_url('wallet/borrow');?>">
					<img src="<?=base_url();?>images/icons/transfer4.png">
					</a>
					<h4 class="text-faded">Borrow money</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="borrow">
					<a href="<?=base_url('wallet/lend');?>">
					<img src="<?=base_url();?>images/icons/transfer4.png">
					</a>
					<h4 class="text-faded">Lend money</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="transfer">
					<a href="<?=base_url('wallet/load');?>">
					<img src="<?=base_url();?>images/icons/transfer4.png">
					</a>
					<h4 class="text-faded">Deposit money</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="deposit">
					<a href="<?=base_url('wallet/transfer');?>">
					<img src="<?=base_url();?>images/icons/transfer4.png">
					</a>
					<h4 class="text-faded">Transfer money</h4>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $this->load->view('common/footer-inner',array('menu' => false));?>