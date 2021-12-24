<style type="text/css">
	section.timeline .timeline-box.left.first:before,
	section.timeline .timeline-box.rightfirst:before {
		background: #0088CC;
		box-shadow: 0 0 0 3px #FFF, 0 0 0 6px #0088CC;
	}
	section.timeline .timeline-box.left.second:before,
	section.timeline .timeline-box.right.second:before {
		background: #0088CC;
		box-shadow: 0 0 0 3px #FFF, 0 0 0 6px #0088CC;
	}
</style>
<div role="main" class="main">
				<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-9" style="background-image: url(<?=base_url('assets/home/')?>img/page-header/page-header-about-us.jpg);">
					<div class="container">
						<div class="row mt-5">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="text-9 font-weight-bold">Tracking</h1>
							</div>
						</div>
					</div>
				</section>
				<?php if (isset($datatrck)&&$datatrck!='') {?>
				<div class="container py-2">
					<div class="row">
					<div class="col-lg-4">
						<div class="card" style="border-radius:15px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
							<div class="card-body">
								<table class="table table-striped">
									<tr>
										<th>PO Number</th>
										<th>:</th>
										<th><?=$datatrck['no_po']?></th>
									</tr>
									<tr>
										<th>Item</th>
										<th>:</th>
										<th><?=$datatrck['nama_barang']?></th>
									</tr>
									<tr>
										<th>From</th>
										<th>:</th>
										<th><?=$this->kode_converter->kota($datatrck['dari'])?></th>
									</tr>
									<tr>
										<th>Destination</th>
										<th>:</th>
										<th><?=$this->kode_converter->kota($datatrck['tujuan'])?></th>
									</tr>
									<tr>
										<th>Fleet</th>
										<th>:</th>
										<th><?=$this->kode_converter->armada($datatrck['armada'])?></th>
									</tr>
									<tr>
										<th>The amount of Item</th>
										<th>:</th>
										<th><?=$datatrck['jumlah_barang']?></th>
									</tr>
									</table>
							</div>
						</div>
						
					</div>
					<div class="col-lg-8">
						<div class="card" style="border-radius:15px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
							<div class="card-body">
								<section class="timeline" id="timeline" >
									<div class="timeline-body">
										<?php if ($drtfirst!='') {  ?>
											<div class="timeline-date">
												<h3 class="text-primary font-weight-bold" style="font-size:14px;"><?=date('d-m-Y H:i',strtotime($drtfirst['created_rp']))?></h3>
											</div>
											<article class="timeline-box right second">
												<div class="portfolio-item">
													<p style="font-weight:bold;"></p>
													<p class="text-primary" style="font-weight:bold;"><?=$drtfirst['status']?></p>
												</div>
											</article>								
										<?php } ?>
										<?php if ($drt!='') { foreach ($drt as  $d) { ?>
											<div class="timeline-date">
												<h3 class="font-weight-bold"><?=date('d-m-Y H:i',strtotime($d['created_rp']))?></h3>
											</div>
											<article class="timeline-box right first">
												<div class="portfolio-item">
													<p style="font-weight:bold;"></p>
													<p style="font-weight:bold;"><?=$d['status']?></p>
												</div>
											</article>								
										<?php }} ?>
									</div>
									</section>
							</div>
						</div>
						
					</div>	
					</div>
				</div>
				<?php } ?>				
				<div class="container py-4">
					<div class="row mb-5">
						<div class="col">

							<form class="contact-form-recaptcha-v3">
								<div class="contact-form-success alert alert-success d-none mt-4">
									<strong>Success!</strong> Your message has been sent to us.
								</div>
							
								<div class="contact-form-error alert alert-danger d-none mt-4">
									<strong>Error!</strong> There was an error sending your message.
									<span class="mail-error-message text-1 d-block"></span>
								</div>
								
								<div class="form-row">
									<div class="form-group col-lg-12">
										<label class="required font-weight-bold text-dark text-4">Nomor PO</label>
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="ponumb" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="submit" value="Track" class="btn btn-primary btn-modern" data-loading-text="Loading...">
									</div>
								</div>
							</form>

						</div>
					</div>

				</div>				

