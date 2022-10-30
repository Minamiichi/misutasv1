@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables Siswa</h1>
    <p class="mb-4">Siswa Kelas {{ $room->id }}</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Siswa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table border="1" class="table table-bordered" id="dataTable" width="75%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Tempat Tanggal Lahir</th>
                            <th>Kelas</th> 
                        </tr>    
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student->nisn }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->born_place }}, {{ $student->birthdate }}</td>
                                <td>{{ $student->room->name }}</td>                   
                            </tr>
                            @endforeach
                    </tbody>
                   
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
