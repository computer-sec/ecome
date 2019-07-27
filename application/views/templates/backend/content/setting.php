 <div class="main-content">
    <div class="container-fluid">
        <div class="row">
                <?php foreach ($datas->result() as $key){?>
                    <form class="form-header" method="post" action="<?php echo base_url('dasboard/updateCompany')?>">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Company</strong>
                                        <small> Form</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">Company</label>
                                            <input type="text" name="company" id="company" placeholder="Enter your company name" class="form-control" value="<?php echo $key->company;?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Street</label>
                                            <input type="text" name="street" id="street" placeholder="Enter street name" class="form-control" value="<?php echo $key->street;?>">
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="city" class=" form-control-label">City</label>
                                                    <input type="text" name="city" id="city" placeholder="Enter your city" class="form-control" value="<?php echo $key->city;?>">
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">Postal Code</label>
                                                    <input type="text" name="postal" id="postal-code" placeholder="Postal Code" class="form-control" value="<?php echo $key->postal;?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">Country</label>
                                            <input type="text" name="country" id="country" placeholder="Country name" class="form-control" value="<?php echo $key->country;?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                            <!--CONTACT-->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Contact</strong>
                                        <small> Form</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">No.Telp</label>
                                            <input type="number" name="notelp" id="company" placeholder="Enter your company phone" class="form-control" value="<?php echo $key->notelp;?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">No.Fax</label>
                                            <input type="number" name="nofax" id="vat" placeholder="Enter your company fax" class="form-control" value="<?php echo $key->nofax;?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">E-mail</label>
                                            <input type="email" name="email" placeholder="Enter email name" value="<?php echo $key->email;?>" class="form-control">
                                        </div>
                                        <div class="row form-group">
                                      
                                    </div>
                                </div>
                            </div>
                            </div>
                            </form>
    </div>
    </div>