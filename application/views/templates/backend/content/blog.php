<!-- MAIN CONTENT-->
<div class="main-content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1"><?php echo $title; ?></h2>
                <button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#myModal">
                    <i class="zmdi zmdi-plus"></i>Tambahkan Program
                </button>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">Tambah Program</h5>
                                <button type="button" class="close btn btn-danger" data-dismiss="modal" aria-hidden="true" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php
                                // Validasi
                                echo validation_errors('<div class="alert alert-success">', '</div>');
                                // Form
                                echo form_open_multipart('dashboard/addBlog'); ?>

                                <div class="form-group">
                                    <label>Judul Program</label>
                                    <input type="text" name="name" placeholder="Judul Program" value="<?php echo set_value('name') ?>" required class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Deskripsi Program</label>
                                    <textarea name="Description" class="form-control" placeholder="Deskripsi Program"><?php echo set_value('Description') ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" name="image" accept="image/*" required class="form-control">
                                </div>


                                <div class="form-group">
                                    <div class="modal-footer">
                                        <button type="submit" name="submit" class="btn btn-primary" value="Simpan Data">Simpan Program</button>
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
                            <th>#No.</th>
                            <th>Judul Program</th>
                            <th>Foto</th>
                            <th>Deskripsi Program</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($datas->result() as $dt) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $dt->name; ?></td>
                                <td><img src="<?php echo base_url('assets/upload/image/' . $dt->image) ?>" class="img img-responsive" width="60">
                                </td>
                                <td><?php echo $dt->Description; ?></td>
                                <td>
                                    <div class="table-data-feature">
                                        <button class="item" data-toggle="modal" data-target="#editModal<?php echo $dt->id_blog; ?>" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i>
                                        </button>
                                        <!--modal edit-->
                                        <div class="modal fade" id="editModal<?php echo $dt->id_blog; ?>" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editModal">Edit Program</h5>
                                                        <button type="button" class="close btn btn-danger" data-dismiss="modal" aria-hidden="true" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php
                                                        // Validasi
                                                        echo validation_errors('<div class="alert alert-success">', '</div>');
                                                        // Form
                                                        echo form_open_multipart('dashboard/editProgram/' . $dt->id_blog); ?>

                                                        <div class="form-group">
                                                            <label>Judul Program</label>
                                                            <input type="text" name="name" value="<?php echo $dt->name; ?>" required class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Deskripsi Program</label>
                                                            <textarea name="Description" class="form-control" placeholder="Keterangan"><?php echo $dt->Description ?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Gambar</label>
                                                            <input type="file" name="image" accept="image/*" required class="form-control">
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
                                        <!--end modal edit-->
                                        <button class="item" data-toggle="modal" data-target="#Delete<?php echo $dt->id_blog; ?>" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i>
                                        </button>
                                        <div class="modal fade" id="Delete<?php echo $dt->id_blog; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="ModalEdit">Hapus Program</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" ria-label="Close"><span aria-hidden="true">&times;</span></button>

                                                    </div>
                                                    <div class="modal-body">

                                                        <p class="alert alert-success">Yakin ingin menghapus Program ini?</p>

                                                    </div>
                                                    <div class="modal-footer">

                                                        <a href="<?php echo base_url('dashboard/deleteProgram/' . $dt->id_blog) ?>" class="btn btn-danger"><i class="zmdi zmdi-delete"></i> Ya, Hapus</a>

                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
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