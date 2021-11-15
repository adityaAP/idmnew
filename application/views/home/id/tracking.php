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
				<?php if (isset($datatrck)&&$datatrck!='') {?>
				<div class="container py-2" style="margin-bottom:60px;">
					<div class="row">
						<div class="col">
							<div class="row">
								<div class="col pb-3">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>PO Number</th>
												<th>Item</th>
												<th>From</th>
												<th>Destination</th>
												<th>Fleet</th>
												<th>The amount of Item</th>
												<th>Shipping Status</th>
											</tr>
										</thead>
										<tbody>
											 <?php if ($datatrck) { foreach ($datatrck as $data ) { ?>
				                                  <tr>
				                                    <td><?=$data['no_po']?></td>
				                                    <td><?=$this->kode_converter->barang($data['nama_barang'])?></td>
				                                    <td><?=$this->kode_converter->kota($data['dari'])?></td>
				                                    <td><?=$this->kode_converter->kota($data['tujuan'])?></td>
				                                    <td><?=$this->kode_converter->armada($data['armada'])?></td>
				                                    <td><?=$data['jumlah_barang']?></td>
				                                    <td><?=$data['status_pengiriman']?></td>

				                                  </tr>                                    
				                                <?php }}?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
					