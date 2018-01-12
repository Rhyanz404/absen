<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class adminAuthKontrol extends Controller
{

	public function __construct()
    {
        $this->middleware('guest:admin');
        $this->middleware('guest:web');
    }


	public function index(){

        return view('auth.admin-login');
    
    }

    public function login(Request $request){
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:6'
    	]);

    	// Auth::guard('admin')->attempt([
    		// 'email' => $request->email,
    		// 'password' => $request->password

    	// ]);

    	if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
    		return redirect()->intended(route('admin.base') );
    	}

    	return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
