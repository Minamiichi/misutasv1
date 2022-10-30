@extends('layouts/siswa')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Tabungan</h1>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('dashboard.saving.store') }}" class="w-full" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-6 mb-3">
                        <label for=""
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nama</label>
                        <input type="text" value="{{ old('name') }}" name="name"
                            class="form-control form-control-user" placeholder="Nama Siswa" id="">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">ID</label>
                        <input class="form-control" value="{{ Auth::user()->id }}" name="user_id" placeholder="User" type="text" readonly>  
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4 mb-3">
                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Tanggal
                            Pembayaran</label>
                        <input type="date" value="{{ old('date') }}" name="date"
                            class="form-control form-control-user" placeholder="Tanggal Pembayaran" id="">
                    </div>
                    <div class="col-sm-4 mb-3">
                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Jumlah Pembayaran</label>
                        <input type="number" value="{{ old('paid') }}" name="paid" onkeyup="findTotal();"
                            class="form-control form-control-user" placeholder="Jumlah Pembayaran" id="paid">
                    </div>
                    <div class="col-sm-4 mb-3">
                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Status</label>
                        <input type="text" value="UNSUCCES" name="status"
                            class="form-control form-control-user" placeholder="Jumlah Pembayaran" id="status" readonly>
                    </div>
                    <div class="col-lg-12">
                        <button class="au-btn au-btn-icon au-btn--blue au-btn--small">
                            <i class="fa fa-save"></i>Save Data
                        </button>
                    </div>
            </form>
        </div>
    </div>

</div>

@endsection
