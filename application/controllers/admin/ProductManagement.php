<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductManagement extends MY_Controller {
	public function __construct() {
		
        parent::__construct();
        
    }

	public function category($categoryID='')
	{
		
		$data = [];
		$data['title'] = "Category Management";
		$data['action'] = "admin/category-add";

		$sql = "SELECT * FROM product_category where active='Y'";
		$query = $this->db->query($sql);
		if($query) {
			$data['items'] = $query->result_array();
			// echo "<pre>",print_r($data);die();
		}
		$this->loadAdminView('admin/category',$data);
	}

	public function categoryAdd() {
		$category_name = $this->input->post('category_name',true);
		$category_description = $this->input->post('category_description',true);
		$category_image = uploadImage('category_image',['upload_path'=>'../assets/img/service/all']);
		$category_image_name = $category_image['name'];
		$dataToAdd = [
			'category_name'=>$category_name,
			'category_description'=>$category_description,
			'category_image'=>$category_image_name,
		];

		$status = $this->db->insert('product_category',$dataToAdd);
		if($status) {
			setFlashMsg("Added Successfully");
		} else {
			setFlashMsg("Something went wrong");
		}

		return redirect('admin/category');
		
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
