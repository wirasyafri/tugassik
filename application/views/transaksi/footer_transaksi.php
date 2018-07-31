
	<script src="<?php echo base_url('assets/js/core/jquery.3.2.1.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/core/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/core/popper.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/plugin/jquery-mapael/jquery.mapael.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/demo.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/ready.min.js') ?>"></script>

	<script src="<?php echo base_url()?>assets/konsumen/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/konsumen/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>assets/konsumen/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url()?>assets/konsumen/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()?>assets/konsumen/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url()?>assets/konsumen/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url()?>assets/konsumen/js/sb-admin-datatables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/konsumen/js/gritter/js/jquery.gritter.js"></script>
<script src="<?php echo base_url()?>assets/konsumen/js/gritter/js/gritter-init.js" type="text/javascript"></script>
         <script type="text/javascript">
      $(document).ready(function() {
       $('#example').DataTable({
        "processing":true,
        "serverSide":true,
        "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]],
        "ajax":{
          url : "<?php echo site_url('transaksi/data_server')?>",
          type : "POST"
        },
        "columnDefs":
        [
         {
            "targets":0,
            "data":"id_tansaksi",
          },

          {
            "targets":1,
            "data":"id_product",
          }, 
          {
            "targets":2,
            "data":"product",
          }, 

          {
            "targets":3,
            "data":"category",
          },
          {
            "targets":4,
            "data":"description",
          }, 
           {
            "targets":5,
            "data":"harga",
          }, 
            
           {
            "targets":6,
            "data":"penerima",
          },
           {
            "targets":7,
            "data":"jumlah",
          },
           {
            "targets":8,
            "data":"atm",
          }, 
           {
            "targets":9,
            "data":"alamat",
          },
           {
            "targets":10,
            "data":"kota",
          },
              {
            "targets":11,
            "data":"provinsi",
          }, 
           {
            "targets":12,
            "data":"no_tlp",
          }, 
            {
            "targets":13,
            "data":"jasa_kirim",
          },  
           {
            "targets":14,
            "data":"status",
          },
           {
            "targets":15,
            "data":"no_resi",
          },
           {
            "targets":16,
            "data":null,
            "searchable":false,
            "render":function(data,type,full,meta){
              return '<a href="<?=site_url()?>/transaksi/proses/'+data["id_tansaksi"]+'"><button type="button" class="btn btn-warning">Proses<i class="fa fa-fw fa-edit"></i></button></a>';
            }
          },
            {
            "targets":17,
            "data":null,
            "searchable":false,
            "render":function(data,type,full,meta){
              return '<a href="<?=site_url()?>/transaksi/delete/'+data["id_tansaksi"]+'"><button type="button" class="btn btn-danger">Delete<i class="fa fa-fw fa-edit"></i></button></a>';
            }
          },
          
          ]
       });
       });
</script>
</body>
</html>
