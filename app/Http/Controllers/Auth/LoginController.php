<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
    protected $redirectTo = 'client/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if(auth()->user()->status==0){
                auth()->logout();
                return view('auth.login')->with('message', 'Your account has been suspended. please contact support.');
            }
            if (auth()->user()->role == 1){
                return redirect()->route('admin.home');
            }elseif (auth()->user()->role == 2){
                return redirect()->route('client.home');
            }elseif (auth()->user()->role == 3) {
                return redirect()->route('employer.home');
            }elseif (auth()->user()->role == 4) {
                return redirect()->route('locationmanager.home');
            }else {
                return redirect()->route('warehouse.home');
            }

        }
        else{
            return view('auth.login')
                    ->with('message', 'Incorrect email or password provided!');
        }
    }
}
