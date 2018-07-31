<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ulalala extends CI_Controller {

		public function tes(){
		
			$this->load->library('assets');
			echo $this->assets->get_styles();
			//echo get_styles();
			
		}

}

?>
