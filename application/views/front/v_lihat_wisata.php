<style type="text/css">
	.btn-mdl{
		cursor: pointer;
	}
</style>
<div id="services" class="cards-1">
	<div class="container">
		<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('alert') ?>"></div>
		<div class="row">
			<div class="col-lg-12">
				<?php foreach($wisata as $row): ?>
					<h2 class="text-left"><?php echo $row->nama_objek_wisata ?></h2>
					<p class="text-left" style="margin-top: -15px"> 
						Penulis <strong>Admin</strong> | 
						<?php echo date('d - F - Y', strtotime($row->created_at)) ?> |
						Yogyakarta.
					</p>

					<img src="<?php echo base_url('assets/galeri/'.$row->icon) ?>"  width="550" height="350" style="float: left" class="img-fluid">

					<div class="row" style="float: left;">
						<div class="col-lg-8" style="text-align: justify; padding-top: 20px; ">
							<?php echo $row->deskripsi_wisata ?>

							Bagikan artikel:
							<div class="row">
								<div class="col mb-3 mt-2">
									<a href="" class="btn btn-primary btn-sm"><i class="fab fa-facebook-f ml-3 mr-3"></i></a>
									<a href="" class="btn btn-info btn-sm"><i class="fab fa-twitter ml-3 mr-3"></i></a>
									<a href="" class="btn btn-success btn-sm"><i class="fab fa-whatsapp ml-3 mr-3"></i></a>
									<a href="" class="btn btn-danger btn-sm"><i class="fab fa-instagram ml-3 mr-3"></i></a>
									<a href="" class="btn btn-warning btn-sm"><i class="fas fa-envelope ml-3 mr-3"></i></a>
								</div>	
							</div>
							<div class="row">
								<div class="col-lg-2">
									<i class="fas fa-user-circle fa-6x" style="opacity: 0.5; margin-left: 20px"></i>
								</div>

								<div class="col-lg-10">
									<form method="post" action="<?php echo base_url('home/kirim_komentar') ?>">
										<input type="hidden" name="id_objek_wisata" value="<?php echo $id_objek_wisata ?>">
										<div class="form-group">
											<textarea required id="editor" name="isi_komentar" class="form-control">Komentar...</textarea>
										</div>

										<div class="row">
											<div class="col-lg-8">
												<div class="input-group input-group-sm mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-at"></i></span>
													</div>
													<input type="email" placeholder="Email" name="email" required class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
												</div>

												<div class="input-group input-group-sm mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-user-alt"></i></span>
													</div>
													<input type="text" placeholder="Nama" name="nama" required class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
												</div>
											</div>

											<div class="col-lg-4">
												<button type="submit" class="btn btn-sm btn-success"><i class="fas fa-paper-plane"></i> Kirim </button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>

						<div class="col-lg-4"></div>
					</div>
				<?php endforeach; ?>
			</div> <!-- end of col -->
		</div> <!-- end of row -->

		<div class="row mt-4">
			<div class="col-lg-8">
				<h6 class="text-left" style="opacity: 0.7"><?php echo $jml_komentar . ' Komentar'  ?></h6>
				<hr style="border-color: black; opacity: 0.4">

				<div id="section-komentar">
					<?php foreach($komentar as $komen): ?>
						<div class="d-flex flex-row">
							<div class="p-2">
								<img src="<?php echo base_url('assets/png/profile.png') ?>" style="width: 40px">
							</div>
							<div class="p-2">
								<div class="card">
									<div class="card-body text-left" style="margin-left: -10px">
										<h6 style="margin-top: -35px;"><?php echo ucwords($komen->nama) ?></h6>
										<p style="margin-top: -15px"><?php echo $komen->isi_komentar ?></p>
										<span><?= date('d M Y - H:i', strtotime($komen->tgl_komentar)) ?> 
										<span class="badge badge-pill badge-primary ml-5 btn-mdl" data-toggle="modal" data-target="#balas<?php echo $komen->id_komentar ?>">
											Balas
										</span>
									</span>
								</div>

								<?php $cek = $this->db->query("
									SELECT * FROM tb_balas_komentar WHERE id_komentar_b = '$komen->id_komentar'
									"); ?>

									<?php if($cek->num_rows() > 0){ ?>
										<?php foreach($cek->result() as $bls): ?>
											<div class="d-flex flex-row mt-3">
												<div class="p-2">
													<img src="<?php echo base_url('assets/png/profile.png') ?>" style="width: 40px">
												</div>
												<div class="p-2">
													
													<div class="card" style="margin-bottom: -10px; margin-top: 20px">
														<div class="card-body text-left" style="margin-left: -10px">
															<h6 style="margin-top: -35px;"><?php echo ucwords($bls->nama_b) ?></h6>
															<p style="margin-top: -15px"><?php echo $bls->isi_komentar_b ?></p>
															<span><?= date('d M Y - H:i', strtotime($bls->tgl_komentar_b)) ?>
														</span>
													</div>
												</div>
												
											</div>
										</div>
									<?php endforeach; } ?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>


		<!-- Modal -->
		<?php foreach($komentar as $balas): ?>
			<div class="modal fade" id="balas<?php echo $balas->id_komentar ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Balas Komentar: <?= ucwords($balas->nama) ?></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="col-lg-12">
								<form method="post" action="<?php echo base_url('home/balas_komentar/'.$balas->id_objek_wisata) ?>">
									<input type="hidden" name="id_objek_wisata" value="<?php echo $id_objek_wisata ?>">
									<div class="form-group">
										<input type="hidden" name="id_komentar" value="<?php echo $balas->id_komentar ?>">
										<textarea required id="editorBalas" name="isi_komentar" class="form-control">Komentar...</textarea>
									</div>

									<div class="row">
										<div class="col-lg-8">
											<div class="input-group input-group-sm mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-at"></i></span>
												</div>
												<input type="email" placeholder="Email" name="email" required class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
											</div>

											<div class="input-group input-group-sm mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-user-alt"></i></span>
												</div>
												<input type="text" placeholder="Nama" name="nama" required class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
											</div>
										</div>

										<div class="col-lg-4">
											<button type="submit" class="btn btn-sm btn-success"><i class="fas fa-paper-plane"></i> Kirim </button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>


	</div> <!-- end of container -->
</div> <!-- end of cards-1 -->


<script src="<?php echo base_url('assets/sb-admin/') ?>vendor/jquery/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
	const flashData = $('.flash-data').data('flashdata');

	if(flashData)
	{
		swal({
			title: 'Komentar berhasil dikirim',
			text: '' + flashData,
			icon: 'success',
			buttons: false,
			timer: 4000
		});
	}
</script>