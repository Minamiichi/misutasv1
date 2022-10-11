@extends('layouts/admin')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Mutasi Keluar</h1>
    </div>
    <div class="py-12">
            <form action="{{ route('dashboard.outmutation.store') }}" class="w-full" method="POST"
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
                        <label for=""
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">NISN</label>
                        <select name="student_id" id="nisn" class="form-control form-control-user">
                            <option value="">Select NISN</option>
                            <option value="">---------------</option>
                            @foreach($students as $student)
                                <option value="{{ $student->id }}">{{ $student->nisn }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-12 mb-3">
                        <input type="hidden" value="secret" name="invisible" class="form-control form-control-user"
                            placeholder="Tanggal Lahir" id="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3">
                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Tujuan
                            Sekolah</label>
                        <input type="text" value="{{ old('school') }}" name="school"
                            class="form-control form-control-user" placeholder="Tujuan Sekolah" id="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3">
                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Alasan
                            Keluar</label>
                        <input type="text" value="{{ old('reason') }}" name="reason"
                            class="form-control form-control-user" placeholder="Alasan Keluar" id="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3">
                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Tanggal
                            Keluar</label>
                        <input type="date" value="{{ old('out') }}" name="out"
                            class="form-control form-control-user" placeholder="Tanggal Keluar" id="">
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
