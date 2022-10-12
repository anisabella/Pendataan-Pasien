<?php
include("koneksi.php"); 

if(isset($_POST['daftar'])){
    $nama=$_POST['Nama'];
    $alamat=$_POST['Alamat'];
    $jenis_kelamin=$_POST['Jenis_Kelamin'];
    $no_telp=$_POST['No_telp'];
    $agama=$_POST['Agama'];
    $tanggal_masuk =$_POST['Tanggal_Masuk'];
    $gejala= $_POST['Gejala'];
    $tempat_lahir = $_POST['Tempat_Lahir'];
    $tanggl_lahir=$_POST['Tanggl_Lahir'];
    $no_kamar=$_POST['No_Kamar'];

    $sql = "INSERT INTO tb_pasien (Nama, Alamat, Jenis_Kelamin, No_telp, Agama, Tanggal_Masuk, Gejala, Tempat_Lahir, Tanggl_Lahir, No_Kamar) VALUES('$nama','$alamat','$jenis_kelamin','$no_telp','$agama','$tanggal_masuk','$gejala','$tempat_lahir','$tanggl_lahir','$no_kamar');
    $query = mysqli_query($koneksi, $sql);

    if($query) {
        header('Location:index.php?status=sukses');
        }else{
        header('Location:index.php?status=gagal');
            }
            }
        ?>