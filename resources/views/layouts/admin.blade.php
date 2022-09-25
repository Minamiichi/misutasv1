<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin PPDB</title>

    <!-- Custom fonts for this template-->
    <link href="{{ url('/admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('/admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Dashboard Admin<sup></sup></div>
            </a>
            <div id="sidebar-menu">
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard Admin</span></a>
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Kelembagaan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="sbmenu/kelembagaan/profil-lembaga.html">Profil Lembaga</a>
                        <a class="collapse-item" href="{{ route('dashboard.user.index') }}">Data Pengguna</a>
                        <a class="collapse-item" href="sbmenu/kelembagaan/data-guru.html">Data Guru</a>
                        <a class="collapse-item" href="sbmenu/kelembagaan/data-jurusan.html">Data Jurusan</a>
                    </div>
                </div>
            </li> --}}

            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAkademik"
                    aria-expanded="true" aria-controls="collapseAkademik">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Akademik</span>
                </a>
                <div id="collapseAkademik" class="collapse" aria-labelledby="headingAkademik"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="sbmenu/akademik/mutasi-masuk.html">Mutasi Masuk</a>
                        <a class="collapse-item" href="sbmenu/akademik/mutasi-keluar.html">Mutasi Keluar</a>
                        <a class="collapse-item" href="sbmenu/akademik/kelulusan.html">Kelulusan</a>
                    </div>
                </div>
            </li> --}}

            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdministrasi"
                    aria-expanded="true" aria-controls="collapseAdministrasi">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Administrasi</span>
                </a>
                <div id="collapseAdministrasi" class="collapse" aria-labelledby="headingAdministrasi" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item " href="sbmenu/administrasi/buku-induk.html">Buku Induk</a>
                        <a class="collapse-item " href="sbmenu/administrasi/kartu-pelajar.html">Kartu Pelajar</a>
                        <a class="collapse-item " href="sbmenu/administrasi/cetak-data.html">Cetak Data</a>
                    </div>
                </div>
            </li> --}}

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSiswa"
                    aria-expanded="true" aria-controls="collapseSiswa">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Siswa </span>
                </a>
                <div id="collapseSiswa" class="collapse" aria-labelledby="headingSiswa" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item " href="{{ route('dashboard.student.index') }}">Semua Siswa</a>
                        <a class="collapse-item" href="{{ route('dashboard.room.index') }}">Data Kelas</a>
                        {{-- <a class="collapse-item " href="sbmenu/dataSiswa/belum-masuk-kelas.html">Belum Masuk Kelas</a>
                        <a class="collapse-item " href="sbmenu/dataSiswa/1-abu-bakar.html">1-Abu Bakar</a>
                        <a class="collapse-item " href="sbmenu/dataSiswa/2-kh-zaenal-mustofa.html">2-KH.Zaenal Mustofa</a> 
                        <a class="collapse-item " href="sbmenu/dataSiswa/3-kh-ahmad-dahlah.html">3-KH.Ahmad Dahlan</a>
                        <a class="collapse-item " href="sbmenu/dataSiswa/4-usman-bin-affan.html">4-Usman Bin Affan</a>
                        <a class="collapse-item " href="sbmenu/dataSiswa/5-dewi-sartika.html">5-Dewi Sartika</a>
                        <a class="collapse-item " href="sbmenu/dataSiswa/6-ra-kartini.html">6-RA Kartini</a> --}}
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAlumni"
                    aria-expanded="true" aria-controls="collapseAlumni">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Data Alumni</span>
                </a>
                <div id="collapseAlumni" class="collapse" aria-labelledby="headingAlumni"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('dashboard.alumni.index') }}">Home</a>
                        {{-- <a class="collapse-item" href="sbmenu/dataAlumni/data-table.html">Data Table</a> --}}
                    </div>
                </div>
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePpdb"
                    aria-expanded="true" aria-controls="collapsePpdb">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Data PPDB</span>
                </a>
                <div id="collapsePpdb" class="collapse" aria-labelledby="headingPpdb"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="sbmenu/dataPPDB/beranda.html">Beranda</a>
                        <a class="collapse-item" href="sbmenu/dataPPDB/semua-pendaftar.html">Semua Pendaftar</a>
                        <a class="collapse-item" href="sbmenu/dataPPDB/pendaftar-diterima.html">Pendaftar Diterima</a>
                    </div>
                </div>
            </li> --}}
    </div>


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            @include('components.admin.navbar')
            <!-- Main Content -->
            <div id="content">


                @yield('content')
                            
                
            </div>
            <!-- End of Main Content -->
            @include('components.admin.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('/admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('/admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('/admin/js/sb-admin-2.min.js') }}"></script>

</body>

</html>