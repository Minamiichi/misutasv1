@extends('layouts.landingpage')

@section('content')
   
<!-- Star Faq
============================================= -->
<div class="faq-area default-padding">
    <div class="container">
        <div class="faq-items">
            <div class="row align-center">

                <div class="col-lg-6">
                    <div class="faq-content wow fadeInUp">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h4 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Syarat Dan Ketentuan
                                    </h4>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                            <li>Surat Keterangan Lulus</li>
                                            <li>Ijasah Jenjang Sebelumnya</li>
                                            <li>Kartu Keluarga</    li>
                                            <li>Akte Kelahiran</li>
                                            <li>Scan Rapot</li>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Informasi Pendaftaran
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                            <p>Berkas Yang Harus Disiapkan Untuk Mendaftar</p>
                                            <li>Photocopy Kartu Keluarga</li>
                                            <li>Photocopy Akta Kelahiran</li>
                                            <li>Photocopy Raport Terakhir</li>
                                            <li>Photocopy KIP,PKH (Jika ada)</li>
                                            <li>Photocopy Surat Keterangan Lulus atau Ijazah (Jika sudah ada)</li>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Alur Pendaftaran
                                    </h4>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <li>Daftar Akun</li>
                                        <li>Lengkap Formulir Pendaftaran</li>
                                        <li>Unggah Berkas</li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="thumb wow fadeInLeft" data-wow-delay="0.5s">
                        <img src="/landingPage/assets/img/illustration/171.png" alt="Thumb">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Faq -->  
@endsection