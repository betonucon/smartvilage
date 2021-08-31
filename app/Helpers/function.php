<?php
   function api_get_berita(){
      error_reporting(0);
      $json = file_get_contents('https://newsapi.org/v2/top-headlines?country=id&apiKey=62452a14ade1448782db6cdd38fbc81b');
      $content=utf8_encode($json);

      $item = json_decode($content,true);
      $unit=$item;
      
      return $unit;
      

   }
   function get_berita(){
      $data=App\Berita::orderBy('publishedAt','Desc')->get();

      return $data;
      

   }

   function parsing_validator($url){
      $content=utf8_encode($url);
      $data = json_decode($content,true);

      return $data;
   }

   function get_kecamatan(){
      $data=App\Kecamatan::where('kode_kota','3672')->orderBy('name','Asc')->get();

      return $data;
   }
   function uang($id){
      $data=number_format($id,0);
      return $data;
   }
   function cek_kondisi($baru,$lama){
      if($baru>$lama){
         $data='<i class="fa fa-toggle-up"></i> Harga Naik '.uang($baru-$lama);
      }
      if($baru==$lama){
         $data='<i class="fa fa-unsorted"></i> Harga Stabil ';
      }
      if($lama>$baru){
         $data='<i class="fa fa-toggle-down"></i> Harga Turun '.uang($lama-$baru);
      }
      return $data;
   }
   function get_cctv(){
      $data=App\Cctv::orderBy('id','Asc')->get();

      return $data;
   }
   function get_sembako(){
      $data=App\Sembako::orderBy('id','Asc')->get();

      return $data;
   }
   function get_nomorpenting(){
      $data=App\Nomorpenting::orderBy('id','Asc')->get();

      return $data;
   }

   function get_desa($kode){
      $data=App\Desa::where('kode_kecamatan',$kode)->orderBy('name','Asc')->get();

      return $data;
   }
   function get_rw(){
      $data='';
      $huruf = "000";
      
      for($x=1;$x<301;$x++){
         $no = sprintf("%03s", $x);
         $data.='<option value="'.$no.'">RW '.$no.'</option>';
      }

      return $data;
   }
   function get_rt(){
      $data='';
      
      for($x=1;$x<301;$x++){
         $no = sprintf("%03s", $x);
         $data.='<option value="'.$no.'">RT '.$no.'</option>';
      }

      return $data;
   }



?>