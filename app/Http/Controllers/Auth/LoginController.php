<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function github(){
        //send the user's request to github
        
        return Socialite::driver('github')->redirect();
    }
    
    public function githubRedirect(){
        //get oauth request back from github to authenticate user
        
        $user = Socialite::driver('github')->user();
        dd($user);
        
        
    }
    
    
    
    
    
    
    
    
}

