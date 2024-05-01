<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bkashpayment extends CI_Controller {
	
	function __construct()
    {
		parent::__construct();
	   // Your own constructor code
        $this->load->library('session');
		$this->load->helper('url'); 
        $this->load->config('bkash');
     
        $test_mode =0;
        if($test_mode==1){
            $this->base_url = 'https://tokenized.sandbox.bka.sh/v1.2.0-beta'; 
        }else{
             $this->base_url = 'https://tokenized.pay.bka.sh/v1.2.0-beta';  
        }
        
        $this->credenital= $this->config->item('bkash_credentials');

		
	}
	 
	


    
    public function bkash_token()
    {

         $header = array(
                'Content-Type:application/json',
                'username:'.$this->credenital['USER_NAME'],
                'password:'.$this->credenital['PASSWORD']
                );
                
               
       

        $body_data = array('app_key'=> $this->credenital['APP_KEY'], 
        'app_secret'=>$this->credenital['APP_SECRET']);
        $body_data_json=json_encode($body_data);

       $response = $this->curlWithBody('/tokenized/checkout/token/grant','POST',$header,$body_data_json); 
    
   $token = json_decode($response)->id_token;
   
    
        return $token;
    }   
    
    
      public function Callback(){
          
          
           $allRequest = $_GET;
        if(isset($allRequest['status']) && $allRequest['status'] == 'failure'){
          
			echo $allRequest['status'] . ' <a href="https://noboit.com/Service_product.php">Try again</a>';

        }else if(isset($allRequest['status']) && $allRequest['status'] == 'cancel'){
           
			echo $allRequest['status'] . ' <a href="https://noboit.com/Service_product.php">Try again</a>';

        }else{
            
            $response = $this->executePayment($allRequest['paymentID']);

            $arr = json_decode($response,true);
            
            
    
            if(array_key_exists("statusCode",$arr) && $arr['statusCode'] != '0000'){
                
				echo $arr['statusMessage'].  ' <a href="https://noboit.com/Service_product.php">Try again</a>';


				die();
        
            }
            
            else if(array_key_exists("message",$arr)){
                // if execute api failed to response
                sleep(1);
                
                redirect('https://noboit.com/Service_product.php');  
                // $query = $this->queryPayment($allRequest['paymentID']);
                // return view('CheckoutURL.success')->with([
                //     'response' => $query
                // ]);
            }
            
    //database operation

	echo $response .  '<br> <a href="https://noboit.com/Service_product.php">Try again</a>';

        }

          
      }
    
  public function CreatePayment()
    {
        
        $amount = $_POST['amount'];
		if(!isset($amount)){

			$url = site_url('/');
    
            redirect($url); 
		}

         $header= $this->authHeaders();
         

         $body_data = array(
            'mode' => '0011',
            'payerReference' => ' ',
            'callbackURL' =>  "".base_url()."index.php/"."bkash-callback",
            'amount' => $amount ? $amount :5,
            'currency' => 'BDT',
            'intent' => 'sale',
            'merchantInvoiceNumber' => uniqid()
        );
        $body_data_json=json_encode($body_data);

       $response = $this->curlWithBody('/tokenized/checkout/create','POST',$header,$body_data_json);
       
       $bkashURL = json_decode($response)->bkashURL;
       
	   redirect($bkashURL);
    }  
    
  public function executePayment($paymentID)
    {

       $header= $this->authHeaders();

        $body_data = array(
            'paymentID' => $paymentID
        );
        $body_data_json=json_encode($body_data);

        $response =  $this->curlWithBody('/tokenized/checkout/execute','POST',$header,$body_data_json);

       
        return $response;
    }   


	public function curlWithBody($url,$method,$header,$body_data_json){
   
   
        $curl = curl_init($this->base_url.$url);
        curl_setopt($curl,CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl,CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl,CURLOPT_POSTFIELDS, $body_data_json);
        // curl_setopt($curl,CURLOPT_FOLLOWLOCATION, 1);
        // curl_setopt($curl, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);

		
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
    
    
    public function authHeaders(){
        return array(
            'Content-Type:application/json',
            'Authorization:' .$this->bkash_token(),
            'X-APP-Key:'.$this->credenital['APP_KEY']
        );
    }
    


	
}


 ?>
