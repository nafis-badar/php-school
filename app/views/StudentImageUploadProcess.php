 <?php
 if (!isset($_SESSION)) {session_start();}
 require_once("../models/MOD.Accounts.php");
 $Handle = new MODAccounts();
$StudentID=$_POST['StudentID'];
 $targetfolder = "../StudentImages/";

 $targetfolder = $targetfolder .$StudentID.'.'. basename( $_FILES['file']['type']) ;
//echo basename( $_FILES['file']['type']);
 $ok=1;

$file_type=$_FILES['file']['type'];
//echo $file_type;
//if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg") 
if ($file_type=="image/jpeg" || $file_type=="image/gif" || $file_type=="image/png"  ) 
{
	if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
	{
		// $ID=$Handle->UpdateFileStatus($PayrollDetailsID);
	echo "ok";
	//echo "The file ". basename( $_FILES['file']['name']). " is uploaded";
	}
	else
	{
	// echo "Problem uploading file";
	echo "err1";
	}
}
else 
{
	echo "err2";
 //echo "You may only upload PDFs, JPEGs or GIF files.<br>";
}
 /*
$path = "testupload/";
$valid_file_formats = array("jpg", "png", "gif", "bmp","jpeg","pdf");
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
$name = $_FILES['photo']['name'];
$size = $_FILES['photo']['size'];
if(strlen($name)) {
list($txt, $ext) = explode(".", $name);
if(in_array($ext,$valid_file_formats)) {
if($size<(1024*1024)) {
$image_name = time().$session_id.".".$ext;
$tmp = $_FILES['photo']['tmp_name'];
if(move_uploaded_file($tmp, $path.$image_name)){
 mysql_query("UPDATE users SET profile_photo='$image_name' WHERE uid='$session_id'");
echo "<img src='testuploads/".$image_name."' class='preview'>";
}
else
echo "Image Upload failed";
}
else
echo "Image file size maximum 1 MB";
}
else
echo "Invalid file format";
}
else
echo "Please select image";
exit;
}*/
?>