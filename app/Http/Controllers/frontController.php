<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index(){
        $about_id= get_meta_value('_pageabout');
        $about_data = halaman :: where('id', $about_id)->first();

        $award_id= get_meta_value('_pageaward');
        $award_data = halaman :: where('id', $award_id)->first();

        $interest_id= get_meta_value('_pageinterest');
        $interest_data = halaman :: where('id', $interest_id)->first();
        return view('front.index')->with([
           'about'=> $about_data,
           'award'=>$award_data,
            'interest'=> $interest_data,
        ]);
    }
}
