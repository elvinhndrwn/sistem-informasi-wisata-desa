 <div id="services" class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Kategori Wisata</h2>
                <p class="p-heading p-large">Berikut ini adalah kategori - kategori wisata yang tersedia di Desa Turi</p>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                <?php foreach($kategori as $row): ?>
                    <!-- Card -->
                    <a href="<?php echo base_url('home/wisata/'.$row->id_kategori) ?>">
                        <div class="card">
                            <img class="card-image" src="<?php echo base_url('assets/svg/'.$row->icon_kategori) ?>" alt="alternative">
                            <div class="card-body">
                                <h4 class="card-title"><?= $row->nama_kategori ?></h4>
                                <p>Our team of enthusiastic marketers will analyse and evaluate how your company stacks against the closest competitors</p>
                            </div>
                        </div>
                    </a>
                    <!-- end of card -->

                <?php endforeach; ?>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->