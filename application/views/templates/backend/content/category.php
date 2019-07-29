<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">Kategori Produk</h2>
                    <button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#myModal">
                        <i class="zmdi zmdi-plus"></i>Tambahkan Barang
                    </button>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myModalLabel">Tambah Kategori Produk</h5>
                                    <button type="button" class="close btn btn-danger" data-dismiss="modal" aria-hidden="true" aria-label="Close"><span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php
                                    // Validasi
                                    echo validation_errors('<div class="alert alert-success">','</div>');
                                    // Form
                                    echo form_open('dashboard/addCategory');?>

                                        <div class="form-group">
                                            <label>Nama kategori</label>
                                            <input type="text" name="categoryname" placeholder="Category" value="<?php echo set_value('categoryname') ?>" required class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea name="description" class="form-control" placeholder="Deskripsi"><?php echo set_value('description') ?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <div class="modal-footer">
                                                <button type="submit" name="submit" class="btn btn-primary" value="Simpan Data">Simpan Perubahan</button>
                                            </div>
                                            <?php echo form_close() ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end modal tambah-->

                </div>
            </div>
        </div>
        <div class="row m-t-25">
        </div>
        <div class="row m-t-30">
            <div class="col-md-12">
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>#No</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($datas->result() as $key ){ ?>
                                <tr>
                                    <td>
                                        <?php echo $no++;?>
                                    </td>
                                    <td>
                                        <?php echo $key->categoryname;?>
                                    </td>
                                    <td>
                                        <?php echo $key->description;?>
                                    </td>
                                    <td>
                                        <div class="table-data-feature">
                                            <button class="item" data-toggle="modal" data-target="#editModal<?php echo $key->id_category;?>" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i>
                                            </button>
                                            <!--modal edit-->
                                            <div class="modal fade" id="editModal<?php echo $key->id_category;?>" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModal">Update Kategori Product</h5>
                                                            <button type="button" class="close btn btn-danger" data-dismiss="modal" aria-hidden="true" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <?php
// Validasi
echo validation_errors('<div class="alert alert-success">','</div>');
// Form
echo form_open('dashboard/editCategory/'.$key->id_category);?>

                                                                <div class="form-group">
                                                                    <label>Nama kategori</label>
                                                                    <input type="text" name="categoryname" placeholder="Category" value="<?php echo $key->categoryname;?>" required class="form-control">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Keterangan</label>
                                                                    <textarea name="keterangan" class="form-control" placeholder="Keterangan"><?php echo $key->description?></textarea>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="modal-footer">
                                                                        <button type="submit" name="submit" class="btn btn-primary" value="Simpan Data">Save changes</button>
                                                                    </div>
                                                                    <?php echo form_close() ?>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end modal edit-->
                                            <button class="item" data-toggle="modal" data-target="#Delete<?php echo $key->id_category ?>" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i>
                                            </button>
                                            <div class="modal fade" id="Delete<?php echo $key->id_category ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="ModalEdit">Hapus Kategori</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" ria-label="Close"><span aria-hidden="true">&times;</span></button>

                                                        </div>
                                                        <div class="modal-body">

                                                            <p class="alert alert-success">Yakin ingin menghapus kategori ini?</p>

                                                        </div>
                                                        <div class="modal-footer">

                                                            <a href="<?php echo base_url('dashboard/deleteCategory/'.$key->id_category) ?>" class="btn btn-danger"><i class="zmdi zmdi-delete"></i> Ya, Hapus</a>

                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php }?>
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->