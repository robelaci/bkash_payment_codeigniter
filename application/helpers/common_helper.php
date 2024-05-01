<?php

if (!function_exists('setFlashMsg')) {
    /**
     * set Flash Message
     * @param string $message
     * @param string $messageType
     */
    function setFlashMsg($message = "Successful", $messageType = "success")
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if ($messageType == 'success') {
            $_SESSION['success_msg'] = $message;
        } elseif ($messageType == 'error') {
            $_SESSION['error_msg'] = $message;
        } elseif ($messageType == 'info') {
            $_SESSION['info_msg'] = $message;
        } else {
            $_SESSION['default_msg'] = $message;
        }
    }
}



if (!function_exists('getFlashMsg')) {
    /**
     * get Flash Message
     * @return string
     */
    function getFlashMsg()
    {
        $message = "";
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['success_msg']) && $_SESSION['success_msg'] != '') {
            $message = getMsgWithHtml($_SESSION['success_msg'], 'success');
            unset($_SESSION['success_msg']);
        } elseif (isset($_SESSION['error_msg']) && $_SESSION['error_msg'] != '') {
            $message = getMsgWithHtml($_SESSION['error_msg'], 'error');
            unset($_SESSION['error_msg']);
        } elseif (isset($_SESSION['info_msg']) && $_SESSION['info_msg'] != '') {
            $message = getMsgWithHtml($_SESSION['info_msg'], 'info');
            unset($_SESSION['info_msg']);
        } elseif (isset($_SESSION['default_msg']) && $_SESSION['default_msg'] != '') {
            $message = getMsgWithHtml($_SESSION['default_msg'], 'default');
            unset($_SESSION['default_msg']);
        }
        return $message;
    }
}


if (!function_exists('getMsgWithHtml')) {
    function getMsgWithHtml($message, $msgType = 'success')
    {
        $messageHtml = "";
        if ($message == '') return $messageHtml;
		$buttonClose = "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'><i class='zmdi zmdi-close'></i></span>
						</button>";

        if ($msgType == 'success') {
            $messageHtml = "<div class='alert alert-success'>" . $message .$buttonClose ."</div>";
        } elseif ($msgType == 'error') {
            $messageHtml = "<div class='alert alert-danger'>" . $message .$buttonClose ."</div>";
        } elseif ($msgType == 'info') {
            $messageHtml = "<div class='alert alert-info'>" . $message .$buttonClose ."</div>";
        } else {
            $messageHtml = "<div class='alert alert-default'>" . $message . $buttonClose."</div>";
        }
        return $messageHtml;
    }
}


// Upload Image
function uploadImage($fileName,$uplaodOption = []) {
      
    try{
        $ext = pathinfo($_FILES[$fileName]["name"], PATHINFO_EXTENSION);
        
        $prefix = "";
        if(!empty($uplaodOption['prefix'])) {
            $prefix = $uplaodOption['prefix']."_";            
        }

        if(!empty($uplaodOption['pre_defined_name'])) {
            $newName = $prefix.$uplaodOption['pre_defined_name'].'.'.$ext;

        } else {
            $newName = $prefix.time().'_'.rand(1,10).'.'.$ext;
        }
        $tempname = $_FILES[$fileName]["tmp_name"]; 
        
        if(!empty($uplaodOption['upload_path'])) {
            $folder = $uplaodOption['upload_path']."/";
        } else {
            $folder = "uploads/";
        }
        // if(!file_exists($folder)) {
        //     mkdir($folder,0777);
        // }
        $fileLocation = $folder.$newName;
        $status = move_uploaded_file($tempname, $fileLocation);

        $response['success'] = false;
        if($status) {
            $response['success'] = true;
            $response['name'] = $newName;        
            $response['error'] = '';
            if(isset($uplaodOption['move_different_path'])) {
                rename($fileLocation, $uplaodOption['move_different_path'].$newName);
            }
        }
       

    }catch(\Exception $ex) {
        $response['error'] = $ex->getMessage();

    }
    return $response;
    
}
