<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {
	public function __construct() {
        parent::__construct();
        
    }


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		
		// $this->load->view('welcome_message');
		// $this->load->view('header');
		// $this->load->view('Service_product');
		$data = [];
		$sql = "SELECT * FROM product_category where active='Y'";
		$query = $this->db->query($sql);
		if($query) {
			$data['result'] = $query->result_array();
			// echo "<pre>",print_r($data);die();
		}
		$this->loadView('Service_product',$data,'master');
	}

	public function getCategoryDetails() {
		$data['cat'] = $cat = $this->input->get('cat');
		$sql = "SELECT * FROM product where active='Y' and category_id='$cat'";
		$query = $this->db->query($sql);
		if($query) {
			$data['result'] = $query->result_array();
		}
		$this->loadView('category_details',$data);
	}
	
	public function productDetails(){
		$data['slug'] = $slug = $this->input->get('slug');
		$sql = "SELECT * FROM product where active='Y' and product_slug='$slug'";
		$query = $this->db->query($sql);
		if($query) {
			$data['result'] = $query->result_array();
		}
		$this->loadView('product_details',$data);
	}
	public function checkout(){
		$data['slug'] = $slug = $this->input->get('slug');
		$sql = "SELECT * FROM product where active='Y' and product_slug='$slug'";
		$query = $this->db->query($sql);
		if($query) {
			$result = $query->result_array();
			$data['result'] = $result[0];
			
		}
		$this->loadView('checkout',$data);
	}
}
