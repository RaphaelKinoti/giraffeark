<?php $this->load->view('common/header');?>
<?php $this->load->view('common/navbar');?>
<?php $this->load->view('common/profile-header',array('content' => 'Welcome '.$user->name,'user' => $user));?>

<section class="section quick-guide text-center">
	<div class="container">
		<div class="row">
			<h3 class="text-faded">Quick guide on how to get started</h3>
			<div class="steps">
				<div class="col-md-4">
					<div class="step">
						<h1>1</h1>
						<h3>Get wallet</h3>
						<hr class="divider">
						<ul class="list-unstyled">
							<li><i class="fa fa-check"></i> Create your wallet</li>
							<li><i class="fa fa-check"></i> Load money<?=nbs(9);?></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="step">
						<h1>2</h1>
						<h3>Use your money</h3>
						<hr class="divider">
						<ul class="list-unstyled">
							<li><i class="fa fa-check"></i> Pay with Taslimu<?=nbs(0);?></li>
							<li><i class="fa fa-check"></i> Lend money<?=nbs(7);?></li>
							<li><i class="fa fa-check"></i> Borrow money<?=nbs(3);?></li>
							<li><i class="fa fa-check"></i> Donate money<?=nbs(3);?></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="step">
						<h1>3</h1>
						<h3>A network</h3>
						<hr class="divider">
						<ul class="list-unstyled">
							<li><i class="fa fa-check"></i> Create a network</li>
							<li><i class="fa fa-check"></i> Invite friends<?=nbs(7);?></li>
							<li><i class="fa fa-check"></i> Join network<?=nbs(8);?></li>
						</ul>
					</div>
				</div>
				<span class="clearfix"></span>
				<div class="got-it">
					<a href="<?=base_url('profile/loadwallet');?>"><button class="btn btn-fill">Okay got it, Create my wallet</button></a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $this->load->view('common/footer-inner',array('menu' => false));;?>