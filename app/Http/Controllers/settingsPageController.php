<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use App\Models\metadata;
use Illuminate\Http\Request;

class settingsPageController extends Controller
{
    function index(){


        $datahalaman = halaman::orderBy('judul',"asc")->get();
        return view("dashboard.settings.index")->with('datahalaman',$datahalaman);
    }
    function update(Request $request){
        metadata::updateOrCreate(['meta_key'=>'_pageabout'],['meta_value'=>$request->_pageabout]);
        metadata::updateOrCreate(['meta_key'=>'_pageaward'],['meta_value'=>$request->_pageaward]);
        metadata::updateOrCreate(['meta_key'=>'_pageinterest'],['meta_value'=>$request->_pageinterest]);

        return redirect()->route('settings.index')->with('success','berhasil update settings page');
    }
}
