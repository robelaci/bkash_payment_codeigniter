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

		$sql = "SELECT * FROM product_category";
		$query = $this->db->query($sql);
		if($query) {
			$data['items'] = $query->result_array();
			// echo "<pre>",print_r($data);die();
		}
		if($categoryID !='') {
			$sql = "SELECT * FROM product_category where product_category_id='$categoryID'";
			$query = $this->db->query($sql);
			if($query) {
				$result = $query->result_array();
				$data['specific_item'] = !empty($result)? $result[0] : [];
				// echo "<pre>",print_r($data);die();
			}
		}
		$this->loadAdminView('admin/category',$data);
	}

	public function categoryAdd() {
		$category_name = $this->input->post('category_name',true);
		$category_description = $this->input->post('category_description',true);
		$category_image_name = '';
		if(!empty($_FILES['category_image']['tmp_name'])) {
			$uploaded_category_image = uploadImage('category_image',['upload_path'=>'../assets/img/service/all']);
			$category_image_name = $uploaded_category_image['name'];
		}
		$dataToAdd = [
			'category_name'=>$category_name,
			'category_description'=>$category_description,
			'category_image'=>$category_image_name,
		];

		$product_category_id = $this->input->post('product_category_id',true);
		if(empty($product_category_id)){
			$status = $this->db->insert('product_category',$dataToAdd);
		} else {
			$condition = ['product_category_id'=> $product_category_id];
			$status = $this->db->update('product_category',$dataToAdd,$condition);

		}
		if($status) {
			setFlashMsg("Added Successfully");
		} else {
			setFlashMsg("Something went wrong");
		}

		return redirect('admin/category');
		
	}

	public function product(){
		$data = [];
		$data['title'] = "Product Add Management";
		$data['action'] = "admin/product-add";

		$data['product_id'] = $product_id = $this->input->get('product_id');
		if(!empty($product_id)) {

			$sql = "SELECT * FROM product where active='Y' and product_id='$product_id'";
			$query = $this->db->query($sql);
			if($query) {
				$data['specific_item'] = $query->result_array();
			}
		}
		// get Product Category list
		$sql = "SELECT * FROM product_category where active='Y'";
		$query = $this->db->query($sql);
		$data['categories'] = [];
		if($query) {
			$data['categories'] = $query->result_array();
		}

		$this->loadAdminView('admin/product',$data);
	}

	public function productAdd(){
		// echo "<pre>",print_r($_POST);die();
		$data = [];
		$data['title'] = "Product Add Management";

		$product_id = $this->input->post('product_id',true);	

		$dataToAdd = [];	
    	$dataToAdd['product_name'] = $this->input->post('product_name',true);
    	$dataToAdd['product_slug'] = strtolower(str_replace(" ","-",$dataToAdd['product_name']));
    	$dataToAdd['product_price'] = $this->input->post('product_price',true);
    	$dataToAdd['category_id'] = $this->input->post('category_id',true);
    	$dataToAdd['product_desription'] = $this->input->post('product_desription',true);

		if(!empty($_FILES['product_image']['tmp_name'])) {
			$uploaded_product_image = uploadImage('product_image',['upload_path'=>'../assets/img/service/all']);
			$dataToAdd['product_image'] = $uploaded_product_image['name'];
		}

		if(empty($product_id)){
			$status = $this->db->insert('product',$dataToAdd);
		} else {
			$condition = ['product_id'=> $product_id];
			$status = $this->db->update('product',$dataToAdd,$condition);

		}
		if($status) {
			setFlashMsg("Added Successfully");
		} else {
			setFlashMsg("Something went wrong");
		}

		return redirect('admin/product');
		
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
