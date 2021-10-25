<?php 
require "template.php";

if(isset($_POST["ubah"]))  {
    if(ubahPenerima($_POST) > 0) {
            echo "
                 <script> 
			        Swal.fire({ 
			            title: 'BERHASIL',
			            text: 'Data berhasil diubah',
			            icon: 'success', buttons: [false, 'OK'], 
			            }).then(function() { 
			                window.location.href='recipients.php'; 
			            });  
				</script>
                ";   
        }
                
   
    else {
      echo "
         <script> 
         Swal.fire({ 
            title: 'OOPS', 
            text: 'Data Gagal diubah!!!', 
            icon: 'warning', 
            dangerMode: true, 
            buttons: [false, 'OK'], 
            }).then(function() { 
                window.location.href='recipients.php'; 
            }); 
         </script>
        ";
    }
  }



 ?>

 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<h3 class="mb-4 mt-2">UBAH DATA </h3>

		   <?php 
               if(isset($_GET["id"])){
               	 $id      = mysqli_escape_string($koneksi, $_GET["id"]); 
                 $data    = query("SELECT * FROM penerima_notif WHERE id = '$id'")[0];
                 
           ?>
				 
				    <div class="container responsive-sm">
					  <form method="post" action="ubah.php">
	  					<table class="table" style="width: 25rem;">
						    	<tr>
						    		<th>Email</th>
						    		<td><input class="text-center col md-7" type="text" name="id_chat" value="<?=$data['id_chat'];?>" autocomplete = "off" required></td>
						    		<input type="text" name="id" value="<?=$data['id'];?>" hidden>
						    	</tr>	
						    	<tr>
						    		<th>Nama</th>
						    		<td><input class="text-center col md-7" type="text" name="nama" value="<?=$data['nama'];?>" autocomplete = "off" required></td>
						    	</tr>
						 </table> 
						 <button type="submit" name="ubah" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
						  <a href="recipients.php" type="button" class="btn btn-danger"><i class="fa fa-undo"></i> Batal</a>
					   </form>
			         </div>
			        
             <?php  
			    }
			 ?>

     
	</center>

</body>
</html>