<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {

	public function index() {
		
	}
	
	public function get_messages($lat,$long,$user_id,$category_id) {
		$this->load->model('api_model');
		$result = $this->api_model->get_messages($lat,$long,$user_id,$category_id);
		print_r($result);
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */