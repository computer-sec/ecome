<!-- Page Content -->
<div class="container">

    <div class="row">
    <?php $no = 1;
    foreach ($barang->result() as $p) { ?>
        <div class="col-lg">
            <div class="card mt-4 mb-4">
                <img class="card-img-top img-fluid" src="<?php echo base_url('assets/upload/image/'.$p->image); ?>" alt="">
                <div class="card-body">
                    <h3 class="card-title"><?php echo $p->name; ?></h3>
                    <h4><?php echo $p->price; ?></h4>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <div class="col-lg  ">
            <div class="card card-outline-secondary mt-4 mb-4">
                <div class="card-header">
                    Product Detail
                </div>
                <div class="card-body">
                     <?php echo $p->keterangan; ?>
                    <hr>
                    <a href="<?= base_url('home/contact'); ?>" class="btn btn-success">Pesan</a>
                </div>
            </div>
        </div>
    <?php } ?>    
    </div>

</div>