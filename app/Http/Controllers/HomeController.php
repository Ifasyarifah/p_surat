<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\suratmasuk;
use App\Models\suratkeluar;
use App\Models\disposisi;
use App\Models\user;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $suratmasuk = suratmasuk::count();
        $suratkeluar = suratkeluar::count();
        $disposisi = disposisi::count();
        $user = user::count();

        return view('dashboard', compact('suratmasuk', 'suratkeluar', 'disposisi', 'user'));
    }
}
