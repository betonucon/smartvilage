<?php

namespace App\Http\Controllers;
use App\User;
use App\Warga;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
class RegistrasiController extends Controller
{
    public function register(Request $request)  {  
        error_reporting(0);
        
        $rules = [
            'piin'=> 'required|numeric|min:6',
            'konfirmasi_pin'=> 'required|numeric',
            'kecamatan_id'=> 'required|numeric',
            'kelurahan_id'=> 'required|numeric',
            'rw'=> 'required|numeric',
            'rt'=> 'required|numeric',
        ];

        $messages = [
            'piin.required'=> 'PIN tidak boleh kosong', 
            'piin.numeric'=> 'Gunakan karakter angka', 
            'piin.min'=> 'Isi PIN Minimal 6 Karakter',  
            'konfirmasi_pin.required'=> 'PIN tidak boleh kosong', 
            'konfirmasi_pin.numeric'=> 'Gunakan karakter angka', 
            'kecamatan_id.required'=> 'Pilih Kecamatan',
            'kelurahan_id.required'=> 'Pilih Kelurahan',
            'rw.required'=> 'Pilih RW',
            'rt.required'=> 'Pilih RT',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        $val=$validator->Errors();
        // $content=utf8_encode($val);

        // $item = json_decode($content,true);
        $notifpin='';
        $notifkonfirmasi_pin='';
        $notifkecamatan_id='';
        $notifkelurahan_id='';
        $notifrw='';
        $notifrt='';
        foreach(parsing_validator($val)['piin'] as $value){
            $notifpin.=$value;
        }
        foreach(parsing_validator($val)['konfirmasi_pin'] as $value){
            $notifkonfirmasi_pin.=$value;
        }
        foreach(parsing_validator($val)['kecamatan_id'] as $value){
            $notifkecamatan_id.=$value;
        }
        foreach(parsing_validator($val)['kelurahan_id'] as $value){
            $notifkelurahan_id.=$value;
        }
        foreach(parsing_validator($val)['rw'] as $value){
            $notifrw.=$value;
        }
        foreach(parsing_validator($val)['rt'] as $value){
            $notifrt.=$value;
        }
        if ($validator->fails()) {
            echo $notifpin.'@';
            echo $notifkonfirmasi_pin.'@';
            echo $notifkecamatan_id.'@';
            echo $notifkelurahan_id.'@';
            echo $notifrw.'@';
            echo $notifrt.'@';
        }else{
            $warga                  = Warga::where('nik',Auth::user()['username'])->first();
            $warga->kode_kecamatan  = $request->kecamatan_id;
            $warga->kode_kelurahan  = $request->kelurahan_id;
            $warga->rw              = $request->rw;
            $warga->rt              = $request->rt;
            $warga->save(); 
             

            if($warga){
                $user                  = User::where('username',Auth::user()['username'])->first();
                $user->pin              = Hash::make($request->piin);
                $user->save(); 

                echo'ok';
            }
        }
        
    }

    public function login(Request $request)  {  
        
        // $rules = [
        //     'piin'    => 'required',
        //     'konfirmasi_pin'    => 'required',
 
        // ];
 
        // $messages = [
        //     'piin.required'     => 'Fullname boxes cannot be empty..', 
        //     'konfirmasi_pin.required'     => 'Password boxes cannot be empty..',
        // ];

        // $validator = Validator::make($request->all(), $rules, $messages);

        // if ($validator->fails()) {
        //     return redirect('obyek/form')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }
        $this->validate($request,[
            'piin'=> 'required',
            'konfirmasi_pin'=> 'required',
        ]);
        
    }
}
