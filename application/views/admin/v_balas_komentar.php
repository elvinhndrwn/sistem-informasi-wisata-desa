<div class="container-fluid">

    <!-- SWEAT ALERRTTTT -->
    <div class="flash-data2" data-flashdata="<?php echo $this->session->flashdata('alert') ?>"></div>

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
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Objek Wisata</th>
                        <th scope="col">Komentar</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Balasan Dari</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                   <?php $no=1; foreach($komentar as $k): ?>
                   <?php if($k->seen_b == 0){$background="#c5eceb";}else{$background="";} ?>

                   <tr style="background-color: <?= $background ?>">
                    <td scope="row"><?= $no++; ?></td>
                    <td><?= $k->nama_b ?></td>
                    <td><?= $k->email_b ?></td>
                    <td><?= $k->nama_objek_wisata ?></td>
                    <td><?= $k->isi_komentar_b ?></td>
                    <td><?= date('d F Y - H:i', strtotime($k->tgl_komentar_b)) ?></td>
                    <td><?= $k->nama ?></td>
                    <td>
                        <a class="btn btn-sm btn-danger btn-hapus"  href="<?php echo base_url('admin/balas_komentar_hapus/'.$k->id_balas_komentar) ?>"><i class="far fa-trash-alt"></i></a>

                        <a class="btn btn-sm btn-success btn-verifikasi" id="btn-verifikasi"  href="<?php echo base_url('admin/balas_komentar_verifikasi/'.$k->id_balas_komentar) ?>"><i class="fas fa-check-double"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
</div>







<script src="<?php echo base_url('assets/sb-admin/') ?>vendor/jquery/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo base_url('assets/js/myAlert.js') ?>" ></script>
<script type="text/javascript">
    const msg = $('.flash-data2').data('flashdata');

    if(msg)
    {
        swal({
            title: 'Alert',
            text: '' + msg,
            icon: 'success'
        });
    }



    // Verifikasi
    $('.btn-verifikasi').on("click", function(e){
        e.preventDefault();

        const href = $(this).attr('href');

        swal({
            title       : "Konfirmasi Komentar",
            text        : "Apakah anda yakin akan menampilkan komentar ini?",
            icon        : "warning",
            buttons     : true,
            dangerMode  : false
        })
        .then((willDelete) => {
            if(willDelete){
                document.location.href = href;
            }else{
                swal("Data Batal diverifikasi", {
                    button: false,
                    timer : 1000
                });
            }
        })
    })
</script>