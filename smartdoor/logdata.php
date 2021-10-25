<?php 
	require "template.php";

// if(isset($_GET["Tanggal1"]) AND isset($_GET["Tanggal2"])){
//   $Tanggal1  = mysqli_escape_string($koneksi, $_GET["Tanggal1"]); $waktu1 = $Tanggal1." 00:00:00";
//   $Tanggal2  = mysqli_escape_string($koneksi, $_GET["Tanggal2"]); $waktu2 = $Tanggal2." 23:59:59"; 
// }
// else if(!isset($_GET["Tanggal1"]) AND !isset($_GET["Tanggal2"])){
//   $Tanggal1  = date("Y-m-d"); $waktu1 = $Tanggal1." 00:00:00";
//   $Tanggal2  = date("Y-m-d"); $waktu2 = $Tanggal2." 23:59:59"; 
// }

$data = query("SELECT * FROM tabel_door ORDER BY id DESC");


 ?>

 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <center>
  	<h3 class="mb-4 mt-2">LOG DATA </h3>
  	

	<!--  -->

	
<div class="table-responsive-sm">
	<table class="table table-bordered table-hover table-striped" style="width:20rem;">
	   <tr class="text-center text-white bg-dark"> 
		   <th>No.</th>
		   <th>Timestamp</th>
		   <th>Status</th>
	   </tr>
	<?php $no =1;?>

	<?php 
	   foreach ($data as $i) :
	   		if ($i["door_state"] == 0) {
	   			$color  = "text-danger";
	   			$status = '<i class="fa fa-door-open"></i>';
	   		}
	   		else{
	   			$color  = "text-primary";
	   			$status = '<i class="fa fa-door-closed"></i>';;
	   		}
	?> 
	   <tr>
	   		<td class="text-center"><?= $no;?></td>
	      	<td class="text-center"><?= $i["waktu"];?></td>
	      	<td class="text-center <?=$color;?>"><?= $status;?></td>
	   </tr>
	 <?php 
	    $no++;
	    endforeach;
	  ?>
	</table>
</div>

  	

  </center>	

</body>
</html>