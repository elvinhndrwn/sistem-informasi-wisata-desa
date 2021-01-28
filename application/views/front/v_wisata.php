 <div id="services" class="cards-1">
 	<div class="container">
 		<div class="row">
 			<div class="col-lg-12">
 				<h2><?php echo $title ?></h2>
 				<p class="p-heading p-large">Berikut ini adalah kategori - kategori wisata yang tersedia di Desa Turi</p>
 			</div> <!-- end of col -->
 		</div> <!-- end of row -->
 		<div class="row">
 			<?php foreach($wisata as $row): ?>
 				<div class="col-lg-4">
 					<div data-aos="flip-up">
 						<div class="card">
 							<img class="card-img-top" src="<?php echo base_url('assets/galeri/'.$row->icon) ?>" alt="Card image cap">
 							<div class="card-body">
 								<h5 class="card-title mt-3"><?= $row->nama_objek_wisata ?></h5>
 								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
 								<a href="<?php echo base_url('home/lihat_wisata/'.$row->id_objek_wisata) ?>" class="btn btn-primary">Lihat</a>
 							</div>
 						</div>
 					</div>
 				</div> <!-- end of col -->
 			<?php endforeach; ?>
 		</div> <!-- end of row -->
 	</div> <!-- end of container -->
    </div> <!-- end of cards-1 -->