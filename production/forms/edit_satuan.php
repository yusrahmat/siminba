        <!-- page content -->
        <div class="row">
          <div class="col-md-12">

            <div class="page-title">
              <div class="title_left">
               <h3>
                  <ol class="breadcrumb">
                    <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Form Edit Satuan</li>
                  </ol>
                </h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Satuan</h2>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama-satuan">Nama Satuan <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input type="text" id="nm-satuan" name="nama_satuan" value="<?php echo $row['nama_satuan'] ?>" class="form-control col-md-7 col-xs-12" required>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-3"></div>
                        <div class="col-md-4 btn-group">
                          <button type="submit" class="btn btn-primary" name="satuan-update"><span class="fa fa-save"></span> Save</button>
                          <button type="reset" class="btn btn-default"><span class="fa fa-eraser"></span> Cancel</button>
                          <a href="?satuan=satuan" class="btn btn-info"><span class="fa fa-reply"></span> Back</a>
                        </div>                   
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
