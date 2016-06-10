<?php include('config/koneksi.php'); ?>
        <!-- page content -->
        <div class="right_col" role="main">

          <br />
          <div class="">

            <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-suitcase"></i>
                  </div>
                  	<?php 
						$barang		=	mysql_query("SELECT COUNT(nama_barang) AS total FROM barang");
						$data 		=	mysql_fetch_array($barang);
					?>
                  <div class="count"><?php echo $data['total']; ?></div>

                  <h3>BARANG</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-group"></i>
                  </div>
                  	<?php 
						$customer 	=	mysql_query("SELECT COUNT(nama_customer) AS total FROM customer");
						$data 		=	mysql_fetch_array($customer);
					?>
                  <div class="count"><?php echo $data['total']; ?></div>

                  <h3>CUSTOMERS</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-truck"></i>
                  </div>
                  	<?php 
						$supplier 	=	mysql_query("SELECT COUNT(nama_supplier) AS total FROM supplier");
						$data 		=	mysql_fetch_array($supplier);
					?>
                  <div class="count"><?php echo $data['total']; ?></div>

                  <h3>SUPPLIERS</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="glyphicon glyphicon-import"></i>
                  </div>
                  	<?php 
						$penerimaan =	mysql_query("SELECT COUNT(no_terima) AS total FROM penerimaan");
						$data 		=	mysql_fetch_array($penerimaan);
					?>
                  <div class="count"><?php echo $data['total']; ?></div>

                  <h3>PENERIMAAN</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="glyphicon glyphicon-open"></i>
                  </div>
                  	<?php 
						$permintaan =	mysql_query("SELECT COUNT(no_minta) AS total FROM permintaan");
						$data 		=	mysql_fetch_array($permintaan);
					?>
                  <div class="count"><?php echo $data['total']; ?></div>

                  <h3>PERMINTAAN</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="glyphicon glyphicon-export"></i>
                  </div>
                  	<?php 
						$pengeluaran =	mysql_query("SELECT COUNT(no_keluar) AS total FROM pengeluaran");
						$data 		=	mysql_fetch_array($pengeluaran);
					?>
                  <div class="count"><?php echo $data['total']; ?></div>

                  <h3>PENGELUARAN</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="glyphicon glyphicon-user"></i>
                  </div>
                    <?php 
            $user =  mysql_query("SELECT COUNT(id_user) AS total FROM user");
            $data     = mysql_fetch_array($user);
          ?>
                  <div class="count"><?php echo $data['total']; ?></div>

                  <h3>USER</h3>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- /page content -->
        