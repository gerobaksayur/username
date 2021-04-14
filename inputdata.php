<form name="frminput" method="POST" action="inputdata.php">
<table>
<tr><td>Nama Mahasiswa</td>
    <td>:</td>
    <td><input type="text" name="nama" size="30"></td>
</tr>
<tr><td>NIM</td>
    <td>:</td>
    <td><input type="text" name="nim" size="30"></td>
</tr>
<tr><td>Jurusan</td>
    <td>:</td>
    <td><input type="text" name="jurusan" size="35"></td>
</tr>
<tr><td>&nbsp;</td>
    <td> </td>
    <td><input type="submit" value="Kirim" name="kirim"><input type="reset" value="Hapus" name="reset"></td>
</tr>
</table>


</form>

<?php
include "koneksi.php";
if(isset($_POST["kirim"])){
    //input datanya disini
   $sql="insert into mahasiswa(nama, nim, jurusan) values ('$_POST[nama]','$_POST[nim]','$_POST[jurusan]') ";
   //echo $sql; untuk cek query saja
   $hasil=mysqli_query($koneksi,$sql);
   if($hasil) echo "Input data berhasil";
   else echo "Gagal input data";
include "tampildata.php";
}

?>