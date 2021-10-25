$(document).ready(function(){

  
		//real time halaman dashboard.php
				setInterval(function() {
            		$('.load-data').load('load-data.php');
          							}, 100);

		//sweet alert hapus data 
          $('.alert_hapus').on('click',function(e){

                e.preventDefault();
                var getLink = $(this).attr('href');
                Swal.fire({
                        icon : 'warning',
                        title: 'Alert',
                        text: 'Are you sure?',
                        confirmButtonColor: '#d9534f',
                        showCancelButton: true,  
                    }).then((result) => {
                       if(result.value == true){
                        document.location.href = getLink;
                    }

            });
                
            });

		
  });