<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>AksesSoris Wanita</title>
<link rel="stylesheet" href="<?php echo base_url('assets/konsumen/css/bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/konsumen/css/bootstrap-select.css') ?>">
<link href="<?php echo base_url('assets/konsumen/css/style.css') ?>" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url('assets/konsumen/css/flexslider.css') ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url('assets/konsumen/css/font-awesome.min.css') ?>" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

 <!-- Bootstrap core CSS-->
 
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url()?>assets/konsumen/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->

<!--//fonts-->	
<!-- js -->
<script type="text/javascript" src="<?php echo base_url('assets/konsumen/js/jquery.min.js');?>"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url('assets/konsumen/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/konsumen/js/bootstrap-select.js');?>"></script>
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
<script type="text/javascript" src="<?php echo base_url('assets/konsumen/js/jquery.leanModal.min.js');?>"></script>
<link href="<?php echo base_url('assets/konsumen/css/jquery.uls.css');?>" rel="stylesheet"/>
<link href="<?php echo base_url('assets/konsumen/css/jquery.uls.grid.css');?>" rel="stylesheet"/>
<link href="<?php echo base_url('assets/konsumen/css/jquery.uls.lcd.css');?>" rel="stylesheet"/>
<!-- Source -->
<script src="<?php echo base_url('assets/konsumen/js/jquery.uls.data.js');?>"></script>
<script src="<?php echo base_url('assets/konsumen/js/jquery.uls.data.utils.js');?>"></script>
<script src="<?php echo base_url('assets/konsumen/js/jquery.uls.lcd.js');?>"></script>
<script src="<?php echo base_url('assets/konsumen/js/jquery.uls.languagefilter.js');?>"></script>
<script src="<?php echo base_url('assets/konsumen/js/jquery.uls.regionfilter.js');?>"></script>
<script src="<?php echo base_url('assets/konsumen/js/jquery.uls.core.js');?>"></script>
<script>
			$( document ).ready( function() {
				$( '.uls-trigger' ).uls( {
					onSelect : function( language ) {
						var languageName = $.uls.data.getAutonym( language );
						$( '.uls-trigger' ).text( languageName );
					},
					quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
				} );
			} );
		</script>
</head>