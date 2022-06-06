<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Validasi Pesanan</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
@include('admin-side.template.header')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Selamat Datang, {{Auth::user()->nama_lengkap}}</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Kelola Pemesanan Makanan Minuman</li>
            </ol>
            <div class="col-3">

            </div>
        </br>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Validasi Pesanan Makanan Minuman
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th style="text-align: center">Nama Pemesan</th>
                                <th style="text-align: center">Kode Payment</th>
                                <th style="text-align: center">Kode transaksi</th>
                                <th style="text-align: center">Jumlah item</th>
                                <th style="text-align: center">Total</th>
                                <th style="text-align: center">Uniqe Code</th>
                                <th style="text-align: center">No HP</th>
                                <th style="text-align: center">Status</th>
                                <th style="text-align: center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pemesanans as $pemesanan )
                            <tr>
                                <td style="text-align: center">{{$pemesanan->name}}</td>
                                <td style="text-align: center">{{$pemesanan->kode_payment}}</td>
                                <td style="text-align: center">{{$pemesanan->kode_trx}}</td>
                                <td style="text-align: center">{{$pemesanan->total_item}}</td>
                                <td style="text-align: center">{{$pemesanan->total_harga}}</td>
                                <td style="text-align: center">{{$pemesanan->kode_unik}}</td>
                                <td style="text-align: center">{{$pemesanan->phone}}</td>
                                <td style="text-align: center">{{$pemesanan->status}}</td>
                                <td style="text-align: center">
                                    <button class="btn btn-outline-warning"onclick="window.location.href='/edit-transaksi/{{ $pemesanan->id }}'"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                <button class="btn btn-outline-danger" onclick="window.location.href='/validasipesanan/delete/{{ $pemesanan->id }}'"
                                data-toggle="modal"
                                data-target="#myModal{{$pemesanan->id}}"><i class="fa fa-trash" aria-hidden="true"></i>
                                   </button>
                            </td>
                            </tr>

                            </div>
                        </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@include('admin-side.template.footer')