<?php 
if(empty($_POST['nama'])) {
	header("Location:2_praktikum kosong.php");
} else {
	echo "<center>Nama :".$_POST['nama']."</center><br>";;
}
?>