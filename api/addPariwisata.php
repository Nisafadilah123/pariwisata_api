<?php
    require "..\config\connect.php"; 

    if ($_SERVER['REQUEST_METHOD']=="POST") {
        # code...
        $response = array();
        $id = $_POST['id'];
        $nama_tempat = $_POST['nama_tempat'];
        $htm = $_POST['htm'];
        $hari_buka = $_POST['hari_buka'];
        $alamat = $_POST['alamat'];
        $foto = $_POST['foto'];
        $idUsers = $_POST['idUsers'];

         $insert = "INSERT INTO pariwisata VALUE( '$id','$nama_tempat','$htm','$hari_buka', '$alamat', '$foto', '$idUsers')";
         if (mysqli_query($con, $insert)) {
             # code...
             $response['value']=1;
             $response['message']="Berhasil ditambahkan";
             echo json_encode($response);
         } else {
             # code...
             $response['value']=0;
             $response['message']="Gagal ditambahkan";
             echo json_encode($response);
         }  
    }
?>