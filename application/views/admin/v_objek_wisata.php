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
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach($objek as $row): ?>
					<tr>
						<th scope="row"><?= $no++ ?></th>
						<td><?= $row->nama_objek_wisata ?></td>
						<td>
							<a class="btn btn-sm btn-danger btn-hapus"  href="<?php echo base_url('admin/objek_wisata_hapus/'.$row->id_objek_wisata) ?>"><i class="far fa-trash-alt"></i></a>

							<a class="btn btn-sm btn-warning btn-edit" data-toggle="modal" data-target="#modalEdit<?php echo $row->id_objek_wisata ?>"><i class="fas fa-pencil-alt"></i></a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
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
				<form method="post" action="<?php echo base_url('admin/objek_wisata_tambah') ?>" enctype="multipart/form-data">

					<div class="form-group">
						<label>Pilih Kategori</label>
						<select name="id_kategori" class="form-control" required>
							<option disabled selected>-Pilih-</option>
							<?php foreach($kategori as $kat): ?>
								<option value="<?= $kat->id_kategori ?>"><?= $kat->nama_kategori ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label>Nama Objek Wisata</label>
						<input type="text" required name="nama_objek_wisata" class="form-control">
					</div>

					<div class="form-group">
						<label>Lokasi</label>
						<input type="text" required name="lokasi_wisata" class="form-control">
					</div>

					<div class="form-group">
						<label>Icon</label>
						<input type="file" required name="icon" class="form-control">
					</div>

					<div class="form-group">
						<label>Deskripsi wisata</label>
						<textarea required id="editor" name="deskripsi_wisata" class="form-control"></textarea>
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
<?php foreach($objek as $edit): ?>
	<?php $n=1; ?>
	<div class="modal fade" id="modalEdit<?php echo $edit->id_objek_wisata ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Form Edit</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?= base_url('admin/objek_wisata_edit') ?>" enctype="multipart/form-data">
						<input type="hidden" name="id_objek_wisata" value="<?php echo $edit->id_objek_wisata ?>">

						<div class="form-group">
							<label>Pilih Kategori</label>
							<select name="id_kategori" class="form-control" required>
								<option disabled>-Pilih-</option>
								<?php foreach($kategori as $kat): ?>
									<?php if($kat->id_kategori==$edit->id_kategori){$select = 'selected';}else{$select='';} ?>

									<option <?= $select ?> value="<?= $kat->id_kategori ?>"><?= $kat->nama_kategori ?></option>
								<?php endforeach; ?>
							</select>
						</div>

						<div class="form-group">
							<label>Nama Objek Wisata</label>
							<input type="text" required class="form-control" name="nama_objek_wisata" value="<?php echo $edit->nama_objek_wisata ?>">
						</div>

						<div class="form-group">
							<label>Lokasi</label>
							<input type="text" required class="form-control" name="lokasi_wisata" value="<?php echo $edit->lokasi_wisata ?>">
						</div>

						<div class="form-group">
							<label>Icon</label>
							<input type="file" class="form-control" name="icon" value="<?php echo $edit->icon ?>">
						</div>

						<div class="form-group d-flex justify-content-center">
							<img src="<?php echo base_url('assets/galeri/'.$edit->icon) ?>" width="250" height="200" >
						</div>

						<div class="form-group">
							<label>Deskripsi wisata</label>
							<textarea required id="editor_edit" name="deskripsi_wisata" class="editor_edit form-control"><?php echo $edit->deskripsi_wisata ?></textarea>
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