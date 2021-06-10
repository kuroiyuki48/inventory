<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangKeluarDetailController extends Controller
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
    public function index($id = null)
    {
        $data['id'] = $id;
        return view('barang_keluar_detail.index', $data);
    }
}
