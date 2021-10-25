<?php 
require "koneksidb.php";

if (isset($_GET["state"])) {
   $state = $_GET["state"];
   $id = $_GET["id"];
   if ($id == "alarm") {
   	 $sql = "UPDATE tabel_setting SET alarm = '$state'";
   	 mysqli_query($koneksi, $sql);
   }
   if ($id == "notif") {
   	 $sql2 = "UPDATE tabel_setting SET notif = '$state'";
   	 mysqli_query($koneksi, $sql2); 		
   }
}	



 ?>