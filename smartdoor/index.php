<?php 
 require "template.php";
 $setting = query("SELECT * FROM tabel_setting")[0];


 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
 </head>
 <body>
    <center>
         <h3 class="mb-4 mt-2"> DOOR MONITORING</h3>

        

         <div class="row" style="width:20rem;">	
         	<div class="col">
         		 <div class="load-data"></div>
         	</div>
         	<div class="col mt-4">
		 	  	  <p>Alarm</p>
		 	  	   <?php 
		              if($setting["alarm"] == 1) { //checked = ON
		                  echo '<input type="checkbox" checked id ="alarm" onchange="sendData(this)" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">';
		               }
		               else { //unchecked = OFF
		                   echo '<input type="checkbox" id ="alarm" onchange="sendData(this)" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">';   
		                }
		            ?>
 	  	      <p class="mt-5">Notification</p>
 	  	          <?php 
		              if($setting["notif"] == 1) { //checked = ON
		                  echo '<input type="checkbox" checked id ="notif" onchange="sendData(this)" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">';
		               }
		               else { //unchecked = OFF
		                   echo '<input type="checkbox" id = "notif" onchange="sendData(this)" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">';   
		                }
		            ?>
		        
 	  </div>
  </div>
   
</center>

     <script>
          //send data
           function sendData(e){
              var xhr = new XMLHttpRequest();
                  if(e.checked){
                    xhr.open("GET", "getState.php?id="+e.id+"&state= 1", true);
                  }
                  else{
                    xhr.open("GET", "getState.php?id="+e.id+"&state= 0", true);
                  }
                xhr.send();
              }
      </script>



</body>
</html>