@extends('layouts.admin')

@section('content')
<h1>Data </h1>
<!-- END STATISTIC-->
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">data siswa</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-left">
            </div>
            <div class="table-data__tool-right">
                <a href="{{ route('dashboard.student.create') }}"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>add item</button></a>
                
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th></th>
                    </tr>
                </thead>
                @foreach($ppdbs as $ppdb)
                    <tr>
                        <td>{{ $ppdb->nisn }}</td>
                        <td>{{ $ppdb->name }}</td>
                        <td>{{ $ppdb->gender }}</td>
                        <td>
                            <a href="{{ route('dashboard.ppdb.pgallery.index', $ppdb->id) }}">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Berkas">
                                    <i class="zmdi zmdi-more"></i>
                                </button></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>
@endsection
