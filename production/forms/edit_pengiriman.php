        <!-- page content -->
        <div class="row">
          <div class="col-md-12">

            <div class="page-title">
              <div class="title_left">
                <h3>
                  <ol class="breadcrumb">
                    <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Form Edit Pengiriman</li>
                  </ol>
                </h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Pengiriman</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="" method="post">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_kirim">No. Kirim <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                        <input type="text" id="no-kirim" name="no_kirim" value="<?php echo $row['no_kirim']; ?>" class="form-control col-md-7 col-xs-12" readonly>     
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Kirim<span class="required">*</span></label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type='text' class="form-control" value="<?php echo $row['tanggal_kirim']; ?>" name="tanggal_kirim" id='tanggal' required/>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no-reff">No. reff<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" id="no-reff" name="no_reff" value="<?php echo $row['no_reff']; ?>" required="required" class="form-control col-md-7 col-xs-12" placeholder="No Reff">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Minta<span class="required">*</span></label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type='text' name="tanggal_minta" value="<?php echo $row['tanggal_minta']; ?>" class="form-control" id='tanggal_minta' required/>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Customer</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <?php
                          $sql = mysql_query("select * from customer");    
                            $jsArray = "var custName = new Array();\n";
                            ?> 
                          <select class="select2_single form-control" name="kode_customer" onchange="changeValue(this.value)">      
                            echo '<optgroup label="-DATA YANG TERPILIH-">
                              <option> <?php echo $row['kode_customer']; ?></option>
                            </optgroup>';
                            echo '<option>-PILIH DATA BARU-</option>'; 
                            <?php 
                            while ($baris = mysql_fetch_array($sql)) {    
                                echo '<option value="' . $baris['kode_customer'] . '">' . $baris['kode_customer'] . '</option>';   
                                $jsArray .= "custName['" . $baris['kode_customer'] . "'] = {nama_customer:'" . addslashes($baris['nama_customer']) . "',no_kontak:'".addslashes($baris['no_kontak'])."'};\n";    
                            }    
                            ?>
                          </select>
                        </div>
                        <div class="col-md-6" style="color:blue;"><span>*Silahkan pilih kembali...!!!</span></div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama-customer">Nama Customer<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" id="nm_customer" name="nama_customer" required="required" class="form-control col-md-7 col-xs-12" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no-kontak">No. Kontak<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" id="nm_kontak" name="no_kontak" required="required" class="form-control col-md-7 col-xs-12" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no-kontak">Kode Barang<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <?php
                          $sql = mysql_query("select * from barang");    
                            $brgArray = "var brgName = new Array();\n";
                            ?> 
                          <select class="select2_single form-control" name="kode_barang" onchange="changeValues(this.value)">      
                            echo '<optgroup label="-DATA YANG TERPILIH-">
                              <option> <?php echo $row['kode_barang']; ?></option>
                            </optgroup>';
                            echo '<option label>-PILIH DATA BARU-</option>';
                            <?php 
                            while ($baris = mysql_fetch_array($sql)) {     
                                echo '<option value="' . $baris['kode_barang'] . '">' . $baris['kode_barang'] . '</option>';   
                                $brgArray .= "brgName['" . $baris['kode_barang'] . "'] = {nama_barang:'" . addslashes($baris['nama_barang']) . "',jumlah:'".addslashes($baris['jumlah'])."'};\n";    
                            }    
                            ?>
                          </select>
                        </div>
                        <div class="col-md-6" style="color:blue;"><span>*Silahkan pilih kembali...!!!</span></div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no-kontak">Nama Barang<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" id="nm_barang" name="nama_barang" required="required" class="form-control col-md-7 col-xs-12" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="stok">Stok<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" id="jml" name="jumlah" required="required" class="form-control col-md-7 col-xs-12" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jumlah-minta">Jumlah Minta<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="number" id="jumlah-minta" name="jumlah_minta" value="<?php echo $row['jumlah_minta']; ?>" required="required" class="form-control col-md-7 col-xs-12" placeholder="Jumlah Diminta">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jumlah-kirim">Jumlah Kirim<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="number" id="jumlah-kirim" name="jumlah_kirim" value="<?php echo $row['jumlah_kirim']; ?>" required="required" class="form-control col-md-7 col-xs-12" placeholder="Jumlah Dikirim">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-3"></div>
                        <div class="col-md-4 btn-group">
                          <button type="submit" class="btn btn-primary" name="pengiriman-update"><span class="fa fa-save"></span> Save</button>
                          <button type="reset" class="btn btn-default"><span class="fa fa-eraser"></span> Cancel</button>
                          <a href="?pengiriman=pengiriman" class="btn btn-info"><span class="fa fa-reply"></span> Back</a>
                        </div>                   
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
