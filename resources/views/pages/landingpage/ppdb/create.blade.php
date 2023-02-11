@extends('layouts.admin')

@section('content')
   
<div id="contact" class="contact-us-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 wow fadeInLeft contact-form">
                <h2><strong>Lengkapi Data Dibawah Ini !</strong></h2>
                <form action="{{ route('dashboard.ppdb.store') }}" class="w-full" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" value="{{ old('nisn') }}" name="nisn" placeholder="NISN" type="text">
                                <span class="alert-error"></span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" value="{{ old('name') }}" name="name" placeholder="NAMA" type="text">
                                <span class="alert-error"></span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" value="{{ old('birthdate') }}" name="birthdate" placeholder="Tanggal Lahir" type="date">
                                <span class="alert-error"></span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" value="{{ old('gender') }}" name="gender" placeholder="Jenis Kelamin" type="text">
                                <span class="alert-error"></span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" value="{{ old('religion') }}" name="religion" placeholder="Agama" type="text">
                                <span class="alert-error"></span>
                            </div>
                        </div>
                        
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Submit') }}
                            </button>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-lg-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>  

@endsection