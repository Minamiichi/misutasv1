@extends('layouts.siswa')

@section('content')
<section class="au-breadcrumb2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="au-breadcrumb-content">
                    <div class="au-breadcrumb-left">
                        <span class="au-breadcrumb-span">You are here:</span>
                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                            <li class="list-inline-item active">
                                <a href="#">Home</a>
                            </li>
                            <li class="list-inline-item seprate">
                                <span>/</span>
                            </li>
                            <li class="list-inline-item">Dashboard</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<section class="p-t-20">
    <div class="container">
        <h1>Data </h1>
        <div class="row">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <h3 class="title-5 m-b-35">data Pembayaran {{ Auth::user()->name }}</h3>
                <div class="table-data__tool">
                    <div class="table-data__tool-left">
                    </div>
                    <div class="table-data__tool-right">
                        <a href="{{ route('dashboard.payment.create') }}"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i>add item</button></a>
                            <a href="{{ route('dashboard.cetak_pdfPembayaran') }}" class="btn btn-primary" target="_blank">CETAK PDF</a>
                        
                    </div>
                </div>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>Hari</th>
                                <th>Jumlah</th>
                                <th>Jenis Pembayaran</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        @foreach ($payments as $payment)
                            <tr>
                                <td>{{  \Carbon\Carbon::parse($payment->created_at)->translatedFormat('l, d F Y'); }}</td>
                                <td>Rp. {{ number_format($payment->sum, 2) }}</td>
                                <td>{{ $payment->category }}</td>
                                <td>{{ $payment->status }}</td>
                            </tr>
                            <tr class="spacer"></tr>
                        </tbody> 
                        @endforeach
                    </table>
                </div>
                <!-- END DATA TABLE -->
            </div>
        </div>
    </div>
</section>
@endsection
