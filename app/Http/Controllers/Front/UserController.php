<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BLL\Front\UserBLL;
use Socialite;

class UserController extends Controller
{
    //
    public function RedirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function HandleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        return redirect('/');
        // $user->token;
    }

    public static function CheckExistUserPhoneNumber()
    {   
        $phone_number = $_POST['phone_number'] ?? NULL;
        if(UserBLL::CheckExistUserPhoneNumber($phone_number))
            return "false";
        return "true";
    }

    public static function AddUserByPhoneNumber()
    {   
        $phone_number = $_POST['phonenumber_register'] ?? NULL;
        $password = $_POST['password_register'] ?? NULL;

        return UserBLL::AddUserByPhoneNumber();
    } 
}
