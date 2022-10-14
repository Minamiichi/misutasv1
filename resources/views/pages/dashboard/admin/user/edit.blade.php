@extends('layouts/admin')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Pembayaran</h1>
    </div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if($errors->any())
                <div class="mb-5" roles="alert">
                    <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                        There's something wrong!
                    </div>
                    <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
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
            <form action="{{ route('dashboard.user.update', $user->id) }}"
                class="w-full" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <div class="col-sm-6 mb-3">
                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Username</label>
                        <input type="text"
                            value="{{ old('name') ?? $user->name }}"
                            name="name" class="form-control form-control-user" placeholder="No Pembayaran"
                            id="">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Email</label>
                        <input type="email"
                            value="{{ old('email') ?? $user->email }}"
                            email="email" class="form-control form-control-user" placeholder="No Pembayaran"
                            id="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3">
                        <label for=""
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Roles</label>
                        <select name="roles" id="nisn" class="form-control form-control-user">
                            <option
                                value="{{ old(' $user->roles') ?? $user->roles }}">
                                {{ $user->roles }}</option>
                            <option value="">---------------</option>

                            <option value="ADMIN">ADMIN</option>
                            <option value="USER">USER</option>

                        </select>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for=""
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Status</label>
                        <select name="status" id="nisn" class="form-control form-control-user">
                            <option
                                value="{{ old(' $user->status') ?? $user->status }}">
                                {{ $user->status }}</option>
                            <option value="">---------------</option>

                            <option value="ACTIVE">ACTIVE</option>
                            <option value="INACTIVE">INACTIVE</option>
                        </select>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary">
                            Save Class
                        </button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>

</div>




@endsection
