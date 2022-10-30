@extends('layouts.siswa')

@section('content')
 <!-- BREADCRUMB-->
 <section class="au-breadcrumb2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="au-breadcrumb-content">
                    <div class="au-breadcrumb-left">
                        <span class="au-breadcrumb-span">You are here:</span>
                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                            <li class="list-inline-item active">
                                <a href="#">Home</a>
                            </li>
                            <li class="list-inline-item seprate">
                                <span>/</span>
                            </li>
                            <li class="list-inline-item">Dashboard</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END BREADCRUMB-->

<!-- WELCOME-->
<section class="welcome p-t-10">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title-4">Welcome back 
                    <span>{{ Auth::user()->name }}!</span>
                </h1>
                <hr class="line-seprate">
            </div>
        </div>
    </div>
</section>
<!-- END WELCOME-->

<!-- STATISTIC CHART-->
<section class="statistic-chart">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">Informasi PPDB</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <!-- CHART-->
                <div class="card">
                    <img class="card-img-top" src="{{ url('/admin/images/snk.png') }}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title mb-3">Syarat Dan Ketentuan</h4>
                        <li>Surat Keterangan Lulus</li>
                        <li>Ijasah Jenjang Sebelumnya</li>
                        <li>Kartu Keluarga</    li>
                        <li>Akte Kelahiran</li>
                        <li>Scan Rapot</li>
                    </div>
                </div>
                <!-- END CHART-->
            </div>
            <div class="col-md-6 col-lg-4">
                <!-- TOP CAMPAIGN-->
                <div class="card">
                    <img class="card-img-top" src="{{ url('/admin/images/informasi.png') }}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title mb-3">Berkas Yang Diperlukan</h4>
                    <li>Photocopy Kartu Keluarga</li>
                    <li>Photocopy Akta Kelahiran</li>
                    <li>Photocopy Raport Terakhir</li>
                    <li>Photocopy KIP,PKH (Jika ada)</li>
                    <li>Photocopy Ijazah (Jika sudah ada)</li>
                    </div>
                </div>
                <!-- END TOP CAMPAIGN-->
            </div>
            <div class="col-md-6 col-lg-4">
                <!-- CHART PERCENT-->
                <div class="card">
                    <img class="card-img-top" src="{{ url('/admin/images/alur.png') }}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title mb-3">Alur Pendaftaram</h4>
                    <li>Daftar Akun</li>
                    <li>Lengkap Formulir Pendaftaran</li>
                    <li>Unggah Berkas</li>
                    </div>
                </div>
                <!-- END CHART PERCENT-->
            </div>
        </div>
    </div>
</section>
<!-- END STATISTIC CHART-->
@endsection