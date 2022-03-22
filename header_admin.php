<?php
session_start();
error_reporting();
if($_SESSION['username'] && $_SESSION['baris'])
{

$id=ucwords($_SESSION['baris']['level']);
?>
<center>
<table border="5" width=790 height=500 bgcolor=grey>;
<tr><td align="char" height=80>
   <p align="left"><img src="./gambar/gambar2.JPG" width=70 height=50 border="0">
   <?php echo ucwords($_SESSION['username']);
echo "<br>"?></p>
</td>
</tr>
<td height=50 align=right bgcolor="silver">
<a href="index_user.php">Beranda</a> ||
<a href="data_kamar.php">Data Kamar</a> ||
<a href="fasilitas.php">Fasilitas Hotel</a> ||
<a href="logout.php">logout</a> ||
</td>
</tr>
<?php
}
?>