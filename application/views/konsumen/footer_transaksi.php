<!--footer section start-->		
		<footer>
			<div class="footer-top">
				<div class="container">
					<div class="foo-grids">
						<div class="col-md-3 footer-grid">
							<h4 class="footer-head">Who We Are</h4>
							<p>Women accessories adalah perusahaan yang bergerak dibidang pembuatan souvenir untuk wedding/pernikahan, instansi, seminar, sekolah, media promosi, cindermata, ulang tahun dll. Adapun beberapa contoh pesanan souvenir yang dibuat adalah gantungan kunci, tas ransel, pouch, tas kanvas, name tag, tas sepatu futsal, tas kosmetik, buku agenda dll.</p>
							<p>yang berlokasi di Surabaya & Sidoarjo.</p>
						</div>
						<div class="col-md-3 footer-grid">
							<h4 class="footer-head">Help</h4>
							<ul>
								<li><a href="howitworks.html">How it Works</a></li>						
								<li><a href="sitemap.html">Sitemap</a></li>
								<li><a href="faq.html">Faq</a></li>
								<li><a href="feedback.html">Feedback</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="typography.html">Shortcodes</a></li>
							</ul>
						</div>
						<div class="col-md-3 footer-grid">
							<h4 class="footer-head">Information</h4>
							<ul>
								<li><a href="regions.html">Locations Map</a></li>	
								<li><a href="terms.html">Terms of Use</a></li>
								<li><a href="popular-search.html">Popular searches</a></li>	
								<li><a href="privacy.html">Privacy Policy</a></li>	
							</ul>
						</div>
						<div class="col-md-3 footer-grid">
							<h4 class="footer-head">Contact Us</h4>
							<span class="hq">Our headquarters</span>
							<address>
								<ul class="location">
									<li><span class="glyphicon glyphicon-map-marker"></span></li>
									<li>CENTER FOR FINANCIAL ASSISTANCE TO DEPOSED NIGERIAN ROYALTY</li>
									<div class="clearfix"></div>
								</ul>	
								<ul class="location">
									<li><span class="glyphicon glyphicon-earphone"></span></li>
									<li>+0 561 111 235</li>
									<div class="clearfix"></div>
								</ul>	
								<ul class="location">
									<li><span class="glyphicon glyphicon-envelope"></span></li>
									<li><a href="mailto:info@example.com">mail@example.com</a></li>
									<div class="clearfix"></div>
								</ul>						
							</address>
						</div>
						<div class="clearfix"></div>
					</div>						
				</div>	
			</div>	
			<div class="footer-bottom text-center">
			<div class="container">
				<div class="footer-logo">
					<a href="#"><span>Women</span>accessories</a>
				</div>
				<div class="footer-social-icons">
					<ul>
						<li><a class="facebook" href="#"><span>Facebook</span></a></li>
						<li><a class="twitter" href="#"><span>Twitter</span></a></li>
						<li><a class="flickr" href="#"><span>Flickr</span></a></li>
						<li><a class="googleplus" href="#"><span>Google+</span></a></li>
						<li><a class="dribbble" href="#"><span>Dribbble</span></a></li>
					</ul>
				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>

		 <!-- Bootstrap core JavaScript-->
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
          
          ]
       });
       });
</script>
		</footer>
        <!--footer section end-->
</body>
</html>