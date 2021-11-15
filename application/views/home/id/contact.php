<div role="main" class="main">
				<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-9" style="background-image: url(<?=base_url('assets/home/')?>img/page-header/page-header-about-us.jpg);">
					<div class="container">
						<div class="row mt-5">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="text-9 font-weight-bold">Kontak Kami</h1>
							</div>
						</div>
					</div>
				</section>
				<div class="container py-4">

					<div class="row mb-5">
						<div class="col">

							<form id="contact-form" action="<?=site_url('home/contactus')?>" method="POST">
								<div class="contact-form-success alert alert-success d-none mt-4">
									<strong>Sukses!</strong> Pesan Anda telah dikirimkan kepada kami.
								</div>
							
								<div class="contact-form-error alert alert-danger d-none mt-4">
									<strong>Error!</strong> Terjadi kesalahan saat mengirim pesan Anda.
									<span class="mail-error-message text-1 d-block"></span>
								</div>
								
								<div class="form-row">
									<div class="form-group col-lg-6">
										<label class="required font-weight-bold text-dark text-2">Nama Lengkap</label>
										<input type="text" value="" data-msg-required="Masukan nama anda." maxlength="100" class="form-control" name="name" required>
									</div>
									<div class="form-group col-lg-6">
										<label class="required font-weight-bold text-dark text-2">Email</label>
										<input type="email" value="" data-msg-required="Masukan email anda." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label class="font-weight-bold text-dark text-2">Subjek</label>
										<input type="text" value="" data-msg-required="Masukan subjek." maxlength="100" class="form-control" name="subject" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label class="required font-weight-bold text-dark text-2">Pesan</label>
										<textarea maxlength="5000" data-msg-required="Masukan pesan." rows="5" class="form-control" name="message" required></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="submit" value="Kirim Pesan" class="btn btn-primary btn-modern" data-loading-text="Loading...">
									</div>
								</div>
							</form>

						</div>
					</div>
					<div class="row mb-5">
						<div class="col-lg-4">
							
							<div class="overflow-hidden mb-3">
								<h4 class="pt-5 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200" data-plugin-options="{'accY': -200}"><strong>IKUTI KAMI</strong></h4>
							</div>
							<div class="overflow-hidden mb-3">
								<p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600" data-plugin-options="{'accY': -200}">Keberhasilan dan perkembangan perusahaan memiliki banyak faktor yang mempengaruhi di dalam maupun di luar perusahaan itu sendiri.</p>
								
							</div>
							<div class="overflow-hidden">
								<ul class="social-icons appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400" data-plugin-options="{'accY': -200}"> 
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>

						</div>
						<div class="col-lg-4 offset-lg-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800" data-plugin-options="{'accY': -200}">

							<h4 class="pt-5"><strong>KANTOR KAMI</strong></h4>
							<ul class="list list-icons list-icons-style-3 mt-2">
								<li><i class="fas fa-map-marker-alt top-6"></i> <strong>Alamat:</strong> Mutiara Gading blok E nomor 5Jl. Ketileng, Klipang, Semarang</li>
								<li><i class="fas fa-phone top-6"></i> <strong>Telepon:</strong> (024) 76737893</li>								
								<li><i class="fas fa-map-marker-alt top-6"></i> <strong>Alamat:</strong> Ruko Tambun City RG.08 Jln. Sultan Hasanudin, Tambun Selatan, Bekasi</li>
								<li><i class="fas fa-phone top-6"></i> <strong>Telepon:</strong> (021) 89528543</li>
								<li><i class="fas fa-envelope top-6"></i> <strong>Email:</strong> <a href="mailto:info@ptintandayamandiri.co.id">info@ptintandayamandiri.co.id</a></li>
							</ul>
							
						</div>
						<div class="col-lg-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1000" data-plugin-options="{'accY': -200}">

							<h4 class="pt-5"><strong>Jam Operasional</strong></h4>
							<ul class="list list-icons list-dark mt-2">
								<li><i class="far fa-clock top-6"></i> Senin - Sabtu (09:00 - 17:30)</li>
								<li><i class="far fa-clock top-6"></i>Sabtu & Minggu - Tutup</li>
							</ul>

						</div>
					</div>

				</div>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div  class="google-map m-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" style="height:450px;"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Mutiara%20Gading%20Residence%20E-5,%20Sendangmulyo,%20Kec.%20Tembalang,%20Kota%20Semarang,%20Jawa%20Tengah%2050272&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
