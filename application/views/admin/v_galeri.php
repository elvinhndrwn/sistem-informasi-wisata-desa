<div class="container-fluid">

	<!-- SWEAT ALERRTTTT -->
	<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('alert') ?>"></div>

	<div class="d-sm-flex align-items-center  mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
		<button type="button" class="btn btn-success ml-2 btn-sm" data-toggle="modal" data-target="#modalTambah">
			<i class="fas fa-plus"></i>
		</button>
	</div>
	
	<div class="row">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Objek Wisata</th>
						<th scope="col">Foto</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach($galeri as $row): ?>
					<tr>
						<th scope="row"><?= $no++ ?></th>
						<td><?= $row->nama_objek_wisata ?></td>
						<td>
							<img src="<?= base_url('assets/galeri/'.$row->foto)  ?>" width="100" height="100">
						</td>
						<td>
							<a class="btn btn-sm btn-danger btn-hapus"  href="<?php echo base_url('admin/galeri_hapus/'.$row->id_galeri) ?>"><i class="far fa-trash-alt"></i></a>

							<a class="btn btn-sm btn-warning btn-edit" data-toggle="modal" data-target="#modalEdit<?php echo $row->id_galeri ?>"><i class="fas fa-pencil-alt"></i></a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

<!-- Modal Tambah-->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Tambah</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php echo base_url('admin/galeri_tambah') ?>" enctype="multipart/form-data">
					<div class="form-group">
						<label>Pilih Objek Wisata</label>
						<select name="id_objek_wisata" class="form-control" required>
							<option disabled selected>-Pilih-</option>
							<?php foreach($objek_wisata as $ow): ?>
								<option value="<?= $ow->id_objek_wisata ?>"><?= $ow->nama_objek_wisata ?></option>
							<?php endforeach; ?>
						</select>
					</div>

					<div class="form-group">
						<label>Foto</label>
						<input type="file" required name="foto" class="form-control">
					</div>

					<div class="form-group">
						<label>Deskripsi</label>
						<textarea class="form-control" name="deskripsi"></textarea>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-success">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>


<!-- Modal Edit -->
<?php foreach($galeri as $edit): ?>
	<div class="modal fade" id="modalEdit<?php echo $edit->id_galeri ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Form Edit</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?= base_url('admin/galeri_edit') ?>" enctype="multipart/form-data">
						<input type="hidden" name="id_galeri" value="<?php echo $edit->id_galeri ?>">

						<div class="form-group">
							<label>Pilih Objek Wisata</label>
							<select name="id_objek_wisata" class="form-control" required>
								<option disabled selected>-Pilih-</option>
								<?php foreach($objek_wisata as $ow): ?>
									<?php if($ow->id_objek_wisata==$edit->id_objek_wisata){$select='selected';}else{$select='';} ?>
									<option <?= $select ?> value="<?= $ow->id_objek_wisata ?>"><?= $ow->nama_objek_wisata ?></option>
								<?php endforeach; ?>
							</select>
						</div>

						<div class="form-group">
							<label>Foto</label>
							<input type="file" class="form-control" name="foto" value="<?php echo $edit->foto ?>">
						</div>

						<div class="form-group d-flex justify-content-center">
							<img src="<?php echo base_url('assets/galeri/'.$edit->foto) ?>" width="250" height="200" >
						</div>

						<div class="form-group">
							<label>Deskripsi</label>
							<textarea class="form-control" name="deskripsi"><?php echo $edit->deskripsi ?></textarea>
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Edit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php endforeach; ?>