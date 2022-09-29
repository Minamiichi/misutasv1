@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Mutasi Keluar</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the </p>

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Mutasi Masuk</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $inmutation }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Mutasi Keluar</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $outmutation }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Alumni</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table border="1" class="table table-bordered" id="dataTable" width="75%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>No Surat</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Tanggal Keluar</th>
                            <th>Alasan Keluar</th>
                            <th>Aksi</th>    
                        </tr>    
                    </thead>
                    <tbody>
                        @foreach ($outmutations as $outmutation)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $outmutation->reference }}</td>
                                <td>{{ $outmutation->student->nisn }}</td>
                                <td>{{ $outmutation->student->name }}</td>
                                <td>{{ $outmutation->out }}</td>
                                <td>{{ $outmutation->reason }}</td>
                                <td><a href="{{ route('dashboard.outmutation.edit', $outmutation->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                                    + Create Class
                                </a>
                                <form class="inline" action= {{ route('dashboard.outmutation.destroy', $outmutation->id)  }} method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="bg-red-500 text-black rounded-md px-2 py-1 m-2">Delete</button>
                                </form></td>                            
                            </tr>
                            @endforeach
                    </tbody>
                   
                </table>
                <button class="btn btn-primary">
                    <a href="{{ route('dashboard.outmutation.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                        + Create Data
                    </a>
                </button>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
