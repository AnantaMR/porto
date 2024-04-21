<?php

namespace App\Http\Controllers;

use App\Models\metadata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class profileController extends Controller
{
    function index(){
        return view('dashboard.profile.index');
    }
    function update(Request $request)
    {
        $request -> validate([
            '_foto' => 'mimes:jpeg,png,jpg,gif',
            '_email' => 'required | email' 
        ],[
                '_foto.mimes' => 'Format foto harus jpeg, jpg,png, dan gif',
                '_email.required' => 'Email wajib diisi',
                '_email.email' => 'Email tidak valid',
        ]);

        if($request->hasFile('_foto')){
            $foto_file = $request->file('_foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_baru = date('ymdhis').".$foto_ekstensi";
            $foto_file->move(public_path('img'),$foto_baru);
            // update foto

            $foto_lama = get_meta_value('_foto');
            FILE::delete(public_path('img')."/".$foto_lama);
            metadata::updateOrCreate(['meta_key'=>'_foto'],['meta_value'=>$foto_baru]);
        }

        metadata::updateOrCreate(['meta_key'=>'_email'],['meta_value'=>$request->_email]);
        metadata::updateOrCreate(['meta_key'=>'_kota'],['meta_value'=>$request->_kota]);
        metadata::updateOrCreate(['meta_key'=>'_provinsi'],['meta_value'=>$request->_provinsi]);
        metadata::updateOrCreate(['meta_key'=>'_nohp'],['meta_value'=>$request->_nohp]);

        metadata::updateOrCreate(['meta_key'=>'_insta'],['meta_value'=>$request->_insta]);
        metadata::updateOrCreate(['meta_key'=>'_ytube'],['meta_value'=>$request->_ytube]);
        metadata::updateOrCreate(['meta_key'=>'_linkedin'],['meta_value'=>$request->_linkedin]);
        metadata::updateOrCreate(['meta_key'=>'_github'],['meta_value'=>$request->_github]);
        metadata::updateOrCreate(['meta_key'=>'_tiktok'],['meta_value'=>$request->_tiktok]);

        return redirect()->route('profile.index')-> with('success','Berhasil update profile');
    }
}
