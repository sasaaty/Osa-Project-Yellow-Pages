<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

     /**
      * Where to redirect users after login.
      *
      * @var string
      */
     protected $redirectTo = '/home';

     /**
      * Create a new controller instance.
      *
      * @return void
      */
     public function __construct()
     {
         $this->middleware('guest')->except('logout');
     }

    public function redirectToGoogle()
    {
      // Sends the user to Google
        return Socialite::driver('google')->redirect();
    }

    public function userLogout()
    {
      Auth::guard('web') -> logout();
      return redirect('/');
    }

    public function adminLogout()
    {
      Auth::guard('admin') -> logout();
      return redirect('/');
    }
    /*
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        dd($user);
        return redirect('');
    }
    */

/*
    public function handleGoogleCallback()
    {
      try{
        $user = Socialite::driver('google') -> user();
      } catch (Exception $e){
        return redirect ('auth/google');
      }

      $authUser = $this -> createUser($user);

      Auth::login($authUser, true);
      return redirect() -> route('home');
    }

    public function createUser($user){
      $authUser = User::where('google_id',$user -> id) -> first();
      //dd($authUser)
      if($authUser){
        return $authUser;
      }
      return User::create([
        'name' => $user -> name;
        'google_id' => $user -> id;
        'email' => $user -> email;
        'avatar' => $user -> avatar;
      ])
    }
    */

    public function handleGoogleCallback()
    {
      $userSocial = Socialite::driver('google')->user();

      //return #userSocial name
      $findUser = User::where('email',$userSocial -> email) -> first();
        if($findUser){
          Auth::login($findUser);
          return 'done with old';
        }else{
            $user = new User;
            $user -> name = $UserSocial -> name;
            $user -> email = $UserSocial -> email;
            $user -> password
            $user -> save();
            Auth::login($user);
            return 'done with new';
        }

    }
}
