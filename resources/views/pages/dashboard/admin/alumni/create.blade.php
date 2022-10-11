@extends('layouts/admin')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Alumni</h1>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('dashboard.alumni.store') }}" class="w-full" method="POST"
                enctype="multipart/form-data">
                @csrf
                
                <div class="form-group row">
                    <div class="col-sm-6 mb-3">
                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">No
                            Ijazah</label>
                        <input type="text" value="{{ old('no_ijazah') }}" name="no_ijazah"
                            class="form-control form-control-user" placeholder="No Ijazah" id="">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Tanggal
                            Lulus</label>
                        <input type="date" value="{{ old('graduate') }}" name="graduate"
                            class="form-control form-control-user" placeholder="Tanggal Lulus" id="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3">
                        <label for=""
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">NISN</label>
                        <input type="text" value="{{ old('nisn') }}" name="nisn"
                            class="form-control form-control-user" placeholder="NISN" id="">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for=""
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nama</label>
                        <input type="text" value="{{ old('name') }}" name="name"
                            class="form-control form-control-user" placeholder="Nama" id="">
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
