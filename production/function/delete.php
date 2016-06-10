<!--Begin Function Delete User-->
<?php 
if(isset($_GET['user-delete'])){
	$id	= $_GET['user-delete'];

	$delete=mysql_query("delete from user where id_user = '$id'");
	if($delete){
		echo "
				<div class='col-md-12'>
					<div class='alert alert-success alert-dismissible fade in' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                    </button>
                    <strong>Selamat!!  Data berhasil dihapus</strong>.
                  	</div>
                </div>";
		echo "<meta http-equiv='refresh' content='0;URL= ?user=user '/>";
	}
}
?>
<!--Ends Function Delete User-->

<!--Begin Function Delete Suppliers-->
<?php 
if(isset($_GET['suppliers-delete'])){
	$id	= $_GET['suppliers-delete'];

	$delete=mysql_query("delete from supplier where kode_supplier = '$id'");
	if($delete){
		echo "
				<div class='col-md-12'>
					<div class='alert alert-success alert-dismissible fade in' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                    </button>
                    <strong>Selamat!!  Data berhasil dihapus</strong>.
                  	</div>
                </div>";
		echo "<meta http-equiv='refresh' content='0;URL= ?suppliers=suppliers '/>";
	}
}
?>
<!--Ends Function Delete Suppliers-->

<!--Begin Function Delete Suppliers-->
<?php 
if(isset($_GET['customers-delete'])){
	$id	= $_GET['customers-delete'];

	$delete=mysql_query("delete from customer where kode_customer = '$id'");
	if($delete){
		echo "
				<div class='col-md-12'>
					<div class='alert alert-success alert-dismissible fade in' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                    </button>
                    <strong>Selamat!!  Data berhasil dihapus</strong>.
                  	</div>
                </div>";
		echo "<meta http-equiv='refresh' content='0;URL= ?customers=customers '/>";
	}
}
?>
<!--End Function Delete Suppliers-->

<!--Begin Function Delete Barang-->
<?php 
if(isset($_GET['barang-delete'])){
	$id	= $_GET['barang-delete'];

	$delete=mysql_query("delete from barang where kode_barang = '$id'");
	if($delete){
		echo "
				<div class='col-md-12'>
					<div class='alert alert-success alert-dismissible fade in' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                    </button>
                    <strong>Selamat!!  Data berhasil dihapus</strong>.
                  	</div>
                </div>";
		echo "<meta http-equiv='refresh' content='0;URL= ?barang=barang '/>";
	}
}
?>
<!--End Function Delete Barang-->

<!--Begin Function Delete Satuan-->
<?php 
if(isset($_GET['satuan-delete'])){
	$id	= $_GET['satuan-delete'];

	$delete=mysql_query("delete from satuan where kode_satuan = '$id'");
	if($delete){
		echo "
				<div class='col-md-12'>
					<div class='alert alert-success alert-dismissible fade in' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                    </button>
                    <strong>Selamat!!  Data berhasil dihapus</strong>.
                  	</div>
                </div>";
		echo "<meta http-equiv='refresh' content='0;URL= ?satuan=satuan '/>";
	}
}
?>
<!--Ends Function Delete Satuan-->

<!--Begin Function Delete Pengiriman-->
<?php 
if(isset($_GET['pengiriman-delete'])){
	$id	= $_GET['pengiriman-delete'];

	$delete 	=	mysql_query("delete from pengiriman where no_kirim = '$id'");
	if($delete){
		echo "
				<div class='col-md-12'>
					<div class='alert alert-success alert-dismissible fade in' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                    </button>
                    <strong>Selamat!!  Data berhasil dihapus</strong>.
                  	</div>
                </div>";
		echo "<meta http-equiv='refresh' content='0;URL= ?pengiriman=pengiriman '/>";
	}
}
?>
<!--End Function Delete Pengiriman-->

<!--Begin Function Delete Penerimaan-->
<?php 
if(isset($_GET['penerimaan-delete'])){
	$id	= $_GET['penerimaan-delete'];

	$delete 	=	mysql_query("delete from penerimaan where no_terima = '$id'");
	if($delete){
		echo "
				<div class='col-md-12'>
					<div class='alert alert-success alert-dismissible fade in' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                    </button>
                    <strong>Selamat!!  Data berhasil dihapus</strong>.
                  	</div>
                </div>";
		echo "<meta http-equiv='refresh' content='0;URL= ?penerimaan=penerimaan '/>";
	}
}
?>
<!--End Function Delete Penerimaan-->
