@extends('layouts/admin')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">DATA</h1>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h2 class="m-0 font-weight-bold text-primary">Tambah Siswa</h2>
                </div>
                <div class="card-body">
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-12 lg:px-8">
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
                            <form action="{{ route('dashboard.student.update', $student->id) }}" class="w-full" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">NISN</label>
                                        <input type="text" value="{{ old('nisn') ?? $student->nisn }}" name="nisn" class="form-control form-control-user" placeholder="NISN" id="">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">NIS</label>
                                        <input type="text" value="{{ old('nis') ?? $student->nis }}" name="nis" class="form-control form-control-user" placeholder="NIS" id="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nama Siswa</label>
                                        <input type="text" value="{{ old('name') ?? $student->name }}" name="name" class="form-control form-control-user" placeholder="Nama Siswa" id="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Tempat Lahir</label>
                                        <input type="text" value="{{ old('born_place') ?? $student->born_place }}" name="born_place" class="form-control form-control-user" placeholder="Tempat Lahir" id="">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Tanggal Lahir</label>
                                        <input type="date" value="{{ old('birthdate') ?? $student->birthdate }}" name="birthdate" class="form-control form-control-user" placeholder="Tanggal Lahir" id="">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Jenis Kelamin</label>
                                        <input type="text" value="{{ old('gender') ?? $student->gender }}" name="gender" class="form-control form-control-user" placeholder="Jenis Kelamin" id="">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Agama</label>
                                        <input type="text" value="{{ old('religion') ?? $student->religion }}" name="religion" class="form-control form-control-user" placeholder="Agama" id="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Status dalam Keluarga</label>
                                        <input type="text" value="{{ old('status') ?? $student->status }}" name="status" class="form-control form-control-user" placeholder="Status dalam Keluarga" id="">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Anak Ke-</label>
                                        <input type="text" value="{{ old('siblings') ?? $student->siblings }}" name="siblings" class="form-control form-control-user" placeholder="Anak Ke-" id="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Alamat</label>
                                        <input type="text" value="{{ old('address') ?? $student->address }}" name="address" class="form-control form-control-user" placeholder="Alamat" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">No Telepon</label>
                                        <input type="text" value="{{ old('phone_number') ?? $student->phone_number }}" name="phone_number" class="form-control form-control-user" placeholder="No Telepon" id="">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Sekolah Asal</label>
                                        <input type="text" value="{{ old('school') ?? $student->school }}" name="school" class="form-control form-control-user" placeholder="Sekolah Asal" id="">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Tanggal diterima</label>
                                        <input type="date" value="{{ old('accepted_date') ?? $student->accepted_date }}" name="accepted_date" class="form-control form-control-user" placeholder="Tanggal diterima" id="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nama Ayah</label>
                                        <input type="text" value="{{ old('father') ?? $student->father }}" name="father" class="form-control form-control-user" placeholder="Nama Ayah" id="">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nama Ibu</label>
                                        <input type="text" value="{{ old('mother') ?? $student->mother }}" name="mother" class="form-control form-control-user" placeholder="Nama Ibu" id="">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Pekerjaan Ayah</label>
                                        <input type="text" value="{{ old('father_jobs') ?? $student->father_jobs }}" name="father_jobs" class="form-control form-control-user" placeholder="Pekerjaan Ayah" id="">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Pekerjaan Ibu</label>
                                        <input type="text" value="{{ old('mother_jobs') ?? $student->mother_jobs }}" name="mother_jobs" class="form-control form-control-user" placeholder="Pekerjaan Ibu" id="">
                                    </div>
                                </div>
                               
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nama Wali</label>
                                        <input type="text" value="{{ old('caregiver') ?? $student->caregiver }}" name="caregiver" class="form-control form-control-user" placeholder="Nama Wali" id="">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Pekerjaan Wali</label>
                                        <input type="text" value="{{ old('caregiver_jobs') ?? $student->caregiver_jobs }}" name="caregiver_jobs" class="form-control form-control-user" placeholder="Pekerjaan Wali" id="">
                                    </div>
                                </div>
                            
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Alamat Wali</label>
                                        <input type="text" value="{{ old('caregiver_address') ?? $student->caregiver_address }}" name="caregiver_address" class="form-control form-control-user" placeholder="Alamat Wali" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Photo</label>
                                        <input type="file" value="{{ old('url') ?? $student->url }}" name="url" class="form-control form-control-user" placeholder="Photo" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3">
                                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Kelas</label>
                                        <select name="room_id" id="" class="form-control form-control-user">
                                            <option value="{{ old(' $student->room->id') ?? $student->room->id }}">{{ $student->room->name }}</option>
                                            <option value="">---------------</option>
                                            @foreach ($rooms as $room)
                                                <option value="{{ $room->id }}">{{ $room->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="flex flex-wrap mx-3 mb-6">
                                        <div class="w-full px-3">
                                            <input type="hidden" value="secret" name="invisible" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Tanggal Lahir" id="">
                                        </div>
                                    </div>
                                </div>
                                    <button type="submit" class="btn btn-primary">
                                        Save Siswa
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
