<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="footer-col">
					<h4>About Evolo</h4>
					<p>We're passionate about offering some of the best business growth services for startups</p>
				</div>
			</div> <!-- end of col -->
			<div class="col-md-4">
				<div class="footer-col middle">
					<h4>Important Links</h4>
					<ul class="list-unstyled li-space-lg">
						<li class="media">
							<i class="fas fa-square"></i>
							<div class="media-body">Our business partners <a class="turquoise" href="#your-link">startupguide.com</a></div>
						</li>
						<li class="media">
							<i class="fas fa-square"></i>
							<div class="media-body">Read our <a class="turquoise" href="terms-conditions.html">Terms & Conditions</a>, <a class="turquoise" href="privacy-policy.html">Privacy Policy</a></div>
						</li>
					</ul>
				</div>
			</div> <!-- end of col -->
			<div class="col-md-4">
				<div class="footer-col last">
					<h4>Social Media</h4>
					<span class="fa-stack">
						<a href="#your-link">
							<i class="fas fa-circle fa-stack-2x"></i>
							<i class="fab fa-facebook-f fa-stack-1x"></i>
						</a>
					</span>
					<span class="fa-stack">
						<a href="#your-link">
							<i class="fas fa-circle fa-stack-2x"></i>
							<i class="fab fa-twitter fa-stack-1x"></i>
						</a>
					</span>
					<span class="fa-stack">
						<a href="#your-link">
							<i class="fas fa-circle fa-stack-2x"></i>
							<i class="fab fa-google-plus-g fa-stack-1x"></i>
						</a>
					</span>
					<span class="fa-stack">
						<a href="#your-link">
							<i class="fas fa-circle fa-stack-2x"></i>
							<i class="fab fa-instagram fa-stack-1x"></i>
						</a>
					</span>
					<span class="fa-stack">
						<a href="#your-link">
							<i class="fas fa-circle fa-stack-2x"></i>
							<i class="fab fa-linkedin-in fa-stack-1x"></i>
						</a>
					</span>
				</div> 
			</div> <!-- end of col -->
		</div> <!-- end of row -->
	</div> <!-- end of container -->
</div> <!-- end of footer -->  
<!-- end of footer -->


<!-- Copyright -->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Inovatik</a> - All rights reserved // Elvin Dwi Hendrawan</p>
			</div> <!-- end of col -->
		</div> <!-- enf of row -->
	</div> <!-- end of container -->
</div> <!-- end of copyright --> 
<!-- end of copyright -->


<!-- Scripts -->
<script src="<?= base_url('assets/') ?>js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="<?= base_url('assets/') ?>js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
<script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
<script src="<?= base_url('assets/') ?>js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
<script src="<?= base_url('assets/') ?>js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
<script src="<?= base_url('assets/') ?>js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
<script src="<?= base_url('assets/') ?>js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
<script src="<?= base_url('assets/') ?>js/scripts.js"></script> <!-- Custom scripts -->
<script type="text/javascript" src="<?php echo base_url('assets/') ?>aos.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
	AOS.init({duration: 1500, easing: "ease"});

</script>

<script src="<?php echo base_url() ?>assets/ckeditor-basic/ckeditor.js"></script>

<script type="text/javascript">


	CKEDITOR.replace('editor' ,{
		filebrowserImageBrowseUrl : '<?php echo base_url('assets/kcfinder');?>',
		height: "100px"

	});

	CKEDITOR.replace('editorBalas' ,{
		filebrowserImageBrowseUrl : '<?php echo base_url('assets/kcfinder');?>',
		height: "100px"

	});

	CKEDITOR.config.removePlugins = 'elementspath';
</script>
</body>
</html>