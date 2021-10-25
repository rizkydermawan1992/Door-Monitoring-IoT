<?php 

require "koneksidb.php";

 $data    = query("SELECT * FROM tabel_door ORDER BY id DESC")[0];
 
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?php 

	 		if ($data["door_state"] == 0) {
	 		  echo'<img src="img/door-open.png" style="height: 300px; width: 150px;">';
	 		}
	 		else{
	 		   echo'<img src="img/door-close.png" style="height: 300px; width: 150px;">';
	 		}
	 	?> 
 	
 	
 	
 </body>
 </html>