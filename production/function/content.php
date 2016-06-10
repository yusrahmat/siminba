<?php 
	if (isset($_GET['suppliers'])) {
			if ($_GET['suppliers'] == 'suppliers') {
				include('tables/suppliers.php');
			}elseif ($_GET['suppliers'] == 'suppliers-create') {
				include('function/create.php');
				include('forms/create_suppliers.php');
			}elseif ($_GET['suppliers'] == 'suppliers-create-form') {
				include('function/create.php');
				include('forms/create_suppliers.php');
			}
	}elseif (isset($_GET['suppliers-edit'])) {		//	
		include('function/edit.php');
		include('forms/edit_suppliers.php');
	}elseif(isset($_GET['suppliers-delete'])){
	include('function/delete.php');
	}
	if (isset($_GET['customers'])) {
			if ($_GET['customers'] == 'customers') {
				include('tables/customers.php');
			}elseif ($_GET['customers'] == 'customers-create') {
				include('function/create.php');
				include('forms/create_customers.php');
			}elseif ($_GET['customers'] == 'customers-create-form') {
				include('function/create.php');
				include('forms/create_customers.php');
			}
	}elseif (isset($_GET['customers-edit'])) {		//	
		include('function/edit.php');
		include('forms/edit_customers.php');
	}elseif(isset($_GET['customers-delete'])){
	include('function/delete.php');
	}
	if (isset($_GET['barang'])) {
			if ($_GET['barang'] == 'barang') {
				include('tables/barang.php');
			}elseif ($_GET['barang'] == 'barang-create') {
				include('function/create.php');
				include('forms/create_barang.php');
			}elseif ($_GET['barang'] == 'barang-create-form') {
				include('function/create.php');
				include('forms/create_barang.php');
			}
	}elseif (isset($_GET['barang-edit'])) {		//	
		include('function/edit.php');
		include('forms/edit_barang.php');
	}elseif(isset($_GET['barang-delete'])){
	include('function/delete.php');
	}
	if (isset($_GET['satuan'])) {
			if ($_GET['satuan'] == 'satuan') {
				include('tables/satuan.php');
			}elseif ($_GET['satuan'] == 'satuan-create') {
				include('function/create.php');
				include('forms/create_satuan.php');
			}elseif ($_GET['satuan'] == 'satuan-create-form') {
				include('function/create.php');
				include('forms/create_satuan.php');
			}
	}elseif (isset($_GET['satuan-edit'])) {		//	
		include('function/edit.php');
		include('forms/edit_satuan.php');
	}elseif(isset($_GET['satuan-delete'])){
	include('function/delete.php');
	}

	if (isset($_GET['pengiriman'])) {
			if ($_GET['pengiriman'] == 'pengiriman') {
				include('tables/pengiriman.php');
			}elseif ($_GET['pengiriman'] == 'pengiriman-create') {
				include('function/create.php');
				include('forms/create_pengiriman.php');
			}elseif ($_GET['pengiriman'] == 'pengiriman-create-form') {
				include('function/create.php');
				include('forms/create_pengiriman.php');
			}
	}elseif (isset($_GET['pengiriman-edit'])) {		//	
		include('function/edit.php');
		include('forms/edit_pengiriman.php');
	}elseif(isset($_GET['pengiriman-delete'])){
	include('function/delete.php');
	}
	if (isset($_GET['penerimaan'])) {
			if ($_GET['penerimaan'] == 'penerimaan') {
				include('tables/penerimaan.php');
			}elseif ($_GET['penerimaan'] == 'penerimaan-create') {
				include('function/create.php');
				include('forms/create_penerimaan.php');
			}elseif ($_GET['penerimaan'] == 'penerimaan-create-form') {
				include('function/create.php');
				include('forms/create_penerimaan.php');
			}
	}elseif (isset($_GET['penerimaan-edit'])) {		//	
		include('function/edit.php');
		include('forms/edit_penerimaan.php');
	}elseif(isset($_GET['penerimaan-delete'])){
	include('function/delete.php');
	}
	if (isset($_GET['user'])) {
			if ($_GET['user'] == 'user') {
				include('tables/user.php');
			}elseif ($_GET['user'] == 'user-create') {
				include('function/create.php');
				include('forms/create_user.php');
			}elseif ($_GET['user'] == 'user-create-form') {
				include('function/create.php');
				include('forms/create_user.php');
			}
	}elseif (isset($_GET['user-edit'])) {		//	
		include('function/edit.php');
		include('forms/edit_user.php');
	}elseif(isset($_GET['user-delete'])){
	include('function/delete.php');
	}
	/**else{
		include('forms/dashboard.php');
	}
	**/



 ?>