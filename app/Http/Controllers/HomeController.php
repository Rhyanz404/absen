<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absen;
use Auth;
use App\settings;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function waktuSekarang($location){
        return date_default_timezone_set($location);
    }
    public function index(){
        $this->waktuSekarang('Asia/Jakarta');
        $user_id = Auth::user()->id;
        $data_absen = Absen::where('user_id', $user_id)->orderBy('date', 'desc')->paginate(20);
        $date = date("Y-m-d");

        $cek_absen = Absen::where(['user_id' => $user_id, 'date' => $date])->get()->first();
        if (is_null($cek_absen)) {
            $info = array(
                'status' => 'Anda Belum Absen Masuk',
                'btnIn' => '',
                'btnOut' => 'disabled',
                'btnInstts' => 'visible',
                'btnOutstts' => 'invisible',
                'btnlembur' => 'invisible'
             );
        }elseif ($cek_absen->time_out == NULL) {
            $info = array(
                'status' => 'Anda Belum Absen Keluar',
                'btnIn' => 'disabled',
                'btnOut' => '',
                'btnInstts' => 'invisible',
                'btnOutstts' => 'visible',
                'btnlembur' => 'invisible'
             );
        }else{
            $info = array(
                'status' => 'Absensi Hari Ini Selesai', 
                'btnIn' => 'disabled',
                'btnOut' => 'disabled',
                'btnInstts' => 'invisible',
                'btnOutstts' => 'invisible',
                'btnlembur' => 'visible'

            );
        }

        return view('home', compact('data_absen', 'info'));
    }

    public function absen(Request $request){
        $this->waktuSekarang('Asia/Jakarta');
        $user_id = Auth::user()->id;
        $date = date("Y-m-d");
        $time = date("H:i:s");
        $note = $request->note;
        $absen = new Absen;

        if (isset($request->btnIn)) {

            $cek_double = $absen->where(['date' => $date, 'user_id' => $user_id])->count();
            if ($cek_double > 0) {
                return redirect()->back();
            }
            
            $absen->create([
                'user_id' => $user_id,
                'date' => $date,
                'time_in' => $time,
                'note' => $note
            ]);
            return redirect()->back();

        }elseif (isset($request->btnOut)) {
            $absen->where(['date' => $date, 'user_id' => $user_id])->update([
                'time_out' => $time,
                'note' => $note
            ]);
            return redirect()->back();
        }elseif (isset($request->btnlembur)) {
            $absen->where(['date' => $date, 'user_id' => $user_id])->update([
                'lembur' => $time,
                'note' => $note
            ]);
            return redirect()->back();
        }

        // $request->btnIn
        // return $request->all();
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        // session('admin')->invalidate();
        return redirect('/login');

        // $a = $request->session();
        // dd($a);
    }
}
