<!--Begin Edit Users-->
<?php 
	if(isset($_GET['user-edit'])){
		$id = $_GET['user-edit'];
	 
		if(isset($_POST['user-update'])){
			$username	=	$_POST['username'];
			$password	=	$_POST['password'];
			$fullname	=	$_POST['fullname'];
			$folder 	=	'foto';
	        $tmp_name 	= 	$_FILES["foto"]["tmp_name"];
	        $link 		= 	$folder."/".$_FILES["foto"]["name"];

	        //Upload ke folder foto
       		move_uploaded_file($tmp_name, $link);

			$user 		=	mysql_query("UPDATE user SET username = '$username', password = '$password', 
								fullname = '$fullname', foto = '$link' WHERE id_user = '$id'")or die(mysql_error());
			if ($user) {
				echo "
					<div class='col-md-12'>
						<div class='alert alert-success alert-dismissible fade in' role='alert' width='50%'>
	                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
	                    </button>
	                    <strong>Selamat! Data berhasil diupdate</strong> .
	                  	</div>
	                </div>";
				echo "<meta http-equiv='refresh' content='2;URL=?user=user'>";
			}else{
				echo "
					<div class='col-md-12'>
						<div class='alert alert-danger alert-dismissible fade in' role='alert'>
	                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
	                    </button>
	                    <strong>Perhatian! Data gagal dibuat</strong>.
	                  	</div>
	                </div>";
				echo "<meta http-equiv='refresh' content='1;URL=?user=user'>";
			}			
		}

		 $sql =	mysql_query("SELECT * FROM user WHERE id_user = '$id'")or die(mysql_error());
		 $row =	mysql_fetch_array($sql);
	}
?>

<!--Begin Edit Suppliers-->
<?php 
	if(isset($_GET['suppliers-edit'])){
		$id = $_GET['suppliers-edit'];
	 


		if(isset($_POST['suppliers-update'])){
			$nama_supplier	= $_POST['nama_supplier'];
			$alamat			= $_POST['alamat'];
			$no_kontak		= $_POST['no_kontak'];
			$catatan		= $_POST['catatan'];

			$supplier 		=	mysql_query("UPDATE supplier SET nama_supplier = '$nama_supplier', alamat = '$alamat', 
								no_kontak = '$no_kontak', catatan = '$catatan' WHERE kode_supplier = '$id'")or die(mysql_error());
			if ($supplier) {
				echo "
					<div class='col-md-12'>
						<div class='alert alert-success alert-dismissible fade in' role='alert' width='50%'>
	                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
	                    </button>
	                    <strong>Selamat! Data berhasil diupdate</strong> .
	                  	</div>
	                </div>";
				echo "<meta http-equiv='refresh' content='2;URL=?suppliers=suppliers'>";
			}else{
				echo "
					<div class='col-md-12'>
						<div class='alert alert-danger alert-dismissible fade in' role='alert'>
	                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
	                    </button>
	                    <strong>Perhatian! Data gagal dibuat</strong>.
	                  	</div>
	                </div>";
				echo "<meta http-equiv='refresh' content='1;URL=?suppliers=suppliers'>";
			}			
		}

		 $sql =	mysql_query("SELECT * FROM supplier WHERE kode_supplier = '$id'")or die(mysql_error());
		 $row =	mysql_fetch_array($sql);
	}
?>


<!--Begin Function Customers Edit-->
<?php 
	if(isset($_GET['customers-edit'])){
		$id = $_GET['customers-edit'];
	 

		if(isset($_POST['customers-update'])){
			$nama_customer	= $_POST['nama_customer'];
			$alamat			= $_POST['alamat'];
			$no_kontak		= $_POST['no_kontak'];
			$catatan		= $_POST['catatan'];

			$customer		=	mysql_query("UPDATE customer SET nama_customer = '$nama_customer', alamat = '$alamat',
											no_kontak = '$no_kontak', catatan = '$catatan' WHERE kode_customer = '$id'")or die(mysql_error());
			if ($customer) {
				echo "
					<div class='col-md-12'>
						<div class='alert alert-success alert-dismissible fade in' role='alert' width='50%'>
	                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
	                    </button>
	                    <strong>Selamat! Data berhasil diupdate</strong> .
	                  	</div>
	                </div>";
				echo "<meta http-equiv='refresh' content='2;URL=?customers=customers'>";
			}else{
				echo "
					<div class='col-md-12'>
						<div class='alert alert-danger alert-dismissible fade in' role='alert'>
	                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
	                    </button>
	                    <strong>Perhatian! Data gagal dibuat</strong>.
	                  	</div>
	                </div>";
				echo "<meta http-equiv='refresh' content='1;URL=?customers=customers'>";
			}			
		}

		 $sql =	mysql_query("SELECT * FROM customer WHERE kode_customer = '$id'")or die(mysql_error());
		 $row =	mysql_fetch_array($sql);
	}
?>

<!--Ends-->

<!--Begin Function Barang Edit-->
<?php 
	if(isset($_GET['barang-edit'])){
		$id = $_GET['barang-edit'];
	 

		if(isset($_POST['barang-update'])){
			$nama_barang	= $_POST['nama_barang'];
			$satuan			= $_POST['satuan'];
			$jumlah			= $_POST['jumlah'];

			$barang		=	mysql_query("UPDATE barang SET nama_barang = '$nama_barang', satuan = '$satuan',
											jumlah = '$jumlah' WHERE kode_barang = '$id'")or die(mysql_error());
			if ($barang) {
				echo "
					<div class='col-md-12'>
						<div class='alert alert-success alert-dismissible fade in' role='alert' width='50%'>
	                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
	                    </button>
	                    <strong>Selamat! Data berhasil diupdate</strong> .
	                  	</div>
	                </div>";
				echo "<meta http-equiv='refresh' content='2;URL=?barang=barang'>";
			}else{
				echo "
					<div class='col-md-12'>
						<div class='alert alert-danger alert-dismissible fade in' role='alert'>
	                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
	                    </button>
	                    <strong>Perhatian! Data gagal dibuat</strong>.
	                  	</div>
	                </div>";
				echo "<meta http-equiv='refresh' content='1;URL=?barang=barang'>";
			}			
		}

		 $sql =	mysql_query("SELECT * FROM barang WHERE kode_barang = '$id'")or die(mysql_error());
		 $row =	mysql_fetch_array($sql);
	}
?>

<!--Ends-->
<!--Begin Edit Satuan-->
<?php 
	if(isset($_GET['satuan-edit'])){
		$id = $_GET['satuan-edit'];
	 
		if(isset($_POST['satuan-update'])){
			$nama_satuan	=	$_POST['nama_satuan'];

			$satuan 		=	mysql_query("UPDATE satuan SET nama_satuan = '$nama_satuan' WHERE kode_satuan = '$id'")or die(mysql_error());
			if ($satuan) {
				echo "
					<div class='col-md-12'>
						<div class='alert alert-success alert-dismissible fade in' role='alert' width='100%'>
	                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
	                    </button>
	                    <strong>Selamat! Data berhasil diupdate</strong> .
	                  	</div>
	                </div>";
				echo "<meta http-equiv='refresh' content='2;URL=?satuan=satuan'>";
			}else{
				echo "
					<div class='col-md-12'>
						<div class='alert alert-danger alert-dismissible fade in' role='alert'>
	                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
	                    </button>
	                    <strong>Perhatian! Data gagal dibuat</strong>.
	                  	</div>
	                </div>";
				echo "<meta http-equiv='refresh' content='1;URL=?satuan=satuan'>";
			}			
		}

		 $sql =	mysql_query("SELECT * FROM satuan WHERE kode_satuan = '$id'")or die(mysql_error());
		 $row =	mysql_fetch_array($sql);
	}
?>
<!--Begin Function pengiriman Edit-->
<?php 
	if(isset($_GET['pengiriman-edit'])){
		$id = $_GET['pengiriman-edit'];
	 

		if(isset($_POST['pengiriman-update'])){
			$tanggal_kirim	= $_POST['tanggal_kirim'];
			$kode_customer	= $_POST['kode_customer'];
			$no_reff		= $_POST['no_reff'];
			$tanggal_minta	= $_POST['tanggal_minta'];
			$kode_barang	= $_POST['kode_barang'];
			$jumlah_minta	= $_POST['jumlah_minta'];
			$jumlah_kirim	= $_POST['jumlah_kirim'];
			$pengiriman		=	mysql_query("UPDATE pengiriman SET tanggal_kirim = '$tanggal_kirim', kode_customer = '$kode_customer', 
											 no_reff = '$no_reff', tanggal_minta = '$tanggal_minta', kode_barang = '$kode_barang', 
											 jumlah_minta = '$jumlah_minta', jumlah_kirim = '$jumlah_kirim' WHERE no_kirim = '$id'")or die(mysql_error());

			if ($pengiriman) {
				echo "
					<div class='col-md-12'>
						<div class='alert alert-success alert-dismissible fade in' role='alert' width='50%'>
	                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
	                    </button>
	                    <strong>Selamat! Data berhasil diupdate</strong> .
	                  	</div>
	                </div>";
				echo "<meta http-equiv='refresh' content='2;URL=?pengiriman=pengiriman'>";
			}else{
				echo "
					<div class='col-md-12'>
						<div class='alert alert-danger alert-dismissible fade in' role='alert'>
	                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
	                    </button>
	                    <strong>Perhatian! Data gagal dibuat</strong>.
	                  	</div>
	                </div>";
				echo "<meta http-equiv='refresh' content='1;URL=?pengiriman=pengiriman'>";
			}			
		}

		 $sql =	mysql_query("SELECT * FROM pengiriman WHERE no_kirim = '$id'")or die(mysql_error());
		 $row =	mysql_fetch_array($sql);
	}
?>

<!--Ends-->
<!--Begin Function Penerimaan Edit-->
<?php 
	if(isset($_GET['penerimaan-edit'])){
		$id = $_GET['penerimaan-edit'];
	 

		if(isset($_POST['penerimaan-update'])){
			$tanggal		= $_POST['tanggal'];
			$kode_supplier	= $_POST['kode_supplier'];
			$no_reff		= $_POST['no_reff'];
			$kode_barang	= $_POST['kode_barang'];
			$jumlah_terima	= $_POST['jumlah_terima'];


			$penerimaan		=	mysql_query("UPDATE penerimaan SET tanggal = '$tanggal', kode_supplier = '$kode_supplier', no_reff = '$no_reff',
											 kode_barang = '$kode_barang', jumlah_terima = '$jumlah_terima' WHERE no_terima = '$id'")or die(mysql_error());
			if ($penerimaan) {
				echo "
					<div class='col-md-12'>
						<div class='alert alert-success alert-dismissible fade in' role='alert' width='50%'>
	                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
	                    </button>
	                    <strong>Selamat! Data berhasil diupdate</strong> .
	                  	</div>
	                </div>";
				echo "<meta http-equiv='refresh' content='2;URL=?penerimaan=penerimaan'>";
			}else{
				echo "
					<div class='col-md-12'>
						<div class='alert alert-danger alert-dismissible fade in' role='alert'>
	                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
	                    </button>
	                    <strong>Perhatian! Data gagal dibuat</strong>.
	                  	</div>
	                </div>";
				echo "<meta http-equiv='refresh' content='1;URL=?penerimaan=penerimaan'>";
			}			
		}

		 $sql =	mysql_query("SELECT * FROM penerimaan WHERE no_terima = '$id'")or die(mysql_error());
		 $row =	mysql_fetch_array($sql);
	}
?>
<!--Ends-->
