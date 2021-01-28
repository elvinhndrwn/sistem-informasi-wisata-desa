 <style type="text/css">
 	.misi ol li{
 		margin-bottom: 10px
 	} 
 </style>

 <div id="services" class="cards-1">
 	<div class="container">
 		<div class="row">
 			<div class="col-lg-12">
 				<h2>Galeri</h2>
 				<p class="p-heading p-large">Berikut ini galeri -galeri wisata di Desa Turi</p>
 			</div> <!-- end of col -->
 		</div> <!-- end of row -->
 		<div class="row">
 			<?php foreach($galeri as $gal): ?>
 				<div class="col-lg-4">
 					<div data-aos="fade-up">
 						<a href="<?php echo base_url('home/galeri_details/'.$gal->id_galeri) ?>">
 							<div class="" style="width: 18rem;">
 								<img class="card-img-top" src="<?php echo base_url('assets/galeri/'.$gal->foto) ?>" alt="Card image cap">
 								<div class="card-body">
 									<p class="card-text mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
 								</div>
 							</div>
 						</a>
 					</div>
 				</div> <!-- end of col -->
 			<?php endforeach; ?>
 		</div> <!-- end of row -->
 	</div> <!-- end of container -->
</div> <!-- end of cards-1 -->