        <!-- page content -->
        <div class="row">
          <div class="col-md-12">
            <div class="page-title">
              <div class="title_left">
                <h3>
                  <ol class="breadcrumb">
                    <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Tabel Pengiriman</li>
                  </ol>
                </h3>
              </div>
              <div class="title_right">  
                <div class="input-group pull-right">
                  <a href="laporan/lap_pengiriman.php" target="_blank" class="btn btn-default"><span class="fa fa-print"></span> Print</a> 
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabel Data Pengiriman</h2>
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
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>No.Kirim</th>
                          <th>Tgl Kirim</th>
                          <th>Kode Customer</th>
                          <th>No. Reff</th>
                          <th>Tgl Minta</th>
                          <th>Kode Barang</th>
                          <th>Qty Minta</th>
                          <th>Qty Kirim</th>
                          <th><center>Aksi</center></th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php
                      $no=1;
                      $pengiriman = mysql_query("SELECT * FROM pengiriman order by no_kirim");
                      while ($data=mysql_fetch_array($pengiriman)) {
                      ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $data['no_kirim']; ?></td>
                          <td><?php echo $data['tanggal_kirim']; ?></td>
                          <td><?php echo $data['kode_customer']; ?></td>
                          <td><?php echo $data['no_reff']; ?></td>
                          <td><?php echo $data['tanggal_minta']; ?></td>
                          <td><?php echo $data['kode_barang']; ?></td>
                          <td><?php echo $data['jumlah_minta']; ?></td>
                          <td><?php echo $data['jumlah_kirim']; ?></td>
                          <td>
                            <center>
                              <a href="?pengiriman-edit=<?php echo $data['no_kirim']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span></a>
                              <a href="?pengiriman-delete=<?php echo $data['no_kirim']; ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
                            </center>
                          </td>
                        </tr>
                    <?php
                    $no++;
                      }
                    ?>
                      </tbody>
                    </table>
                      <a href="?pengiriman=pengiriman-create" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah</a>  
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- /page content -->