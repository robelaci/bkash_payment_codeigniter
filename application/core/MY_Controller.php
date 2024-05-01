<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');  

class MY_Controller extends CI_Controller {	
	public $page = '';
	

    function __construct() {
        parent::__construct();
    }

    public function loadView($page, $data = [],$template = 'master') {
        $templateData['head'] = $this->load->view('head', $data, TRUE);
        $templateData['header'] = $this->load->view('header', $data, TRUE);
        $templateData['content'] = $this->load->view($page, $data, TRUE);
        $templateData['footer'] = $this->load->view('footer', $data, TRUE);

        $this->load->view($template, $templateData);
        //exit();
    }
	public function loadAdminView($page, $data = [],$template = 'admin_master') {
        $templateData['head'] = $this->load->view('admin/head', $data, TRUE);
        $templateData['header'] = $this->load->view('admin/header', $data, TRUE);
        $templateData['content'] = $this->load->view($page, $data, TRUE);
        $templateData['footer'] = $this->load->view('admin/footer', $data, TRUE);

        $this->load->view('admin/'.$template, $templateData);
        //exit();
    }

    public function loadPrintView($page, $data = [], $template = 'dasboard')
    {
        $templateData['head'] = $this->load->view('template/print/head', $data, true);
        $templateData['content'] = $this->load->view($page, $data, true);
        $templateData['footer'] = $this->load->view('template/print/footer', $data, true);
        $this->load->view('template/print/dashboard', $templateData);
    }
    
    function SelectQuery($FieldName,$TableName,$Where = null,$Order = null,$limit=null){
        $top = "";
        if($limit !=null) {
            $top =" top $limit "." ";
        }
        $sql = "SELECT $top $FieldName FROM $TableName ";
        if(!empty($Where)){ $sql .= "WHERE $Where "; }
        $sql .= "$Order";
        $query = $this->db->query($sql);
        if ($query) {
            return $query->result_array();
        } else {
            return [];
        }
    }

    

    public function prepareDataTableOutput($data,$count) {
        $output = [
            'draw' => intval(isset($_POST['draw']) ? $_POST['draw']: 1),
            'recordsTotal' => $count,
            'recordsFiltered' => $count,
            'data' => $data
        ];
        return $output;
    }

    

}
