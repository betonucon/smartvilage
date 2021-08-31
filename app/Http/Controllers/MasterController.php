<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Desa;
class MasterController extends Controller
{
    public function cari_desa(request $request){
        echo'<option value="">Pilih Kelurahan</option>';
        foreach(get_desa($request->kode) as $get_desa){
            echo'<option value="'.$get_desa['kode'].'">'.$get_desa['name'].'</option>';
        }
    }
}
