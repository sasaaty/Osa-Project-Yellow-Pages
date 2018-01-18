<?php
namespace App\Http\Controllers\Auth;


use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Socialite;
use Auth;
use Exception;


class AuthController extends Controller
{
  
    protected $redirectTo = '/';


    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }


    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function redirectToGoogle()
    {
      // Sends the user to Google
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        dd($user);
          return redirect('');
    }

    /*
    http://itsolutionstuff.com/post/laravel-5-google-oauth-authentication-using-socialite-packageexample.html
    */
}
