<!DOCTYPE html>
<html >
<head>
    <title>Form Pendaftaran Pasien Baru</title>
</head>
<body>
    <header>
        <h3>Form Pendaftaran Pasien Baru</h1>
</header>
<form action="proses_pendaftaran.php" method="POST">
    <fieldset>
        <p>
            <label for="nama">Nama Lengkap :</label>
            <input type="text" name="nama" />
</p>
<p>
            <label for="alamat">Alamat :</label>
            <textarea name="alamat" row="5"></textarea>
</p>
<p>
             <label for="jk">Jenis Kelamin :</label>
             <label><input type="radio" name="JK" value="laki-laki" />Laki-Laki</label>
             <label><input type="radio" name="JK" value="perempuan" />Perempuan</label>
</p>
<p>
             <label for="notelp">No Telepon :</label>
             <input type="number" name="notelp" />
</p>
<p>
             <label for="agama">Agama :</label>
             <select name="agama">
                <option value="islam">Islam</option>
                <option value="katolik">Katolik</option>
                <option value="hindu">Hindu</option>
                <option value="budha">Budha</option>
                <option value="konghucu">Konghucu</option>
</select>
</p>
<p>
                <label for="tgl_masuk">Tanggal_Masuk :</label>
                <input type="date" name="tgl_masuk"/>
</p>
<p>
                <label for="gejala">Gejala :</label>
                <input type="text" name="gejala" />
</p>
<p>
                <label for="tmp_lahir">Tempat_Lahir :</label>
                <input type="text" name="tmp_lahir" />
</p>
<p>
                <label for="tgl_lahir">Tanggl_Lahir :</label>
                <input type="date" name="tgl_lahir" />
</p>
<p>
                <label for="no_kamar">No_Kamar :</label>
                <input type="number" name="no_kamar" />
</p>
<p>
                <input type="submit" value="daftar" name="daftar" />
</p>
</fieldset>
</form>
</body>
</html>


