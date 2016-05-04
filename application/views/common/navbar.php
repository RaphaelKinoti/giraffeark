<nav class="navbar navbar-default navbar-fixed-top shadow" role="navigation">
<div class="container">
	<div class="row">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?=base_url();?>"><img class="brand-logo" src="<?=base_url();?>images/logos/taslimu.png"></a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav navlinks">
				<?php if($this->uid):?>
					<li><a href="<?=base_url('profile/page/'.$this->users->log('url'));?>">My Wallet</a></li>
					<li><a href="<?=base_url('profile/welcome/'.$this->users->log('url'));?>">Quick Guide</a></li>
					<li><a href="<?=base_url('profile/loadwallet/'.$this->users->log('url'));?>">Top Up</a></li>
					<li><a href="<?=base_url('network/unetworks');?>">My Networks</a></li>
				<?php else:?>
					<li><a href="<?=base_url('#how-it-works');?>">How it works</a></li>
				<?php endif;?>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				<?php if($this->uid):?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?=base_url();?>images/people/<?=$this->users->log('pic');?>">
							 <span class="caret"></span>
						</a>
						<ul class="dropdown-menu animated zoomIn">
							<li><a href="<?=base_url('profile/edit');?>">Edit Profile</a></li>
							<li><a href="<?=base_url('profile/logout');?>">Logout</a></li>
							<li class="avatar-name"><a href="#"><?=$this->users->log('name');?></a></li>
						</ul>
					</li>

				<?php else:?>
					<li><a href="<?=base_url('welcome/signin');?>"><button class="btn btn-clear">Signin</button></a></li>
					<li><a href="<?=base_url('welcome/signup');?>"><button class="btn btn-fill col-xs-12 btn-dark">Create Account</button></a></li>
				<?php endif;?>
			</ul>
			</div>
		</div>
	</div>
</nav>