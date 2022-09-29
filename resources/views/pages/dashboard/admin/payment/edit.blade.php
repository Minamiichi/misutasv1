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
                            @if($errors->any())
                                <div class="mb-5" roles="alert">
                                    <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                                        There's something wrong!
                                    </div>
                                    <div
                                        class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                        <p>
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </p>
                                    </div>
                                </div>
                            @endif
                            <form action="{{ route('dashboard.payment.update', $payment->id) }}" class="w-full" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3">
                                        <label for=""
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">No Pembayaran</label>
                                        <input type="text" value="{{ old('no_pembayaran') ?? $payment->no_pembayaran }}" name="no_pembayaran"
                                            class="form-control form-control-user" placeholder="No Pembayaran" id="">
                                    </div>
                                    <div class="col-sm-12 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">NISN</label>
                                        <select name="student_id" id="nisn" class="form-control form-control-user">
                                            <option value="{{ old(' $payment->student->id') ?? $payment->student->id }}"> {{ $payment->student->nisn }}</option>
                                            <option value="">---------------</option>
                                            @foreach ($students as $student)
                                            <option value="{{ $student->id }}">{{ $student->nisn }}</option>
                                            @endforeach
                                        </select>
                                        <input type="hidden" value="secret" name="invisible" class="form-control form-control-user" placeholder="Tanggal Lahir" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3">
                                        <label for=""
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Tanggal Pembayaran</label>
                                        <input type="date" value="{{ old('date') ?? $payment->date }}" name="date"
                                            class="form-control form-control-user" placeholder="Tanggal Pembayaran Pembayaran" id="">
                                    </div>
                                    <div class="col-sm-12 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">NISN</label>
                                        <select name="category" id="nisn" class="form-control form-control-user">
                                            <option value="{{ old(' $payment->category') ?? $payment->category }}">{{ $payment->category }}</option>
                                            <option value="">---------------</option>
                                            
                                            <option value="KAS">KAS</option>
                                            <option value="SPP">SPP</option>
                                    
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3">
                                        <label for=""
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Jumlah Pembayaran</label>
                                        <input type="text" value="{{ old('sum') ?? $payment->sum }}" name="sum"
                                            class="form-control form-control-user" placeholder="Jumlah Pembayaran" id="">
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
