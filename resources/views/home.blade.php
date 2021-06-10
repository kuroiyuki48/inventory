@extends('layouts.app')

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-home"></i>
        </span> Dashboard 
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
            </li>
        </ul>
    </nav>
</div>
<div class="row">
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
                <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Barang<i class="mdi mdi-archive mdi-24px float-right"></i>
                </h4>
                <h2 class="mb-5">{{ App\Models\Barang::count() ?? '0' }} Item</h2>
                <a href="/barang" class="text-white" style="text-decoration: none"><h6 class="card-text">Lihat</h6></a>
            </div>
        </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
                <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Supplier <i class="mdi mdi-account mdi-24px float-right"></i>
                </h4>
                <h2 class="mb-5">{{ App\Models\Supplier::count() ?? '0' }} Orang</h2>
                <a href="/supplier" class="text-white" style="text-decoration: none"><h6 class="card-text">Lihat</h6></a>
            </div>
        </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
            <div class="card-body">
                <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Pelanggan <i class="mdi mdi-account mdi-24px float-right"></i>
                </h4>
                <h2 class="mb-5">{{ App\Models\Pelanggan::count() ?? '0' }} Orang</h2>
                <a href="/pelanggan" class="text-white" style="text-decoration: none"><h6 class="card-text">Lihat</h6></a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Barang</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> Nama Barang </th>
                                <th> Stok </th>
                                <th> Harga </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barang as $item)
                                <tr>
                                    <td>{{ $item->nama_barang }}</td>
                                    <td>{{ $item->stok }}</td>
                                    <td>Rp {{ number_format($item->harga,2,',','.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Barang Masuk</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> Nama Barang </th>
                                <th> Jumlah </th>
                                <th> Total </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barang_masuk_detail as $item)
                                <tr>
                                    <td>{{ $item->barang->nama_barang }}</td>
                                    <td>{{ $item->jumlah }}</td>
                                    <td>Rp {{ number_format($item->total,2,',','.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Barang Keluar</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> Nama Barang </th>
                                <th> Jumlah </th>
                                <th> Total </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barang_keluar_detail as $item)
                                <tr>
                                    <td>{{ $item->barang->nama_barang }}</td>
                                    <td>{{ $item->jumlah }}</td>
                                    <td>Rp {{ number_format($item->total,2,',','.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

