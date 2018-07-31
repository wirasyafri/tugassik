<?php $this->load->view('konsumen/header')?>
<div class="header">
		<div class="container">
			<div class="logo">
				<a href="index.html"><span>Women</span>Accessories</a>
			</div>
			<div class="header-right">
			<a class="account" href="<?php echo site_url('Konsumen/index'); ?> ">BACK</a>
			
	<!-- Large modal -->
			<div class="selectregion">
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
					aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;</button>
									<h4 class="modal-title" id="myModalLabel">
										Please Choose Your Location</h4>
								</div>
								<div class="modal-body">
									 <form class="form-horizontal" role="form">
										<div class="form-group">
											<select id="basic2" class="show-tick form-control" multiple>
												<optgroup label="Popular Cities">
													<option selected style="display:none;color:#eee;">Select City</option>
													<option>Birmingham</option>
													<option>Anchorage</option>
													<option>Phoenix</option>
													<option>Little Rock</option>
													<option>Los Angeles</option>
													<option>Denver</option>
													<option>Bridgeport</option>
													<option>Wilmington</option>
													<option>Jacksonville</option>
													<option>Atlanta</option>
													<option>Honolulu</option>
													<option>Boise</option>
													<option>Chicago</option>
													<option>Indianapolis</option>
												</optgroup>
												<optgroup label="More Cities">
													<optgroup label="Alabama">
														<option>Birmingham</option>
														<option>Montgomery</option>
														<option>Mobile</option>
														<option>Huntsville</option>
														<option>Tuscaloosa</option>
													</optgroup>
													<optgroup label="Alaska">
														<option>Anchorage</option>
														<option>Fairbanks</option>
														<option>Juneau</option>
														<option>Sitka</option>
														<option>Ketchikan</option>
													</optgroup>
													<optgroup label="Arizona">
														<option>Phoenix</option>
														<option>Tucson</option>
														<option>Mesa</option>
														<option>Chandler</option>
														<option>Glendale</option>
													</optgroup>
													<optgroup label="Arkansas">
														<option>Little Rock</option>
														<option>Fort Smith</option>
														<option>Fayetteville</option>
														<option>Springdale</option>
														<option>Jonesboro</option>
													</optgroup>
													<optgroup label="California">
														<option>Los Angeles</option>
														<option>San Diego</option>
														<option>San Jose</option>
														<option>San Francisco</option>
														<option>Fresno</option>
													</optgroup>
													<optgroup label="Colorado">
														<option>Denver</option>
														<option>Colorado</option>
														<option>Aurora</option>
														<option>Fort Collins</option>
														<option>Lakewood</option>
													</optgroup>
													<optgroup label="Connecticut">
														<option>Bridgeport</option>
														<option>New Haven</option>
														<option>Hartford</option>
														<option>Stamford</option>
														<option>Waterbury</option>
													</optgroup>
													<optgroup label="Delaware">
														<option>Wilmington</option>
														<option>Dover</option>
														<option>Newark</option>
														<option>Bear</option>
														<option>Middletown</option>
													</optgroup>
													<optgroup label="Florida">
														<option>Jacksonville</option>
														<option>Miami</option>
														<option>Tampa</option>
														<option>St. Petersburg</option>
														<option>Orlando</option>
													</optgroup>
													<optgroup label="Georgia">
														<option>Atlanta</option>
														<option>Augusta</option>
														<option>Columbus</option>
														<option>Savannah</option>
														<option>Athens</option>
													</optgroup>
													<optgroup label="Hawaii">
														<option>Honolulu</option>
														<option>Pearl City</option>
														<option>Hilo</option>
														<option>Kailua</option>
														<option>Waipahu</option>
													</optgroup>
													<optgroup label="Idaho">
														<option>Boise</option>
														<option>Nampa</option>
														<option>Meridian</option>
														<option>Idaho Falls</option>
														<option>Pocatello</option>
													</optgroup>
													<optgroup label="Illinois">
														<option>Chicago</option>
														<option>Aurora</option>
														<option>Rockford</option>
														<option>Joliet</option>
														<option>Naperville</option>
													</optgroup>
													<optgroup label="Indiana">
														<option>Indianapolis</option>
														<option>Fort Wayne</option>
														<option>Evansville</option>
														<option>South Bend</option>
														<option>Hammond</option>														       
													</optgroup>
													<optgroup label="Iowa">
														<option>Des Moines</option>
														<option>Cedar Rapids</option>
														<option>Davenport</option>
														<option>Sioux City</option>
														<option>Waterloo</option>       													
													</optgroup>
													<optgroup label="Kansas">
														<option>Wichita</option>
														<option>Overland Park</option>
														<option>Kansas City</option>
														<option>Topeka</option>
														<option>Olathe  </option>            													
													</optgroup>
													<optgroup label="Kentucky">
														<option>Louisville</option>
														<option>Lexington</option>
														<option>Bowling Green</option>
														<option>Owensboro</option>
														<option>Covington</option>        														
													</optgroup>
													<optgroup label="Louisiana">
														<option>New Orleans</option>
														<option>Baton Rouge</option>
														<option>Shreveport</option>
														<option>Metairie</option>
														<option>Lafayette</option>          														
													</optgroup>
													<optgroup label="Maine">
														<option>Portland</option>
														<option>Lewiston</option>
														<option>Bangor</option>
														<option>South Portland</option>
														<option>Auburn</option>         														
													</optgroup>
													<optgroup label="Maryland">
														<option>Baltimore</option>
														<option>Frederick</option>
														<option>Rockville</option>
														<option>Gaithersburg</option>
														<option>Bowie</option>         														
													</optgroup>
													<optgroup label="Massachusetts">
														<option>Boston</option>
														<option>Worcester</option>
														<option>Springfield</option>
														<option>Lowell</option>
														<option>Cambridge</option>  
													</optgroup>
													<optgroup label="Michigan">
														<option>Detroit</option>
														<option>Grand Rapids</option>
														<option>Warren</option>
														<option>Sterling Heights</option>
														<option>Lansing</option> 
													</optgroup>
													<optgroup label="Minnesota">
														<option>Minneapolis</option>
														<option>St. Paul</option>
														<option>Rochester</option>
														<option>Duluth</option>
														<option>Bloomington</option>      														
													</optgroup>
													<optgroup label="Mississippi">
														<option>Jackson</option>
														<option>Gulfport</option>
														<option>Southaven</option>
														<option>Hattiesburg</option>
														<option>Biloxi</option>         														
													</optgroup>
													<optgroup label="Missouri">
														<option>Kansas City</option>
														<option>St. Louis</option>
														<option>Springfield</option>
														<option>Independence</option>
														<option>Columbia</option>            														
													</optgroup>
													<optgroup label="Montana">
														<option>Billings</option>
														<option>Missoula</option>
														<option>Great Falls</option>
														<option>Bozeman</option>
														<option>Butte-Silver Bow</option>         														
													</optgroup>
													<optgroup label="Nebraska">
														<option>Omaha</option>
														<option>Lincoln</option>
														<option>Bellevue</option>
														<option>Grand Island</option>
														<option>Kearney</option>        													
													</optgroup>
													<optgroup label="Nevada">
														<option>Las Vegas</option>
														<option>Henderson</option>
														<option>North Las Vegas</option>
														<option>Reno</option>
														<option>Sunrise Manor</option>            													
													</optgroup>
													<optgroup label="New Hampshire">
														<option>Manchesters</option>
														<option>Nashua</option>
														<option>Concord</option>
														<option>Dover</option>
														<option>Rochester</option>              													
													</optgroup>
													<optgroup label="New Jersey">
														<option>Newark</option>
														<option>Jersey City</option>
														<option>Paterson</option>
														<option>Elizabeth</option>
														<option>Edison</option> 
													</optgroup>
													<optgroup label="New Mexico">
														<option>Albuquerque</option>
														<option>Las Cruces</option>
														<option>Rio Rancho</option>
														<option>Santa Fe</option>
														<option>Roswell</option>       
													</optgroup>
													<optgroup label="New York">
														<option>New York</option>
														<option>Buffalo</option>
														<option>Rochester</option>
														<option>Yonkers</option>
														<option>Syracuse</option>        														
													</optgroup>
													<optgroup label="North Carolina">
														<option>Charlotte</option>
														<option>Raleigh</option>
														<option>Greensboro</option>
														<option>Winston-Salem</option>
														<option>Durham</option>          														
													</optgroup>
													<optgroup label="North Dakota">
														<option>Fargo</option>
														<option>Bismarck</option>
														<option>Grand Forks</option>
														<option>Minot</option>
														<option>West Fargo</option>
													</optgroup>
													<optgroup label="Ohio">
														<option>Columbus</option>
														<option>Cleveland</option>
														<option>Cincinnati</option>
														<option>Toledo</option>
														<option>Akron</option>      
													</optgroup>
													<optgroup label="Oklahoma">
														<option>Oklahoma City</option>
														<option>Tulsa</option>
														<option>Norman</option>
														<option>Broken Arrow</option>
														<option>Lawton</option>        														
													</optgroup>
													<optgroup label="Oregon">
														<option>Portland</option>
														<option>Eugene</option>
														<option>Salem</option>
														<option>Gresham</option>
														<option>Hillsboro</option>          														
													</optgroup>
													<optgroup label="Pennsylvania">
														<option>Philadelphia</option>
														<option>Pittsburgh</option>
														<option>Allentown</option>
														<option>Erie</option>
														<option>Reading</option>         														
													</optgroup>
													<optgroup label="Rhode Island">
														<option>Providence</option>
														<option>Warwick</option>
														<option>Cranston</option>
														<option>Pawtucket</option>
														<option>East Providence</option>   
													</optgroup>
													<optgroup label="South Carolina">
														<option>Columbia</option>
														<option>Charleston</option>
														<option>North Charleston</option>
														<option>Mount Pleasant</option>
														<option>Rock Hill</option> 
													</optgroup>
													<optgroup label="South Dakota">
														<option>Sioux Falls</option>
														<option>Rapid City</option>
														<option>Aberdeen</option>
														<option>Brookings</option>
														<option>Watertown</option> 
													</optgroup>
													<optgroup label="Tennessee">
														<option>Memphis</option>
														<option>Nashville</option>
														<option>Knoxville</option>
														<option>Chattanooga</option>
														<option>Clarksville</option>       
													</optgroup>
													<optgroup label="Texas">
														<option>Houston</option>
														<option>San Antonio</option>
														<option>Dallas</option>
														<option>Austin</option>
														<option>Fort Worth</option>   
													</optgroup>
													<optgroup label="Utah">
														<option>Salt Lake City</option>
														<option>West Valley City</option>
														<option>Provo</option>
														<option>West Jordan</option>
														<option>Orem</option>   
													</optgroup>	
													<optgroup label="Vermont">
														<option>Burlington</option>
														<option>Essex</option>
														<option>South Burlington</option>
														<option>Colchester</option>
														<option>Rutland</option>   
													</optgroup>
													<optgroup label="Virginia">
														<option>Virginia Beach</option>
														<option>Norfolk</option>
														<option>Chesapeake</option>
														<option>Arlington</option>
														<option>Richmond</option> 
													</optgroup>	
													<optgroup label="Washington">
														<option>Seattle</option>
														<option>Spokane</option>
														<option>Tacoma</option>
														<option>Vancouver</option>
														<option>Bellevue</option> 
													</optgroup>	
													<optgroup label="West Virginia">
														<option>Charleston</option>
														<option>Huntington</option>
														<option>Parkersburg</option>
														<option>Morgantown</option>
														<option>Wheeling</option> 
													</optgroup>	
													<optgroup label="Wisconsin">
														<option>Milwaukee</option>
														<option>Madison</option>
														<option>Green Bay</option>
														<option>Kenosha</option>
														<option>Racine</option>
													</optgroup>
													<optgroup label="Wyoming">
														<option>Cheyenne</option>
														<option>Casper</option>
														<option>Laramie</option>
														<option>Gillette</option>
														<option>Rock Springs</option>
													</optgroup>			
												</optgroup>
											</select>
										</div>
									  </form>    
								</div>
							</div>
						</div>
					</div>
				<script>
				$('#myModal').modal('');
				</script>
			</div>
		</div>
		</div>
	</div>
	<div class="banner text-center">
	  <div class="container">    
			<h1>Sell or Advertise   <span class="segment-heading">    anything online </span> with Resale</h1>
			<p>Lengkapi data pengiriman</p>
			<a href="<?php echo site_url('Konsumen/index'); ?>">HOME</a>
	  </div>
	</div>
	<!--single-page-->
	<div class="single-page main-grid-border">
		<div class="container">
			<ol class="breadcrumb" style="margin-bottom: 5px;">
				<li><a href="<?php echo site_url('Konsumen/index'); ?> ">Home</a></li>
				<li><a href="">All Ads</a></li>
				<li class="active"><a href="">Mobiles</a></li>
				<li class="active">Mobile Phone</li>
			</ol>
			<div class="product-desc">
				<div class="col-md-7 product-view">
					<h2>Lengkapi data pengiriman barang</h2>
					<p> <i class="glyphicon glyphicon-map-marker"></i><a href="#">state</a>, <a href="#">city</a>| Added at 06:55 pm, Ad ID: 987654321</p>
					
					<!-- FlexSlider -->
					 
				 <?php echo validation_errors();  ?>
				<?php echo form_open_multipart('Konsumen/beli/'.$this->uri->segment(3)); ?>
					<!-- //FlexSlider -->
					<div class="product-details">

						<div class="form-group">
						<label class="">ID_PROUCT</label>
						</div>
						<div class="form-group"readonly="">
						<input type="text" class="form-control" name="id_product" value="<?php echo $user[0]->id?>"readonly="">
						</div>
						<div class="form-group">
						<label class="">PRODUCT</label>
						</div>
						<div class="form-group">
						<input type="text" class="form-control" name="product" value="<?php echo $user[0]->product?>"readonly="">
						</div>
						<div class="form-group">
						<label class="">CATEGOTY</label>
						</div>
						<div class="form-group">
						<input type="text" class="form-control" name="category" value="<?php echo $user[0]->category?>"readonly="">
						</div>
						<div class="form-group">
						<label class="">DESCRIPTION</label>
						</div>
						<div class="form-group">

						<textarea name="description" class="form-control" value="<?php echo $user[0]->description?>" readonly=""><?php echo $user[0]->description?></textarea>
						</div>

						<div class="form-group">
						<label class="">HARGA</label>
						</div>
						<div class="form-group">
						<input type="text" class="form-control" readonly="" name="harga" value="<?php echo $user[0]->price?>"readonly="">
						</div>

						<div class="form-group">
						<label class="">NAMA PENERIMA</label>
						</div>
						<div class="form-group">
						<input type="text" class="form-control" name="penerima" value="">
						</div>
						
						<div class="form-group">
						<label class="">JUMLAH PEMBELIAN</label>
						</div>
						<div class="form-group">
						<input type="text" class="form-control" name="jumlah">
						</div>

						<div class="form-group">
						<label class="">ATM</label>
						</div>
						<div class="form-group">
						<select class="form-control" id="sel1" name="atm" >
							    <option>..Pilih.....</option>
							    <option>BNI</option>
							    <option>BTN</option>
							    <option>BRI</option>
							    <option>MANDIRI</option>
							    <option>Bank Jatim</option>
						 </select>
						</div>
						
						<div class="form-group">
						<label class="">ALAMAT</label>
						</div>
						<div class="form-group">
						<textarea name="alamat" class="form-control"></textarea>
						</div>

						<div class="form-group">
						<label class="">KOTA</label>
						</div>
						<div class="form-group">
						<input type="text" name="kota" class="form-control">
						</div>

						<div class="form-group">
						<label class="">PROVINSI</label>
						</div>
						<div class="form-group">
						<input type="text" name="provinsi" class="form-control">
						</div>

						<div class="form-group">
						<label class="">No Telepon</label>
						</div>
						<div class="form-group">
						<input type="number" class="form-control" name="no_tlp">
						</div>

						<div class="form-group">
						<label class="">Jasa pengantar / JNE / J&T</label>
						</div>
						<div class="form-group">
						<select class="form-control" id="sel1" name="jasa_kirim" >
							    <option> JNE </option>
							    <option>J&T</option>
							    <option> Kantor pos</option>
						 </select>
						</div>

						<button type="submit" > simpan</button>

					 <?php echo form_close(); ?>
					</div>
				</div>





				<div class="col-md-5 product-details-grid">
					<div class="item-price">
						<div class="product-price">
							<p class="p-price">ID PRODUCT</p>
							<h3 class="rate"><?php echo $user[0]->id?></h3>
							<div class="clearfix"></div>
						</div>
						<div class="condition">
							<p class="p-price">NAMA PRODUCT</p>
							<h4><?php echo $user[0]->product?></h4>
							<div class="clearfix"></div>
						</div>
						<div class="itemtype">
							<p class="p-price">CATEGORI</p>
							<h4><?php echo $user[0]->category?> | <?php echo $data[0]->name?></h4>
							<div class="clearfix"></div>
						</div>
						<div class="itemtype">
							<p class="p-price">QTY</p>
							<h4><?php echo $user[0]->qty?></h4>
							<div class="clearfix"></div>
						</div>
						<div class="itemtype">
							<p class="p-price">PRICE</p>
							<h4><?php echo $user[0]->price?></h4>
							<div class="clearfix"></div>
						</div>
						<div class="itemtype">
							<p class="p-price">IMAGE</p>
							<h4><img width="130" height="150" src="<?=base_url()?>assets/uploads/<?php echo $user[0]->foto?>"></h4>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="interested text-center">
						<h4>Interested in this Ad?<small> Contact the Seller!</small></h4>
						<p><i class="glyphicon glyphicon-earphone"></i>00-85-9875462655</p>
					</div>
				</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<?php $this->load->view('konsumen/footer')?>