<?php $this->load->view('common/header');?>
<?php $this->load->view('common/navbar');?>
<?php $this->load->view('common/profile-header',array('content' => 'My Networks | <a href="'.base_url('network/add').'"><i class="fa fa-plus"></i> New network</a>','user' => $user));?>

<section class="section transfer-money-section">
	<div class="container">
		<div class="row">
			<?php for($i=0;$i<10;$i++):?>
				<div class="col-md-10 col-md-offset-1">
					<div class="networks-wrapper shadow">					
						<div class="col-md-3">							
							<div class="network-img unetwork-img text-center">
							<a href="#">
								<img src="<?=base_url();?>images/people/gp.png">
							</a>
							</div>							
						</div>
						<div class="col-md-9">
							<div class="unetwork-details">
								<h4>Self help group</h4>
								<p>We loan because: As travelers we have seen poverty first hand and are committed to making the world a better place for all.</p>
							</div>
							<hr class="divider">
							<div class="unetwork-summary">
								<ul class="list-unstyled list-inline unetwork-summary">
									<li><i class="fa fa-users fa-color"></i> 10 members</li>
									<li><i class="fa fa-money fa-color"></i> ksh 50,000</li>
									<li><i class="fa fa-folder-open fa-color"> </i> 20 loans</li>
									<li><a href="<?=base_url('network/page/self-help-group');?>"><i class="fa fa-search fa-color"></i> Network Profile</a></li>
								</ul>
							</div>
						</div>
						<span class="clearfix">
					</div>
					<span class="clearfix"></span>
				</div>
			<?php endfor;?>
		</div>
	</div>	
</section>

<?php $this->load->view('common/footer-inner',array('menu' => false));?>