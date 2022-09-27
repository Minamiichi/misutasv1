@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables Kelas</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Kelas</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="75%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kelas</th>
                            <th>Tingkat</th>
                            <th>Action</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Kelas</th>
                            <th>Tingkat</th>
                            <th>Action</th>
                            <th>Details</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($payments as $payment)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $payment->no_pembayaran }}</td>
                                <td>{{ $payment->student->name }}</td>
                                <td>{{ $payment->sum }}</td>
                                <td><button class="btn btn-primary">
                                    <a href="" class="text-white">
                                        {{ __('Edit Kelas') }}
                                    </a>
                                </button></td>
                                {{-- <td>
                                    <button class="btn btn-primary">
                                        <a href="{{ route('dashboard.room.show', $room->id) }}" class="text-white">
                                            {{ __('Lihat Siswa') }}
                                        </a>
                                    </button>
                                </td>                             --}}
                            </tr>
                            @endforeach
                    </tbody>
                </table>
                <button class="btn btn-primary">
                    <a href="{{ route('dashboard.payment.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                        + Create Class
                    </a>
                </button>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection