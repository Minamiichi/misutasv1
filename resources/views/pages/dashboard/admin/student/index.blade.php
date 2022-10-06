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
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Tempat Tanggal Lahir</th>
                        <th>Kelas</th>
                        <th></th>
                    </tr>
                </thead>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->nisn }}</td>
                        <td>{{ $student->nis }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->born_place }}, {{ $student->birthdate }}</td>
                        <td>{{ $student->room->name }}</td>
                        <td>
                            <div class="table-data-feature">
                                <a href="{{ route('dashboard.student.edit', $student->id) }}"><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button></a>
                                <form class="inline" action= {{ route('dashboard.student.destroy', $student->id)  }} method="POST">
                                    @csrf
                                    @method('delete')
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                                </form>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                    <i class="zmdi zmdi-more"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="spacer"></tr>
                </tbody> 
                @endforeach
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>
@endsection
