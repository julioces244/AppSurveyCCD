<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Evaluator;

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


    public function authenticate(Request $request)
    {

      try{

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $user = Auth::user();

            return $user;


            //return redirect()->intended('dashboard');

            return response()->json(['type' => 'success', 'message' => 'Ingresando al sistema'], 200);
        }else{
            return response()->json(['error' => 'Usuario y/o clave inválido'], 401);
        }

      }catch(\Exception $e){
          return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);
      }

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
