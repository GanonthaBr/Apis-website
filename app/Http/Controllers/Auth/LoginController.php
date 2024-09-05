<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Throwable;

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
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        try {
            $this->guard()->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return $this->loggedOut($request) ?: redirect()->route('login');
        } catch (Throwable) {
            return redirect()->route('login');
        }
    }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    // override the authenticated method
    protected function authenticated(Request $request, $user)
    {
        try {
            if ($user->isAdmin()) { //check if user is admin
                return redirect()->route('admin');
            }
            return redirect()->back();
        } catch (Throwable) {
            return redirect()->back();
        }
    }
}
