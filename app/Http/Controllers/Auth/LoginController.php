<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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


    protected function attemptLogin(Request $request)
    {
        // Try authenticating with 'web' guard (user)
        if (Auth::guard('web')->attempt($this->credentials($request))) {
            // Store the guard used for authentication
            $request->session()->put('auth_guard', 'web');
            return true;
        }

        // If 'web' guard authentication fails, try authenticating with 'admin' guard
        if (Auth::guard('admin')->attempt($this->credentials($request))) {
            // Store the guard used for authentication
            $request->session()->put('auth_guard', 'admin');
            return true;
        }

        // Return false if neither guard is successful
        return false;
    }

    protected function authenticated(Request $request, $user)
    {
        // Check the guard used during authentication
        $authGuard = $request->session()->get('auth_guard');

        if ($authGuard === 'web') {
            // Redirect to website route for 'web' guard
            return redirect()->route('website');
        } elseif ($authGuard === 'admin') {
            // Redirect to dashboard route for 'admin' guard
            return redirect()->route('dashboard');
        }

        // Default redirection if the guard is not found (shouldn't happen)
        return redirect()->route('website');
    }

}
