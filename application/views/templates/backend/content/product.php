            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="overview-wrap">
                                <h2 class="title-1">Produk Barang</h2>
                                <button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#myModal">
                                    <i class="zmdi zmdi-plus"></i>Tambahkan Barang
                                </button>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel">Tambah Produk</h5>
                                                <button type="button" class="close btn btn-danger" data-dismiss="modal" aria-hidden="true" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <?php
                                                // Validasi
                                                echo validation_errors('<div class="alert alert-success">', '</div>');
                                                // Form
                                                echo form_open_multipart('dashboard/addProduct'); ?>

                                                <div class="form-group">
                                                    <label>Nama Product</label>
                                                    <input type="text" name="name" placeholder="Product" value="<?php echo set_value('name') ?>" required class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label>Gambar Produk</label>
                                                    <input type="file" name="image" accept="image/*" required class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label>Harga Barang</label>
                                                    <input type="number" name="price" placeholder="Price Product" value="<?php echo set_value('price') ?>" required class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label>Deskripsi</label>
                                                    <textarea name="deskripsi" class="form-control" placeholder="Deskripsi"><?php echo set_value('description') ?></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <div class="modal-footer">
                                                        <button type="submit" name="submit" class="btn btn-primary" value="Simpan Data">Simpan Produk</button>
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
                                            <th>Name</th>
                                            <th>Foto</th>
                                            <th>Harga</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($datas->result() as $key) { ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $key->name; ?></td>
                                                <td><img src="<?php echo base_url('assets/upload/thumbs/' . $key->image) ?>" class="img img-responsive" width="60">
                                                </td>
                                                <td><?php echo $key->price; ?></td>
                                                <td><?php echo $key->keterangan; ?></td>
                                                

                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="modal" data-target="#editModal<?php echo $key->id_product; ?>" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <!--modal edit-->
                                                        <div class="modal fade" id="editModal<?php echo $key->id_product; ?>" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="editModal">Update Product</h5>
                                                                        <button type="button" class="close btn btn-danger" data-dismiss="modal" aria-hidden="true" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <?php
                                                                        // Validasi
                                                                        echo validation_errors('<div class="alert alert-success">', '</div>');
                                                                        // Form
                                                                        echo form_open_multipart('dashboard/editProduct/' . $key->id_product); ?>

                                                                        <div class="form-group">
                                                                            <label>Nama Product</label>
                                                                            <input type="text" name="name" placeholder="Category" value="<?php echo $key->name; ?>" required class="form-control">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Keterangan</label>
                                                                            <textarea name="keterangan" class="form-control" placeholder="Keterangan"><?php echo $key->keterangan ?></textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Price Product</label>
                                                                            <input type="number" name="price" placeholder="Price" value="<?php echo $key->price; ?>" required class="form-control">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Stock Product</label>
                                                                            <input type="number" name="stock" placeholder="Stock" value="<?php echo $key->stock; ?>" required class="form-control">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Image Product</label>
                                                                            <input type="file" name="image" accept="image/*" required class="form-control">
                                                                        </div>



                                                                        <div class="form-group">
                                                                            <label>Category Product</label>
                                                                            <select name="id_category" class="form-control">
                                                                                <?php foreach ($kategori->result() as $kh) { ?>
                                                                                    <option value="<?php echo $kh->id_category; ?>"><?php echo $kh->categoryname; ?></option>
                                                                                <?php } ?>
                                                                            </select>
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
                                                        <button class="item" data-toggle="modal" data-target="#Delete<?php echo $key->id_product; ?>" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <div class="modal fade" id="Delete<?php echo $key->id_product; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="ModalEdit">Hapus Product</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" ria-label="Close"><span aria-hidden="true">&times;</span></button>

                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <p class="alert alert-success">Yakin ingin menghapus Product ini?</p>

                                                                    </div>
                                                                    <div class="modal-footer">

                                                                        <a href="<?php echo base_url('dashboard/deleteProduct/' . $key->id_product) ?>" class="btn btn-danger"><i class="zmdi zmdi-delete"></i> Ya, Hapus</a>

                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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