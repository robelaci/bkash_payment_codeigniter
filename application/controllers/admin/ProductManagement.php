<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductManagement extends MY_Controller {
	public function __construct() {
		
        parent::__construct();
        
    }

	public function category()
	{
		
		$data = [];
		$data['title'] = "Category Management";
		$data['action'] = "admin/category-add";

		$sql = "SELECT * FROM product_category where active='Y'";
		$query = $this->db->query($sql);
		if($query) {
			$data['result'] = $query->result_array();
			// echo "<pre>",print_r($data);die();
		}
		$this->loadAdminView('admin/category',$data);
	}

	public function categoryAdd() {
		print_r($_POST);
		print_r($_FILES);die();
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
