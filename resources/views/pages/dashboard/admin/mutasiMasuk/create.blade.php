@extends('layouts/admin')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Kelas</h1>
    </div>
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Earnings (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Earnings (Annual)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tasks Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Kelas</h6>
                </div>
                <div class="card-body">
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            @if ($errors->any())
                                <div class="mb-5" roles="alert">
                                    <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                                        There's something wrong!
                                    </div>
                                    <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                        <p>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </p>
                                    </div>
                                </div>
                            @endif
                            <form action="{{ route('dashboard.inmutation.store') }}" class="w-full" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">No Surat</label>
                                        <input type="text" value="{{ old('reference') }}" name="reference" class="form-control form-control-user" placeholder="No Surat" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Tanggal Masuk</label>
                                        <input type="date" value="{{ old('entry') }}" name="entry" class="form-control form-control-user" placeholder="Tanggal Masuk" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">NISN</label>
                                        <input type="text" value="{{ old('nisn') }}" name="nisn" class="form-control form-control-user" placeholder="NISN" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nama</label>
                                        <input type="text" value="{{ old('name') }}" name="name" class="form-control form-control-user" placeholder="Nama" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Tanggal Lahir</label>
                                        <input type="date" value="{{ old('birthdate') }}" name="birthdate" class="form-control form-control-user" placeholder="Tanggal Masuk" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Jenis Kelamin</label>
                                        <input type="text" value="{{ old('gender') }}" name="gender" class="form-control form-control-user" placeholder="Jenis Kelamin" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Asal Sekolah</label>
                                        <input type="text" value="{{ old('school') }}" name="school" class="form-control form-control-user" placeholder="Asal Sekolah" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Jenis Pendaftaran</label>
                                        <input type="text" value="{{ old('category') }}" name="category" class="form-control form-control-user" placeholder="Jenis Pendaftaran" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Alamat</label>
                                        <input type="text" value="{{ old('address') }}" name="address" class="form-control form-control-user" placeholder="Alamat" id="">
                                    </div>
                                </div>  
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-primary">
                                        Save Class
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
