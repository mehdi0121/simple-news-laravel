<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    protected function login(Request $request)
    {
        $this->validateLogin($request);
        # code...
        if (Auth::attemptWhen([
            "email"=>$request->email,
            "password"=>$request->password
        ],function ($user){
            return $user->is_ban==false;
        },$request->remember))
        {
            # code...
            return redirect(route('index'));
        }



        return back()->withErrors([
            "password"=>"Email or password is incorrect!"
        ]);


    }
    protected function validateLogin(Request $request)
    {
        $request->validate([
            "email"=>"email|required|string",
            "password"=>"string|required"
        ]);

    }


}
