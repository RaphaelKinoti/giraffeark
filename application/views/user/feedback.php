<?php $this->load->view('common/header');?>
<?php $this->load->view('common/navbar');?>

<section class="section feedback-section text-center">
	<div class="container">
		<div class="row">
			<div class="feedback">
				<i class="fa fa-check-circle"></i>
				<p><?=(!empty($data['message'])) ? $data['message'] : 'Thanks for signing up at Taslimu. We have sent you an email with a link to verify your account.';?></p>
				<br>
				<img src="<?=base_url();?>images/gifs/loader.gif">
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
	setTimeout(function(){
		window.location = "<?=base_url();?>";
	},6000);
</script>

<?php $this->load->view('common/footer-inner',array('menu' => true));?>