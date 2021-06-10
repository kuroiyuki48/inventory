<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\BarangMasukDetail;
use App\Models\BarangKeluarDetail;
use App\Models\Pelanggan;
use App\Models\Supplier;

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
        $data['barang_masuk_detail'] = BarangMasukDetail::orderBy('id', 'DESC')->limit(10)->get();
        $data['barang_keluar_detail'] = BarangKeluarDetail::orderBy('id', 'DESC')->limit(10)->get();
        $data['barang'] = Barang::orderBy('id', 'DESC')->limit(10)->get();
        return view('home', $data);
    }
}
