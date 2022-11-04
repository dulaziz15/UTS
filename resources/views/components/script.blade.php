    <script src={{ url ('bahan/js/bootstrap.min.js') }}></script>
    <script src={{ url ('bahan/js/jquery.js') }}></script>
    <!-- <script src={{ url ("bahan/js/bootstrap.bundle.min.js") }}></script> -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>  
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
    <script src="http://www.decorplanit.com/plugin/autoNumeric-1.9.41.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> -->
    <script>
        $('.carousel').carousel({
             interval: 10000
        });
    </script>
    <script type="text/javascript">
		$(window).on("scroll", function(){
			if($(window).scrollTop() > 50){
				$(".navbar-inverse").addClass("scroll");
                $(".navbar-inverse").addClass("shadow");
			} else {
				$(".navbar-inverse").removeClass("scroll");
                $(".navbar-inverse").removeClass("shadow");
			}
		});
	</script>
    <script>
        document.querySelector('.first-button').addEventListener('click', function () {

        document.querySelector('.animated-icon1').classList.toggle('open');
        });
        document.querySelector('.second-button').addEventListener('click', function () {

        document.querySelector('.animated-icon2').classList.toggle('open');
        });
        document.querySelector('.third-button').addEventListener('click', function () {

        document.querySelector('.animated-icon3').classList.toggle('open');
        });
    </script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')
  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
          Swal.fire(
                                'Gagal',
                                'masukan semua data',
                                'error'
                                )
        }else{
            var tanggal = document.getElementById("tanggal").value
            var nama = document.getElementById("nama").value
            var phone = document.getElementById("phone").value
            var pesan = document.getElementById("pesan").value
            var email = document.getElementById("email").value
            Swal.fire(
                                'Berhasil',
                                'data berhasil di kirim berikut data anda tanggal = ' + tanggal + ' Nama = ' + nama + ' Phone = ' + phone + ' pesan = ' + pesan + ' Email = ' + email,
                                'success'
                                );
            
        window.location.assign("/");
        }
        form.classList.add('was-validated')
      }, true)
    })
})()
    </script>
    
    <script>
         function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(-7.944112, 112.614651),
    zoom:9,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // membuat Marker
  var marker=new google.maps.Marker({
      position: new google.maps.LatLng(-7.944112, 112.614651),
      map: peta
  });

}
google.maps.event.addDomListener(window, 'load', initialize);

    </script>