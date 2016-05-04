<section class="section landing-networks text-center">
	<div class="container">	
		<div class="row">

			<h1 class="text-center">Our networks</h1>
			<div id="owl-networks" class="owl-carousel">
				<?php for($i = 0; $i < 12; $i++):?>
					<div class="item">
						<a href="#">
							<div class="network-img">
								<img src="<?=base_url();?>images/people/gp.png">
							</div>
						</a>
						<h4 class="black">Self help group</h4>
						<p>We loan because: As travelers we have seen poverty first hand and are committed to making the world a better place for all.</p>
						<button class="btn btn-scheme"> Join network</button>
					</div>
				<?php endfor;?>
			</div>

		</div>
	</div>
</section>