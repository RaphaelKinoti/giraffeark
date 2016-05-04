<?php $this->load->view('common/header');?>
<?php $this->load->view('common/navbar');?>
<?php $this->load->view('common/profile-header',array('content' => 'Self Help Group','user' => $user,'network' => $network));?>
<section class="section network-section">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="shadow network-tabs">
					<div role="tabpanel">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active">
								<a href="#activity" aria-controls="home" role="tab" data-toggle="tab">Activity</a>
							</li>
							<li role="presentation">
								<a href="#members" aria-controls="tab" role="tab" data-toggle="tab">Members</a>
							</li>
							<li role="presentation">
								<a href="#loans" aria-controls="tab" role="tab" data-toggle="tab">Loans</a>
							</li>
							<li role="presentation">
								<a href="#invite" aria-controls="tab" role="tab" data-toggle="tab">Invite</a>
							</li>
						</ul>
						
						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="activity">
								<div class="share-form">
									<?=form_open(base_url('#'),array('class' => 'form-horizontal','role' => 'form'));?>
									<div class="form-group">
										<input type="text" placeholder="What's up?" maxlength="140" name="post" class="form-control">
									</div>
									<div class="form-group">
										<button class="btn btn-fill pull-right">Share</button>
									</div>
									<?=form_close();?>
								</div>
								<?php for($i=0;$i<8;$i++):?>
								<div class="media">
									<a class="pull-left" href="#">
										<img class="media-object post-avatar" src="<?=base_url();?>images/people/avatar.png" alt="Image">
									</a>
									<div class="media-body">
										<h5 class="fa-color">John Doe</h5>
										<p>We loan because: As travelers we have seen poverty first hand and are committed to making the world a better place for all.</p>
										<p class="pull-right timer"><i class="fa fa-clock-o"></i> 2 hours ago</p>
									</div>
								</div>
								<hr class="divider">
								<?php endfor;?>
							</div>
							<div role="tabpanel" class="tab-pane" id="members">
								<?php for($i<0; $i<10; $i++):?>
								<div class="col-md-6">
									<div class="media">
										<a class="pull-left" href="#">
											<img class="media-object post-avatar" src="<?=base_url();?>images/people/avatar.png" alt="Image">
										</a>
										<div class="media-body">
											<h5 class="fa-color">John Doe</h5>
											<ul class="list-unstyled">
												<li><i class="fa fa-phone fa-color"></i> 0728668206</li>
												<li><i class="fa fa-envelope-o fa-color"></i><a href="mailto:kinoti.raphs@gmail.com"> kinoti.raphs@gmail.com</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="media">
										<a class="pull-left" href="#">
											<img class="media-object post-avatar" src="<?=base_url();?>images/people/avatar.png" alt="Image">
										</a>
										<div class="media-body">
											<h5 class="fa-color">John Doe</h5>
											<ul class="list-unstyled">
												<li><i class="fa fa-phone fa-color"></i> 0728668206</li>
												<li><i class="fa fa-envelope-o fa-color"></i><a href="mailto:kinoti.raphs@gmail.com"> kinoti.raphs@gmail.com</a></li>
											</ul>
										</div>
									</div>
								</div>
								<span class="clearfix"></span>
								<hr class="divider">
								<?php endfor;?>
							</div>
							<div role="tabpanel" class="tab-pane" id="loans">
								<?php for($i=0; $i<6; $i++):?>
								<div class="col-md-4">
									<div class="loanee">
										<div class="loan-avatar text-center">
											<img src="<?=base_url();?>images/people/avatar.png">
										</div>
										<hr class="divider">
										<div class="loan-details">
											<ul class="list-unstyled loan-details-list">
												<li><i class="fa fa-user fa-color"></i> John Doe</li>
												<li><i class="fa fa-phone fa-color"></i> 0728668206</li>
												<li><i class="fa fa-money fa-color"></i> Ksh 5000</li>
												<li><i class="fa fa-calendar fa-color"></i> Repay (2 months from now)</li>
												<li><i class="fa fa-clock-o fa-color"></i> 70% funded</li>
											</ul>
											<div onclick="lendmodal();" class="loan-footer shadow text-center">
												Lend
											</div>
											<script type="text/javascript">
												function lendmodal()
												{
													$('#lendmodal' + 1).modal('show');
																								}
											</script>
											<div class="modal fade" id="lendmodal1">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
															<h4 class="modal-title text-center">Lend <b>John Doe</b> money</h4>
														</div>
														<div class="modal-body">
															<div class="form-group">
																Amount requested <b><span class="fa-color">Ksh 5,000</span></b>
															</div>
															<div class="form-group">
																Amount remaining <b><span class="fa-color">Ksh 2,000</span> (70% funded)</b>
															</div>
															<div class="form-group">
																<input type="number" name="amount" placeholder="Enter amount to lend" class="form-control">
															</div>
															<div id="oweamount" class="form-group">
																<b>John Doe now owes you <span class="fa-color">ksh 1,100</span></b>
															</div>
														</div>
														<div class="modal-footer">
															<button type="submit" class="btn btn-fill">Lend <i class="fa fa-check-circle"></i></button>
															<div class="loader text-center">
																<img src="<?=base_url();?>images/gifs/loader.gif">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php endfor;?>
								<span class="clearfix"></span>
							</div>
							<div role="tabpanel" class="tab-pane" id="invite">
								<div class="registered-accounts">
									<h4 class="fa-color">Invite registered accounts</h4>
									<?=form_open(base_url(),array('class' => 'form-inline','role' => 'form'));?>
									<div class="form-group">
										<label>Phone Number</label>
										<select class="form-control invite-form-control" name="phones" required>
											<option value="">Select from list</option>
											<option value="0728668206">0728668206</option>
										</select>
									</div>
									<div class="form-group">
										<label>Or Email</label>
										<select class="form-control invite-form-control" name="emails" required>
											<option value="">Select from list</option>
											<option value="0728668201">kinoti.raphs@gmail.com</option>
										</select>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-fill col-xs-12">Invite <i class="fa fa-check-circle"></i></button>
										<span class="clearfix"></span>
									</div>
									<?=form_close();?>
								</div>
								<hr class="divider">
								<div class="new-accounts">
									<h4 class="fa-color">Invite new accounts</h4>
									<?=form_open(base_url(),array('class' => 'form-inline','role' => 'form'));?>
									<div class="form-group">
										<label>Phone Number</label>
										<input type="text" name="phone" placeholder="Enter phone number" required class="form-control invite-form-control">
									</div>
									<div class="form-group">
										<label>Or Email</label>
										<input type="text" name="email" placeholder="Enter email address" required class="form-control invite-form-control">
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-fill col-xs-12">Invite <i class="fa fa-check-circle"></i></button>
										<span class="clearfix"></span>
									</div>
									<?=form_close();?>
								</div>
								<hr class="divider">
								<div class="share-accounts">
									<h4 class="fa-color">Invite your social network</h4>
									<!-- Go to www.addthis.com/dashboard to customize your tools -->
									<div class="addthis_sharing_toolbox"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<span class="clearfix"></span>
		</div>
	</div>
</section>
<?php $this->load->view('common/footer-inner',array('menu' => false));?>