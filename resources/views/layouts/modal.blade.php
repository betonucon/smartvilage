<div class="modal fade" id="modalpin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" id="registermodal">
    <div class="modal-content" style="background-color: #f7f7f7;border: solid 1px #bcc3b6;border-radius: 8px !important;">
      <div class="modal-header" style="text-align:center">
        
        <img src="{{url('icon/logo.jpg')}}" style="width:60%" alt="Metronic FrontEnd"><br>
        <h5 class="modal-title" id="exampleModalLabel"><u></u></h5>
      </div>
      <div class="modal-body">
            <div id="notif-register" class="notifnya"></div>
            <form method="GET" id="my_register" onkeypress="return event.keyCode != 13" enctype="multipart/form-data">
                
               
                <div class="form-group">
                    <label>Kecamatan </label>
                    <select name="kecamatan_id" placeholder="Ketik disini" onchange="cari_desa(this.value)" class="form-control">
                        <option value="">Pilih Kecamatan</option>
                        @foreach(get_kecamatan() as $get_kecamatan)
                            <option value="{{$get_kecamatan['kode']}}">{{$get_kecamatan['name']}}</option>
                        @endforeach
                      </select>
                    <span class="notifikasi-form" id="notifkecamatan_id"></span>
                </div>
                <div class="form-group">
                    <label>Kelurahan</label>
                    <select name="kelurahan_id" placeholder="Ketik disini" id="mapingdesa" class="form-control">
                        <option value="">Pilih Kelurahan</option>
                        
                    </select>
                    <span class="notifikasi-form" id="notifkelurahan_id"></span>
                </div>
                <div class="form-group">
                    <label>RW</label>
                    <select name="rw" placeholder="Ketik disini"  class="form-control">
                        <option value="">Pilih RW</option>
                        
                         {!!get_rw()!!}
                        
                      </select>
                    <span class="notifikasi-form" id="notifrw"></span>
                </div>
                <div class="form-group">
                    <label>RT</label>
                    <select name="rt" placeholder="Ketik disini"  class="form-control">
                        <option value="">Pilih RT</option>
                        
                         {!!get_rt()!!}
                        
                      </select>
                    <span class="notifikasi-form" id="notifrt"></span>
                </div>
                <div class="form-group">
                    <label>PIN</label>
                    <input type="number"  style="-webkit-text-security: disc;-moz-webkit-text-security: disc;-moz-text-security: disc;" name="piin" placeholder="Ketik disini" class="form-control">
                    <span class="notifikasi-form" id="notifpin"></span>
                </div>
                <div class="form-group">
                    <label>Konfirmasi PIN</label>
                    <input type="number" style="-webkit-text-security: disc;-moz-webkit-text-security: disc;-moz-text-security: disc;" name="konfirmasi_pin" placeholder="Ketik disini" class="form-control">
                    <span class="notifikasi-form" id="notifkonfirmasi_pin"></span>
                </div>
            </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button> -->
        <button type="button" class="btn btn-primary" onclick="click_registrasi()">Registrasi</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" id="registermodal">
    <div class="modal-content" style="background-color: #f7f7f7;border: solid 1px #bcc3b6;border-radius: 8px !important;">
      <div class="modal-header" style="text-align:center">
        
        <img src="{{url('icon/logo.jpg')}}" style="width:60%" alt="Metronic FrontEnd"><br>
        <h5 class="modal-title" id="exampleModalLabel"><u>REGISTRASI</u></h5>
      </div>
      <div class="modal-body">
            <div id="notlogin" class="notifnya"></div>
            <form method="GET" id="my_login" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>NIK (Nomor Induk Kependudukan)</label>
                    <input type="text" name="nik" id="niklogin" placeholder="Ketik disini" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Ketik disini" class="form-control">
                </div>
                
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" onclick="click_login()">Login</button>
      </div>
    </div>
  </div>
</div>