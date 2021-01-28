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
						<th scope="col">Kategori</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach($kategori as $row): ?>
					<tr>
						<th scope="row"><?= $no++ ?></th>
						<td><?= $row->nama_kategori ?></td>
						<td>
							<a class="btn btn-sm btn-danger btn-hapus"  href="<?php echo base_url('admin/kategori_hapus/'.$row->id_kategori) ?>"><i class="far fa-trash-alt"></i></a>

							<a class="btn btn-sm btn-warning btn-edit" data-toggle="modal" data-target="#modalEdit<?php echo $row->id_kategori ?>"><i class="fas fa-pencil-alt"></i></a>
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
				<form method="post" action="<?php echo base_url('admin/kategori_tambah') ?>" enctype="multipart/form-data">
					<div class="form-group">
						<label>Nama Kategori</label>
						<input type="text" required name="nama_kategori" class="form-control">
					</div>

					<div class="form-group">
						<label>Icon Kategori</label>
						<input type="file" required name="icon_kategori" class="form-control">
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
<?php foreach($kategori as $edit): ?>
	<div class="modal fade" id="modalEdit<?php echo $edit->id_kategori ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Form Edit</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?= base_url('admin/kategori_edit') ?>" enctype="multipart/form-data">
						<input type="hidden" name="id_kategori" value="<?php echo $edit->id_kategori ?>">

						<div class="form-group">
							<label>Nama Kategori</label>
							<input type="text" class="form-control" name="nama_kategori" value="<?php echo $edit->nama_kategori ?>">
						</div>

						<div class="form-group">
							<label>Icon</label>
							<input type="file" class="form-control" name="icon_kategori" value="<?php echo $edit->icon_kategori ?>">
						</div>

						<div class="form-group d-flex justify-content-center">
							<img src="<?php echo base_url('assets/svg/'.$edit->icon_kategori) ?>" width="250" height="200" >
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