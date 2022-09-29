@extends('layouts/admin')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Kelas</h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
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
                            <form action="{{ route('dashboard.inmutation.update', $inmutation->id) }}" class="w-full" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">No Surat</label>
                                        <input type="text" value="{{ old('reference') ?? $inmutation->reference }}" name="reference" class="form-control form-control-user" placeholder="No Surat" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Tanggal Masuk</label>
                                        <input type="date" value="{{ old('entry') ?? $inmutation->entry }}" name="entry" class="form-control form-control-user" placeholder="Tanggal Masuk" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">NISN</label>
                                        <input type="text" value="{{ old('nisn') ?? $inmutation->nisn }}" name="nisn" class="form-control form-control-user" placeholder="NISN" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nama</label>
                                        <input type="text" value="{{ old('name') ?? $inmutation->name }}" name="name" class="form-control form-control-user" placeholder="Nama" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Tanggal Lahir</label>
                                        <input type="date" value="{{ old('birthdate') ?? $inmutation->birthdate }}" name="birthdate" class="form-control form-control-user" placeholder="Tanggal Masuk" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Jenis Kelamin</label>
                                        <input type="text" value="{{ old('gender') ?? $inmutation->gender }}" name="gender" class="form-control form-control-user" placeholder="Jenis Kelamin" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Asal Sekolah</label>
                                        <input type="text" value="{{ old('school') ?? $inmutation->school }}" name="school" class="form-control form-control-user" placeholder="Asal Sekolah" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Jenis Pendaftaran</label>
                                        <input type="text" value="{{ old('category') ?? $inmutation->category }}" name="category" class="form-control form-control-user" placeholder="Jenis Pendaftaran" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Alamat</label>
                                        <input type="text" value="{{ old('address') ?? $inmutation->address }}" name="address" class="form-control form-control-user" placeholder="Alamat" id="">
                                    </div>
                                </div>  
                                <div class="col-lg-12">
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
