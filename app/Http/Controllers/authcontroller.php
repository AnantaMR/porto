<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use function Laravel\Prompts\error;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\File;
use Laravel\Socialite\Facades\Socialite;

class authcontroller extends Controller
{   
    function index(){
        return view('auth.index');
    }
    function redirect(){
        return Socialite::driver('google') ->redirect();
    }
    function callback(){

       

        $user = Socialite::driver('google') ->user();
        $id = $user->id;
        $email = $user-> email;
        $name = $user-> name;
        $avatar = $user->avatar;


        $check = User::where('email', $email)->count();
        if($check > 0){
            $avatar_file = $id.".jpg";
            $fileContent = file_get_contents($avatar);
            File::put(public_path('admin/images/faces/111745145236254286803.jpg'), $fileContent);
            $user = User::updateOrCreate(
                ['email'=> $email],
                [   'name'=>$name,
                    'google_id' => $id,
                    'avatar' => $avatar_file,

                ]);
                Auth::login($user);
                return redirect()-> to('dashboard'); 
        } else{
            return redirect()-> to ('auth') -> with('error', 'IMPOSTOR');
        }
        
    }
    public function logout(){
        Auth::logout();
        return redirect()->to('auth');
    }
}
