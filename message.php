<?php
if(isset($_POST['mobileNo'])){
		$mobile = $_POST['mobileNo'];
	}
	if (isset($_POST['message'])) {
		$message = $_POST['message'];

	}
	if (isset($_POST['emergyNo'])) {
		$message += $_POST['emergyNo'];

	}
?>
<?php
    include('api/way2sms-api.php');
    sendWay2SMS ( '9994463572' , 'thegreat' , $mobile , $message);
    header('Location: blood.php');
?>