<?php

require "template.php"; 


    if(isset($_GET["id"])){    
        if( hapusPenerima($_GET ["id"]) > 0 ) {
              echo "
                 <script>
                       Swal.fire({ 
                          title: 'BERHASIL',
                          text: 'Data Penerima Telah dihapus',
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
                      text: 'Data gagal dihapus', 
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

  

$koneksi->close();

echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>';



 ?>