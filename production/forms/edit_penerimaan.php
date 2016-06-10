        <!-- page content -->
        <div class="row">
          <div class="col-md-12">

            <div class="page-title">
              <div class="title_left">
               <h3>
                  <ol class="breadcrumb">
                    <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Form Edit Penerimaan</li>
                  </ol>
                </h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Penerimaan</h2>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_terima">No. Penerimaan <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                        <input type="text" id="no-terima" name="no_terima" value="<?php echo $row['no_terima']; ?>" class="form-control col-md-7 col-xs-12" readonly>     
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal<span class="required">*</span></label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type='text' class="form-control" value="<?php echo $row['tanggal']; ?>" name="tanggal" id='tanggal' required/>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Supplier<span class="required">*</span></label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <?php
                          $sql = mysql_query("select * from supplier");    
                            $SuppArray = "var suppName = new Array();\n";
                            ?> 
                          <select class="select2_single form-control" name="kode_supplier" onchange="changeValueSupp(this.value)">      
                            echo '<optgroup label="-DATA YANG TERPILIH-">
                              <option> <?php echo $row['kode_supplier']; ?></option>
                            </optgroup>';
                            echo '<option>-PILIH DATA BARU-</option>'; 
                            <?php 
                            while ($baris = mysql_fetch_array($sql)) {    
                                echo '<option value="' . $baris['kode_supplier'] . '">' . $baris['kode_supplier'] . '</option>';   
                                $SuppArray .= "suppName['" . $baris['kode_supplier'] . "'] = {nama_supplier:'" . addslashes($baris['nama_supplier']) . "',no_kontak_supp:'".addslashes($baris['no_kontak'])."'};\n";    
                            }    
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama-customer">Nama Supplier<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" id="nm_supplier" name="nama_supplier" required="required" class="form-control col-md-7 col-xs-12" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no-kontak">No. Kontak<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" id="nm_kontak_supp" name="no_kontak" required="required" class="form-control col-md-7 col-xs-12" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no-reff">No. Reff<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" id="no-reff" name="no_reff" value="<?php echo $row['no_reff']; ?>" required="required" class="form-control col-md-7 col-xs-12" placeholde="No. Reff">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no-kontak">Kode Barang<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <?php
                          $sql = mysql_query("select * from barang");    
                            $brgArray2 = "var brgName2 = new Array();\n";
                            ?> 
                          <select class="select2_single form-control" name="kode_barang" onchange="changeValuesBrg(this.value)">
                            echo '<optgroup label="-DATA YANG TERPILIH-">
                              <option> <?php echo $row['kode_barang']; ?></option>
                            </optgroup>';      
                            echo '<option>-PILIH DATA BARU-</option>';
                            <?php 
                            while ($baris = mysql_fetch_array($sql)) {     
                                echo '<option value="' . $baris['kode_barang'] . '">' . $baris['kode_barang'] . '</option>';   
                                $brgArray2 .= "brgName2['" . $baris['kode_barang'] . "'] = {nama_barang:'" . addslashes($baris['nama_barang']) . "',stok_awal:'".addslashes($baris['jumlah'])."'};\n";    
                            }    
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no-kontak">Nama Barang<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" id="nm_barang" name="nama_barang" required="required" class="form-control col-md-7 col-xs-12" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="stok">Stok Awal<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" id="jl_stok_awal" name="stok_awal" required="required" class="form-control col-md-7 col-xs-12" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jumlah-terima">Diterima<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="number" id="jumlah-terima" name="jumlah_terima" value="<?php echo $row['jumlah_terima']; ?>" required="required" class="form-control col-md-7 col-xs-12" placeholder="Diterima">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-3"></div>
                        <div class="col-md-4 btn-group">
                          <button type="submit" class="btn btn-primary" name="penerimaan-update"><span class="fa fa-save"></span> Save</button>
                          <button type="reset" class="btn btn-default"><span class="fa fa-eraser"></span> Cancel</button>
                          <a href="?penerimaan=penerimaan" class="btn btn-info"><span class="fa fa-reply"></span> Back</a>
                        </div>                   
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
 