@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables Alumni</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Alumni</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table border="1" class="table table-bordered" id="dataTable" width="75%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>No Ijazah</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Tanggal Lulus</th>
                            <th>Aksi</th>    
                        </tr>    
                    </thead>
                    <tbody>
                        @foreach ($alumnus as $alumni)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $alumni->no_ijazah }}</td>
                                <td>{{ $alumni->student->nisn }}</td>
                                <td>{{ $alumni->student->name }}</td>
                                <td>{{ $alumni->graduate }}</td>
                                <td>Edit</td>                            
                            </tr>
                            @endforeach
                    </tbody>
                   
                </table>
                <button class="btn btn-primary">
                    <a href="{{ route('dashboard.alumni.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                        + Create Class
                    </a>
                </button>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
