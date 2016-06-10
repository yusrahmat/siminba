        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <strong>Copyright &copy; 2016 <a href="#">Yus Rahmat</a>.</strong> All rights reserved.
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- jQueryUi -->
    <script src="../vendors/jquery-ui/jquery-ui.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!--DatetimePicker-->
    <script src="../vendors/bootstrap-datepicker/js/bootstrap-datepicker-min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- Datetime Picker -->
    <script src="../vendors/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <!-- jquery.inputmask -->
    <script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="js/custom.js"></script>

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->

    <!-- Combobox Permintaan-->
      <script type="text/javascript">    
      <?php 
      echo $jsArray; 
      echo $brgArray;
      ?>  
      function changeValue(id){  
      document.getElementById('nm_customer').value = custName[id].nama_customer;  
      document.getElementById('nm_kontak').value = custName[id].no_kontak;  
      };  
      function changeValues(id){  
      document.getElementById('nm_barang').value = brgName[id].nama_barang;  
      document.getElementById('jml').value = brgName[id].jumlah;  
      };   
      </script>  
    <!--End Combobox Permintaan-->

    <!-- Combobox Penerimaan-->
    <script type="text/javascript">  
    <?php  
    echo $SuppArray; 
    echo $brgArray2;
    ?>
      function changeValueSupp(id){  
      document.getElementById('nm_supplier').value = suppName[id].nama_supplier; 
      document.getElementById('nm_kontak_supp').value = suppName[id].no_kontak_supp;
    };
      function changeValuesBrg(id){  
      document.getElementById('nm_barang').value = brgName2[id].nama_barang;  
      document.getElementById('jl_stok_awal').value = brgName2[id].stok_awal;  
      }; 
    </script>
    <!--End Combobox Penerimaan-->

    <!-- Combobox Pengeluaran-->
    <script type="text/javascript">  
    <?php  
    echo $jsArrayKeluar; 
    ?>
      function changeValueNoMinta(id){  
      document.getElementById('tg_minta').value = mintaName[id].tanggal_minta; 
      document.getElementById('kd_customer').value = mintaName[id].kode_customer;
      document.getElementById('no_reff').value = mintaName[id].no_reff;
      document.getElementById('jml_minta').value = mintaName[id].jumlah_minta;
      document.getElementById('jml_kirim').value = mintaName[id].jumlah_kirim;
    };
    </script>
    <!--End Combobox Pengeluaran-->
        <!-- jquery.inputmask -->
    <script>
      $(document).ready(function() {
        $(":input").inputmask();
      });
    </script>
    <!-- /jquery.inputmask -->
     <script type="text/javascript">
            $(document).ready(function () {
                $('#tanggal').datepicker({
                    format: "dd-mm-yyyy",
                    autoclose:true
                });
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#tanggal_minta').datepicker({
                    format: "dd-mm-yyyy",
                    autoclose:true
                });
            });
        </script>

  </body>
</html>