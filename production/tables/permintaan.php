        <!-- page content -->
        <div class="row">
          <div class="col-md-12">
            <div class="page-title">
              <div class="title_left">
                <h3>
                      Tabel Pengiriman
                      <small>
                          Data Pengiriman
                      </small>
                  </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
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
                          <th>No.Kirim</th>
                          <th>Tanggal Kirim</th>
                          <th>Nama. Customer</th>
                          <th>No. Reff</th>
                          <th>Tanggal Minta</th>
                          <th>Nama Barang</th>
                          <th>Jumlah Minta</th>
                          <th>Jumlah Kirim</th>
                          <th><center>Aksi</center></th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php
                      $permintaan = mysql_query("SELECT * FROM pengiriman order by no_kirim");
                      while ($data=mysql_fetch_array($permintaan)) {
                      ?>
                        <tr>
                          <td><?php echo $data['no_minta']; ?></td>
                          <td><?php echo $data['tanggal']; ?></td>
                          <td><?php echo $data['nama_customer']; ?></td>
                          <td><?php echo $data['no_reff']; ?></td>
                          <td><?php echo $data['nama_barang']; ?></td>
                          <td><?php echo $data['jumlah_minta']; ?></td>
                          <td><?php echo $data['jumlah_kirim']; ?></td>
                          <td>
                            <center>
                              <a href="?pengiriman-edit=<?php echo $data['no_kirim']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
                              <a href="?pengiriman-delete=<?php echo $data['no_kirim']; ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span> Delete</a>
                            </center>
                          </td>
                        </tr>
                    <?php
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