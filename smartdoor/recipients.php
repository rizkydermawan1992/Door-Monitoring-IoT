<?php 

require "template.php";

$notif    = query("SELECT * FROM penerima_notif");

if(isset($_POST["kirim"]))  {
    if(tambahPenerima($_POST) > 0) {
            echo "
          <script> 
			        Swal.fire({ 
			            title: 'BERHASIL',
			            text: 'Data Penerima Telah disimpan',
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
            text: 'Data Penerima gagal ditambahkan', 
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
 		<h4 class="mb-4 mt-2">DATA PENERIMA BROADCAST</h4>

 		<div class="container">
					    <button type="button" class="btn btn-primary mb-2" href="#" data-toggle="modal"data-target="#tambahsubject"><i class="fa fa-user-plus"></i> Registrasi
					    </button>
          </div>

          <div class="table-responsive-sm">
  					<table class="table table-striped" style="width:25rem;">
					    	<tr class="text-center bg-dark text-white">
					    		<th>No.</th>
					    		<th>ID Telegram</th>
					    		<th>Nama</th>
					    		<th>Opsi</th>
					    	</tr>	
					     <?php 
					     $no = 1;
					     foreach ($notif as $i) : ?> 
					    	<tr>
					    		<td class="text-center"><?=$no;?></td>
					    		<td class="text-center"><?=$i["id_chat"];?></td>
					    		<td><?=$i["nama"];?></td>
					    		<td class="text-center">
					    			 <a class="ubah btn btn-success btn-sm" href="ubah.php?id=<?=$i["id"];?>"><i class="fa fa-edit"></i></a>
       								 <a class="hapus btn btn-danger btn-sm alert_hapus" href="hapus.php?id=<?=$i["id"];?>"><i class="fa fa-trash-alt"></i></a>
					    	    </td>
					    	</tr>
					     <?php 
					        $no++;
					        endforeach; 
					     ?>
					 </table> 
			  </div>		  
     
	</center>

<!-- Modal Tambah Penerima Notifikasi -->
<div class="modal fade" id="tambahsubject" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fa fa-users"></i> REGISTRASI PENERIMA</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="recipients.php" method="post">
         <div class="modal-body">
            <div class="form-group">
                <input class="form-control" name="id_chat" type="text" autocomplete="off" placeholder="Masukkan ID Telegram" required>       
            </div>
            <div class="form-group">
                <input class="form-control" name="nama" type="text" autocomplete="off" placeholder="Nama Penerima" required>       
            </div>  
         </div>
      <div class="modal-footer">
        <button type="submit" name="kirim" class="btn btn-success"><i class="fa fa-save"></i> Kirim</button>
        <button type="button" class=" btn btn-danger" data-dismiss="modal"> <i class="fa fa-undo"></i> Batal</button>
      </div>
     </form>
    </div>
  </div>
</div>
 	</center>
 </body>
 </html>