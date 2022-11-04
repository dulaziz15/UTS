<script>
        $(document).ready(function () {
    $('#table').DataTable({
        "bPaginate": false,
        "bFilter": false,
        "bInfo": false
    });
});
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#jumlah, #harga, #jumlah1, #harga1").keyup(function() {
                var harga  = $("#harga").val();
                var jumlah = $("#jumlah").val();
                var harga1  = $("#harga1").val();
                var jumlah1 = $("#jumlah1").val();
                var total = parseInt(harga) * parseInt(jumlah);
                $("#total").val(total);
                var total1 = parseInt(harga1) * parseInt(jumlah1);
                $("#total1").val(total1);
                var totalsemua = parseInt(total) + parseInt(total1);
                $("#totalsemua").val(totalsemua);
                var totalsemua = parseInt(totalsemua);

                function diskon(){
                // branching discount
                    if(totalsemua <= 439000 && totalsemua >= 252000){
                        return discount = 11;
                    }else if(totalsemua <= 640000 && totalsemua > 439000){
                        return discount = 21;
                    }else if(totalsemua >= 640000){
                        return discount = 35;
                    }else{
                        return discount = 0;
                    }
                }
                var diskon = $("#diskon").val(diskon());

                var diskon1 = parseInt($("#diskon").val());
                var jumlah_diskon = (diskon1 * totalsemua)/100;
                var jumlah_bayar = (totalsemua - jumlah_diskon);
                var total_bayar = $("#totalbayar").val(jumlah_bayar);
                var total_bayar1 = parseInt($("#totalbayar").val());

                var bayar = parseInt($("#bayar").val());
                var kembalian = parseInt(bayar - total_bayar1);

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
                                                    'Isi List Pembelanjaanmu !',
                                                    'error'
                                                    )
                            }else{
                                var bayar = parseInt(document.getElementById("bayar").value);
                                var total_bayar = parseInt(document.getElementById("totalbayar").value);
                                var kembalian = (bayar - total_bayar);

                                if(total_bayar > bayar){
                                    Swal.fire(
                                        'Pembayaran Gagal',
                                        'Uang anda kurang',
                                        'error'
                                        );
                                }else if(total_bayar == bayar){
                                    Swal.fire(
                                        'Pembayaran Berhasil',
                                        'Uang anda pas',
                                        'success'
                                        );
                                    window.location.reload();
                                }else if(total_bayar < bayar){
                                Swal.fire(
                                    'Pembayaran Berhasil',
                                    'kembalian anda sebesar Rp.' + kembalian,
                                    'success'
                                    );
                                }
                                
                            window.location.assign("/kasir");
                            }
                            form.classList.add('was-validated')
                        }, true)
                        })
                    })()



                    // $("#btntotal").click(function(){
                    //     var bayar = parseInt(document.getElementById("bayar").value);
                    //     var total_bayar = parseInt(document.getElementById("totalbayar").value);
                    //     var kembalian = (bayar - total_bayar);
                    //     var i = 0;

                    //     if(total_bayar == ""){
                    //         Swal.fire(
                    //             'Pembayaran Gagal',
                    //             'Masukan list pembelian anda',
                    //             'error'
                    //             );
                    //     }else if(total_bayar > bayar){
                    //         Swal.fire(
                    //             'Pembayaran Gagal',
                    //             'Uang anda kurang',
                    //             'error'
                    //             );
                    //     }else if(total_bayar == bayar){
                    //         Swal.fire(
                    //             'Pembayaran Berhasil',
                    //             'Uang anda pas',
                    //             'success'
                    //             );
                    //         window.location.reload();
                    //     }else if(total_bayar < bayar){
                    //         Swal.fire(
                    //             'Pembayaran Berhasil',
                    //             'kembalian anda sebesar Rp.' + kembalian,
                    //             'success'
                    //             );
                    //     }
                    // });

            });
            });
    </script>