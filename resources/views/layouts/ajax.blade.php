<script type="text/javascript">   
    $(function () {
        $("#piin").keypress(function (event) {

            if ($(this).val().length == 6) { /* obv 5 is too small for an address field, just want to use as an example though */
                return false;
            } else {
                return true;
            }

        });
        $("#konfirpiin").keypress(function (event) {

            if ($(this).val().length == 6) { /* obv 5 is too small for an address field, just want to use as an example though */
                return false;
            } else {
                return true;
            }

        });
    });
    

    function loginnya(){
        $('#modallogin').modal('show');
    }

    function click_registrasi(){
    var form=document.getElementById('my_register');
    var protec=$('#tokennya').val();
    $.ajax({
        type: 'POST',
        url: "{{ url('updatewarga') }}?_token="+protec,
        data: new FormData(form),
        contentType: false,
        cache: false,
        processData:false,
        beforeSend: function() {
            document.getElementById("loadnya").style.width = "100%";
        },
        success: function(msg){
            var data=msg.split('@'); 
            if(data[0]=='ok'){
                location.reload();
            }else{
                document.getElementById("loadnya").style.width = "0px";
                $('#notifpin').html(data[0]);
                $('#notifkonfirmasi_pin').html(data[1]);
                $('#notifkecamatan_id').html(data[2]);
                $('#notifkelurahan_id').html(data[3]);
                $('#notifrw').html(data[4]);
                $('#notifrt').html(data[5]);
            }
        }
    });

    }

    function cari_desa(kode){
        $.ajax({
            type: 'GET',
            url: "{{ url('cari_desa') }}",
            data: "kode="+kode,
            success: function(msg){
                $('#mapingdesa').html(msg);
            }
        });
    }

    
    }
</script>