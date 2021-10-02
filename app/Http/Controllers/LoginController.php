<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Contracts\Session\Session;
use App\Http\Requests\loginRequest;
use App\Models\Admin;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/admin/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

   /* public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }*/
    public function __construct()
    {
        $this->middleware('admin', ['except' => 'logout']);
    }

    public function getLogin()
    {
        return view('auth.admin.login');
    }

    public function postLogin(Request $req)
    {
        $this->validate($req, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $admin=Admin::where(['email'=> $req ->email])-> first();
        if( !$admin ||Hash::check($req->password,$admin->password)){
            return 'User Name or Password incorrect';
        }else{
            $req -> Session() -> put('admin', $admin);
            return response()->view('admin.dashboard');
        }
       // return $next($req);

    }




}
