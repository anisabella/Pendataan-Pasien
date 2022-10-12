<?php
include("koneksi.php"); ?>

<html>
    <head>
</head>
<body>
    <h1> Data Pasien</h1>
    <h4> <a href=tambah_pasien.php>Ke Halaman Pertama</a></h4>
    <table border="1">
        <tr>
            <th>id</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>No telp</th>
            <th>Agama</th>
            <th>Tanggal Masuk</th>
            <th>Gejala</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>No Kamar</th>
        </tr>

<?php
  include("koneksi.php");
  $sql='SELECT * FROM tb_pasien';
  $query= mysqli_query($koneksi, $sql);

  while($datapasien=mysqli_fetch_array($query)){
  
    echo "<tr>";
          echo "<td>".$datapasien['id']."</td>";
          echo "<td>".$datapasien['Nama']."</td>";
          echo "<td>".$datapasien['Alamat']."</td>";
          echo "<td>".$datapasien['Jenis_Kelamin']."</td>";
          echo "<td>".$datapasien['No_telp']."</td>";
          echo "<td>".$datapasien['Agama']."</td>";
          echo "<td>".$datapasien['Tanggal_Masuk']."</td>";
          echo "<td>".$datapasien['Gejala']."</td>";
          echo "<td>".$datapasien['Tempat_Lahir']."</td>";
          echo "<td>".$datapasien['Tanggl_Lahir']."</td>";
          echo "<td>".$datapasien['No_Kamar']."</td>";
          echo "<td>";
          echo "<a href='edit-pendataanpasien?id=".$datapasien['id']."'>Edit</a> |";
          echo "<a href='hapus-pendataanpasien?id=".$datapasien['id']."'>Hapus</a>";
          echo "</td>";
    echo "</tr>";
  }
?>
</table>
</body>
</html>