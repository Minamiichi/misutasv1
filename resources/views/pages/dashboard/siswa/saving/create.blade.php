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
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">NISN</label>
                        <select name="student_id" id="nisn" class="form-control form-control-user">
                            <option value="">Select NISN</option>
                            <option value="">---------------</option>
                            @foreach($students as $student)
                                <option value="{{ $student->id }}">{{ $student->nisn }}</option>
                            @endforeach
                        </select>
                        <input type="hidden" value="secret" name="invisible" class="form-control form-control-user"
                            placeholder="Tanggal Lahir" id="">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">NISN</label>
                        <input class="form-control" value="{{ Auth::user()->id }}" name="user_id" placeholder="User" type="text" readonly>  
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3">
                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Tanggal
                            Pembayaran</label>
                        <input type="date" value="{{ old('date') }}" name="date"
                            class="form-control form-control-user" placeholder="Tanggal Pembayaran Pembayaran" id="">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for=""
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Hari</label>
                        <select name="day" id="day" class="form-control form-control-user">
                            <option value="">Hari Pembayaran</option>
                            <option value="">---------------</option>

                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jum'at">Jum'at</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3">
                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Jumlah Pembayaran</label>
                        <input type="number" value="{{ old('paid') }}" name="paid" onkeyup="findTotal();"
                            class="form-control form-control-user" placeholder="Jumlah Pembayaran" id="paid">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Total Tabungan</label>
                        <input type="number" value="{{ old('sum') }}" name="sum" onkeyup="findTotal();"
                            class="form-control form-control-user" placeholder="Jumlah Pembayaran" id="sum" readonly>
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

<script>
    function findTotal(){
		var arr = document.getElementsByName('paid');
		var tot=0;
		for(var i=0;i<arr.length;i++){
			if(parseInt(arr[i].value))
				tot += parseInt(arr[i].value);
		}
		document.getElementById('sum').value = tot;
	};
   document.addEventListener("DOMContentLoaded", function(event) {
       findTotal();
    });
</script>


@endsection
