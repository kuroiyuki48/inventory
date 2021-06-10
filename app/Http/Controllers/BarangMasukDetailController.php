<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangMasukDetailController extends Controller
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
        return view('barang_masuk_detail.index', $data);
    }
}
