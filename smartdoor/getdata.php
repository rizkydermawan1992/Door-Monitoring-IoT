<?php 
require "koneksidb.php";



if (isset($_GET["door"])) {
   $door     = mysqli_escape_string($koneksi, $_GET["door"]);
   $data     = query("SELECT * FROM penerima_notif");
   $setting  = query("SELECT * FROM tabel_setting")[0];
   $sensor   = query("SELECT * FROM tabel_door ORDER BY id DESC")[0];


    // Door 0 = open || 1 = closed
   if ($door == 0 AND $setting["msg_state"] == 1) {
   	  $msg_state = 0;
      $text = "DOOR MONITORING\n\nStatus = Open\nTime = ".date("Y-m-d, H:i:s");
      $notif = true;
   }
   else if ($door == 1 AND $setting["msg_state"] == 0) {
   	  $msg_state = 1;
   	  $text = "DOOR MONITORING\n\nStatus = Close\nTime = ".date("Y-m-d, H:i:s");
      $notif = true;
   }
   else{
   	  $msg_state = $setting["msg_state"];
      $notif = false;
   }

   if ($door != $sensor["door_state"] ) {
      updateDoor($door, $msg_state);
   }
   
   if($notif AND $setting["notif"] == 1){ //notif=1(active) notif=0(inactive)
       foreach ($data as $notif) {
         kirimPesan($notif["id_chat"], $text, $Token_bot);
       }
   }

   $array = ["alarm" => $setting["alarm"]]; //alarm=1(standby) alarm=0(non-standby)
   $json  = json_encode($array);
   echo $json;
  
   
}
else{
  echo "No Data";
}



 ?>