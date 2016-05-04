<?php $this->load->view('common/header');?>
<?php $this->load->view('common/navbar');?>
<?php $this->load->view('common/profile-header',array('content' => 'Edit your profile','user' => $this->user));?>

<section class="section edit-profile-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="edit-profile-form">
					<?=form_open(base_url('profile/edit',array('class' => 'form-horizontal','role' => 'form')));?>
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="name" value="<?=$this->user->name;?>" class="form-control" required>
						</div>
						<div class="form-group">
							<div class="btn btn-clear"><i class="fa fa-plus"></i> Profile picture</div>
						</div>
						<input type="file" style="visibility: hidden;" name="userfile">
						<div class="form-group">
							<button class="btn btn-fill btn-dark col-xs-12">Update <i class="fa fa-check-circle"></i></button>
							<span class="clearfix"></span>
						</div>
					<?=form_close();?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $this->load->view('common/footer-inner',array('menu' => false));?>