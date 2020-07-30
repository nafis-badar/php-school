<?php
class PassController
{
	 
    function pass()
    { $filename="app/models/key";
    	if (file_exists($filename)){$key=	date ("dmYHis", filectime($filename));	$file =  file_get_contents($filename) ;
    	return $this->decryptthis($file,$key);}else{return;}
    }
    function decryptthis($data,$key){$encryption_key=base64_decode($key);list($encrypted_data, $iv) = array_pad(explode('::', base64_decode($data), 2),2,null);return openssl_decrypt($encrypted_data,'aes-256-cbc',$encryption_key,0,$iv);}
}
?>