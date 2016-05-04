<?php $this->load->view('common/header');?>
<?php $this->load->view('common/navbar');?>
<?php $this->load->view('common/profile-header',array('content' => 'Lend Money','user' => $user));?>
<section class="section lend-money-section">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h4 class="fa-color">Loan Requests <span class="badge badge-danger">10</span></h4>
				<div id="loans" class="row">
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
			</div>
		</div>
	</div>
</section>
<?php $this->load->view('common/footer-inner',array('menu' =>false));?>