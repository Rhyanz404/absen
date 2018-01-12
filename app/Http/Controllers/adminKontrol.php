<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Auth;
use App\Absen;
use App\User;

class adminKontrol extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\R￼Server: localhost:3306 »￼Database: arian »￼Table:esponse
     */
   	public function index(){
        // $this->waktuSekarang('Asia/Jakarta');
        $user_id = Auth::user()->id;
        $users = User::where(['id' => $user_id])->get();
        // $data_absen = Absen::all();
        $date = date("Y-m-d");
        $absen_harini = Absen::where(['date' => $date])->get();
        $hari = date('D');



        $kurang1hari = date("d")-1;
        $kemarin = date("Y-m-$kurang1hari");
        $absen_kemarin = Absen::where(['date' => $kemarin])->get();
        // $tujuh = mktime(0,0,0,date("n"),date("j")+7,date("Y"));
        
        return view('admin', compact('absen_harini', 'absen_kemarin', 'hari', 'users'));
    
    }

    public function regkaryawan(){

        return view('admin.regkaryawan');
    
    }

    public function postnews(){
        return view('admin.postnews');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        // $request->session()->invalidate();
        return redirect('/admin');
    }

}
