<?php require_once('config/koneksi.php'); ?>


<!--function supplier-->
<?php 
	$query = "SELECT max(kode_supplier) as kodeMaks FROM supplier";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
	$kode = $data['kodeMaks'];

	//mengatur 3 karakter sebagai jumalh karakter yang tetap
	//mengatur 3 karakter untuk jumlah karakter yang berubah-ubah
	$noUrut = (int) substr($kode, 3, 3);
	$noUrut++;

	//menjadikan SUP sebagai 3 karakter yang tetap
	$char = "SUP";
	//%03s untuk mengatur 3 karakter di belakang "SUP"
	$kode_baru_sup = $char . sprintf("%03s", $noUrut);
	
	// Supplier Create
	if (isset($_POST['create-suppliers'])) {
		$kode_supplier	= $_POST['kode_supplier'];
		$nama_supplier	= $_POST['nama_supplier'];
		$alamat			= $_POST['alamat'];
		$no_kontak		= $_POST['no_kontak'];
		$catatan		= $_POST['catatan'];

		$supplier 			=	mysql_query("INSERT INTO supplier (`kode_supplier`, `nama_supplier`, `alamat`, `no_kontak`, `catatan`)
											VALUES ('$kode_supplier', '$nama_supplier', '$alamat', '$no_kontak', '$catatan')")or die(mysql_error());

		if ($supplier) {
			echo "
					<div class='col-md-12'>
						<div class='alert alert-success alert-dismissible fade in' role='alert' width='50%'>
	                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
	                    </button>
	                    <strong>Selamat!!  Data berhasil dibuat</strong>.
	                  	</div>
	                </div>";
			echo "<meta http-equiv='refresh' content='2;URL=?suppliers=suppliers'>";
		}else{
			echo "
					<div class='col-md-12'>
						<div class='alert alert-danger alert-dismissible fade in' role='alert'>
	                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
	                    </button>
	                    <strong>Perhatian!  Data gagal dibuat</strong>.
	                  	</div>
	                </div>";
			echo "<meta http-equiv='refresh' content='1;URL=?suppliers=suppliers'>";
		}			
	}

?>
<!--End function suppliers-->

<!--Function Customers-->
<?php 
	$query = "SELECT max(kode_customer) as kodeMaks FROM customer";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
	$kode = $data['kodeMaks'];

	//mengatur 3 karakter sebagai jumalh karakter yang tetap
	//mengatur 3 karakter untuk jumlah karakter yang berubah-ubah
	$noUrut = (int) substr($kode, 3, 3);
	$noUrut++;

	//menjadikan CUS sebagai 3 karakter yang tetap
	$char = "CUS";
	//%03s untuk mengatur 3 karakter di belakang "CUS"
	$kode_baru_cust = $char . sprintf("%03s", $noUrut);
	
	// Customer Create
	if (isset($_POST['create-customer'])) {
		$kode_customer	= $_POST['kode_customer'];
		$nama_customer	= $_POST['nama_customer'];
		$alamat			= $_POST['alamat'];
		$no_kontak		= $_POST['no_kontak'];
		$catatan		= $_POST['catatan'];

		$customer 			=	mysql_query("INSERT INTO customer (`kode_customer`, `nama_customer`, `alamat`, `no_kontak`, `catatan`)
											VALUES ('$kode_customer', '$nama_customer', '$alamat', '$no_kontak', '$catatan')")or die(mysql_error());

		if ($customer) {
			echo "
					<div class='col-md-12'>
						<div class='alert alert-success alert-dismissible fade in' role='alert' width='50%'>
	                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
	                    </button>
	                    <strong>Selamat!!  Data berhasil dibuat</strong>.
	                  	</div>
	                </div>";
			echo "<meta http-equiv='refresh' content='2;URL=?customers=customers'>";
		}else{
			echo "
					<div class='col-md-12'>
						<div class='alert alert-danger alert-dismissible fade in' role='alert'>
	                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
	                    </button>
	                    <strong>Perhatian!  Data gagal dibuat</strong>.
	                  	</div>
	                </div>";
			echo "<meta http-equiv='refresh' content='1;URL=?customers=customers'>";
		}			
	}

?>
<!--End Function Customers-->

<!--Begin Function Barang-->
<?php 
	$query = "SELECT max(kode_barang) as kodeMaks FROM barang";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
	$kode = $data['kodeMaks'];

	//mengatur 2 karakter sebagai jumalh karakter yang tetap
	//mengatur 4 karakter untuk jumlah karakter yang berubah-ubah
	$noUrut = (int) substr($kode, 2, 4);
	$noUrut++;

	//menjadikan BR sebagai 2 karakter yang tetap
	$char = "BR";
	//%04s untuk mengatur 4 karakter di belakang "BR"
	$kode_baru_bar = $char . sprintf("%04s", $noUrut);
	
	// Barang Create
	if (isset($_POST['create-barang'])) {
		$kode_barang	= $_POST['kode_barang'];
		$nama_barang	= $_POST['nama_barang'];
		$satuan			= $_POST['satuan'];
		$jumlah			= $_POST['jumlah'];

		$barang 		=	mysql_query("INSERT INTO barang (`kode_barang`, `nama_barang`, `satuan`, `jumlah`)
											VALUES ('$kode_barang', '$nama_barang', '$satuan', '$jumlah')")or die(mysql_error());

		if ($barang) {
			echo "
					<div class='col-md-12'>
						<div class='alert alert-success alert-dismissible fade in' role='alert' width='50%'>
	                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
	                    </button>
	                    <strong>Selamat!!  Data berhasil dibuat</strong>.
	                  	</div>
	                </div>";
			echo "<meta http-equiv='refresh' content='2;URL=?barang=barang'>";
		}else{
			echo "
					<div class='col-md-12'>
						<div class='alert alert-danger alert-dismissible fade in' role='alert'>
	                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
	                    </button>
	                    <strong>Perhatian!  Data gagal dibuat</strong>.
	                  	</div>
	                </div>";
			echo "<meta http-equiv='refresh' content='1;URL=?barang=barang'>";
		}			
	}

?>
<!--End Function Barang-->
<!--Begin Function Satuan-->
<?php 
	
	// Satuan Create
	if (isset($_POST['create-satuan'])) {
		$kode_satuan	= $_POST['kode_satuan'];
		$nama_satuan	= $_POST['nama_satuan'];

		$satuan 		=	mysql_query("INSERT INTO satuan (`kode_satuan`, `nama_satuan`)
											VALUES ('$kode_satuan', '$nama_satuan')")or die(mysql_error());

		if ($satuan) {
			echo "
					<div class='col-md-12'>
						<div class='alert alert-success alert-dismissible fade in' role='alert' width='50%'>
	                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
	                    </button>
	                    <strong>Selamat!!  Data berhasil dibuat</strong>.
	                  	</div>
	                </div>";
			echo "<meta http-equiv='refresh' content='2;URL=?satuan=satuan'>";
		}else{
			echo "
					<div class='col-md-12'>
						<div class='alert alert-danger alert-dismissible fade in' role='alert'>
	                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
	                    </button>
	                    <strong>Perhatian!  Data gagal dibuat</strong>.
	                  	</div>
	                </div>";
			echo "<meta http-equiv='refresh' content='1;URL=?satuan=satuan'>";
		}			
	}

?>
<!--End Function Satuan-->
<!--function Permintaan-->
<?php 
	$query = "SELECT max(no_kirim) as kodeMaks FROM pengiriman";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
	$nomor = $data['kodeMaks'];

	//mengatur 2 karakter sebagai jumalh karakter yang tetap
	//mengatur 4 karakter untuk jumlah karakter yang berubah-ubah
	$noUrut = (int) substr($nomor, 2, 4);
	$noUrut++;

	//menjadikan KR sebagai 2 karakter yang tetap
	$char = "KR";
	//%04s untuk mengatur 4 karakter di belakang "MT"
	$kode_baru_kirim = $char . sprintf("%04s", $noUrut);
	
	// pengiriman Create
		$no_kirim		= $_POST['no_kirim'];
		$tanggal_kirim	= $_POST['tanggal_kirim'];
		$no_reff		= $_POST['no_reff'];
		$tanggal_minta	= $_POST['tanggal_minta'];
		$kode_customer	= $_POST['kode_customer'];
		$kode_barang	= $_POST['kode_barang'];
		$jumlah_minta	= $_POST['jumlah_minta'];
		$jumlah_kirim	= $_POST['jumlah_kirim'];
		$stok 			= $_POST['stok'];
	if (isset($_POST['create-pengiriman'])) {
		
		
		$cek_stok 		= mysql_query("select jumlah from barang where kode_barang='$kode_barang'");
		$cek_res 		= mysql_fetch_array($cek_stok);
		$stok 			= $cek_res['jumlah'];
			
		
		if( $jumlah_minta > $stok || $jumlah_kirim > $stok){
			echo " <script>
					alert('Maaf Stok Barang tidak mencukupi,  Mohon kurangi jumlah permintaan dan coba kembali');
					</script>";

		}else{
				$pengiriman		=	mysql_query("INSERT INTO pengiriman (`no_kirim`, `tanggal_kirim`, `kode_customer`, `no_reff`, `tanggal_minta`				, `kode_barang`, `jumlah_minta`, `jumlah_kirim`)
									VALUES ('$no_kirim', '$tanggal_kirim', '$kode_customer', '$no_reff', '$tanggal_minta', 
											'$kode_barang','$jumlah_minta', '$jumlah_kirim')")or die(mysql_error());
			
				if($pengiriman) {
					echo "
							<div class='col-md-12'>
								<div class='alert alert-success alert-dismissible fade in' role='alert' width='50%'>
			                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
			                    </button>
			                    <strong>Selamat!!  Data berhasil dibuat</strong>.
			                  	</div>
			                </div>";
					echo "<meta http-equiv='refresh' content='2;URL=?pengiriman=pengiriman'>";

				}else{
					echo "
							<div class='col-md-12'>
								<div class='alert alert-danger alert-dismissible fade in' role='alert'>
			                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
			                    </button>
			                    <strong>Perhatian!  Data gagal dibuat</strong>.
			                  	</div>
			                </div>";
					echo "<meta http-equiv='refresh' content='1;URL=?pengiriman=pengiriman'>";
				}	
		}		
	}

?>
<!--End function pengiriman-->
<!--function penerimaan-->
<?php 
	$query = "SELECT max(no_terima) as kodeMaks FROM penerimaan";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
	$nomor = $data['kodeMaks'];

	//mengatur 2 karakter sebagai jumlah karakter yang tetap
	//mengatur 4 karakter untuk jumlah karakter yang berubah-ubah
	$noUrut = (int) substr($nomor, 2, 4);
	$noUrut++;

	//menjadikan TR sebagai 2 karakter yang tetap
	$char = "TR";
	//%04s untuk mengatur 4 karakter di belakang "TR"
	$kode_baru_terima = $char . sprintf("%04s", $noUrut);
	
	// Penerimaan Create
	if (isset($_POST['create-penerimaan'])) {
		$no_terima		= $_POST['no_terima'];
		$tanggal		= $_POST['tanggal'];
		$kode_supplier	= $_POST['kode_supplier'];
		$no_reff		= $_POST['no_reff'];
		$kode_barang	= $_POST['kode_barang'];
		$jumlah_terima	= $_POST['jumlah_terima'];
		


		$query_penerimaan		=	mysql_query("INSERT INTO penerimaan (`no_terima`, `tanggal`, `kode_supplier`, `no_reff`, `kode_barang`,  
										`jumlah_terima`)
										VALUES ('$no_terima', '$tanggal', '$kode_supplier', '$no_reff', '$kode_barang', '$jumlah_terima')")or die(mysql_error());
		
		if ($query_penerimaan) {
			
			echo "
					<div class='col-md-12'>
						<div class='alert alert-success alert-dismissible fade in' role='alert' width='50%'>
	                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
	                    </button>
	                    <strong>Selamat!!  Data berhasil dibuat</strong>.
	                  	</div>
	                </div>";
			echo "<meta http-equiv='refresh' content='2;URL=?penerimaan=penerimaan'>";
		}else{
			echo "
					<div class='col-md-12'>
						<div class='alert alert-danger alert-dismissible fade in' role='alert'>
	                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
	                    </button>
	                    <strong>Perhatian!  Data gagal dibuat</strong>.
	                  	</div>
	                </div>";
			echo "<meta http-equiv='refresh' content='1;URL=?penerimaan=penerimaan'>";
			

		}			
	}

?>
<!--End function penerimaan-->



<?php require_once('config/koneksi.php'); ?>


<!--function user-->
<?php 
	$query = "SELECT max(id_user) as kodeMaks FROM user";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
	$kode = $data['kodeMaks'];

	//mengatur 3 karakter sebagai jumalh karakter yang tetap
	//mengatur 3 karakter untuk jumlah karakter yang berubah-ubah
	$noUrut = (int) substr($kode, 3, 3);
	$noUrut++;

	//menjadikan USR sebagai 3 karakter yang tetap
	$char = "USR";
	//%03s untuk mengatur 3 karakter di belakang "USR"
	$id_user_baru = $char . sprintf("%03s", $noUrut);
	
	// User Create
	if (isset($_POST['create-user'])) {
		$id_user	=	$_POST['id_user'];
		$username	=	$_POST['username'];
		$password	=	$_POST['password'];
		$fullname	=	$_POST['fullname'];
		$akses		=	$_POST['akses'];
		$folder 	=	'foto';
        $tmp_name 	= 	$_FILES["foto"]["tmp_name"];
        $link 		= 	$folder."/".$_FILES["foto"]["name"];

		//Upload ke folder foto
        move_uploaded_file($tmp_name, $link);

		$user 		=	mysql_query("INSERT INTO user (`id_user`, `username`, `password`, `fullname`, `akses`, `foto`) 
										VALUES ('$id_user', '$username', '$password', '$fullname', '$akses','$link')");
		if ($user) {
			echo 	"<div class='col-md-12'>
						<div class='alert alert-success alert-dismissible fade in' role='alert' width='50%'>
	                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
	                    </button>
	                    <strong>Selamat!!  Data berhasil dibuat</strong>.
	                  	</div>
	                </div>";
			echo "<meta http-equiv='refresh' content='2;URL=?user=user'>";
		}else{
			echo 	"<div class='col-md-12'>
						<div class='alert alert-danger alert-dismissable' width='50%'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
						</div>
					</div>";
		}			
	}
?>
<!--End function user-->
