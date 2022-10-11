@extends('layouts/admin')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Mutasi Masuk</h1>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('dashboard.inmutation.store') }}" class="w-full" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-12 mb-3">
                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">No
                            Surat</label>
                        <input type="text" value="{{ old('reference') }}" name="reference"
                            class="form-control form-control-user" placeholder="No Surat" id="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3">
                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Tanggal
                            Masuk</label>
                        <input type="date" value="{{ old('entry') }}" name="entry"
                            class="form-control form-control-user" placeholder="Tanggal Masuk" id="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3">
                        <label for=""
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">NISN</label>
                        <input type="text" value="{{ old('nisn') }}" name="nisn"
                            class="form-control form-control-user" placeholder="NISN" id="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3">
                        <label for=""
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nama</label>
                        <input type="text" value="{{ old('name') }}" name="name"
                            class="form-control form-control-user" placeholder="Nama" id="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3">
                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Tanggal
                            Lahir</label>
                        <input type="date" value="{{ old('birthdate') }}" name="birthdate"
                            class="form-control form-control-user" placeholder="Tanggal Masuk" id="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3">
                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Jenis
                            Kelamin</label>
                        <input type="text" value="{{ old('gender') }}" name="gender"
                            class="form-control form-control-user" placeholder="Jenis Kelamin" id="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3">
                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Asal
                            Sekolah</label>
                        <input type="text" value="{{ old('school') }}" name="school"
                            class="form-control form-control-user" placeholder="Asal Sekolah" id="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3">
                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Jenis
                            Pendaftaran</label>
                        <input type="text" value="{{ old('category') }}" name="category"
                            class="form-control form-control-user" placeholder="Jenis Pendaftaran" id="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3">
                        <label for=""
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Alamat</label>
                        <input type="text" value="{{ old('address') }}" name="address"
                            class="form-control form-control-user" placeholder="Alamat" id="">
                    </div>
                    <div class="col-lg-12">
                        <button class="au-btn au-btn-icon au-btn--blue au-btn--small">
                            <i class="fa fa-save"></i>Save Data
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
