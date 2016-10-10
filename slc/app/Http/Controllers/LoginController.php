<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\yazi;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Authenticatable;

class LoginController  extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    
   public function authenticate()
    {
        $email=Input::get('email');
        $password=Input::get('sifre');

          
     if (Auth::attempt(['email' => $email,'password' => $password]))
        {
            return redirect()->intended('admin');
        }
     else
     {
        return redirect()->route('giris')->withErrors(['Hata Email veya Şifre']);
     }



    }
    public function giris()
    {
        return view('giris');
    }

    public function admin()
    {
      
      $yazi=new yazi();
      $yazilar=$yazi->all();


      return view('admin')->with('yazilar',$yazilar);
    }


    public function kullaniciEkle(){
        $user = new User();
        $user->name = Input::get('kullaniciAdi');
        $user->email    =Input::get('email');
        $user->password = Hash::make(Input::get('sifre'));
        $kaydet = $user->save();
        if($kaydet){
            return 'Kaydedildi';
        }else{
            return 'Kaydedilemedi';
        }
    }
    public function cikis()
    {
      Auth::logout(); // log the user out of our application
      //return redirect()->intended('giris');
    }
    public function yazi_al()
    {
        //$yazi=new yazi();
      
        //$yazilar =$yazi->where('yazi_id','>',5)->first();

      //return view('yazi')->with('yazilar',$yazilar);
        return view('yazi');
    }
    function yazi_gonder()
    {

        if ($_GET)
        {
           $gelen_yazi=$_GET['yazi'];
           
           $user=Auth::user();
           $id=$user->id;
           $name=$user->name;

           $yazi=new yazi();
           $yazi->adi=$name;
           $yazi->id=$id;
           $yazi->yazi=$gelen_yazi;
           $save=$yazi->save();
           

        }
        else{

            echo "GET Gelmedi";
        }
    }


}
