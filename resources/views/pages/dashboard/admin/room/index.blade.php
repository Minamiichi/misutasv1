@extends('layouts.admin')

@section('content')
<h1>Data </h1>
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">data kelas</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-left">
            </div>
            <div class="table-data__tool-right">
                <a href="{{ route('dashboard.room.create') }}"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>add item</button></a>
                
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>Nama Kelas</th>
                        <th>Tingkat</th>
                        <th></th>
                    </tr>
                </thead>
                @foreach ($rooms as $room)
                    <tr>
                        <td>{{ $room->name }}</td>
                        <td>{{ $room->degree }}</td>
                        <td>
                            <div class="table-data-feature">
                                <a href="{{ route('dashboard.room.edit', $room->id) }}"><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button></a>
                                <form class="inline" action= {{ route('dashboard.room.destroy', $room->id)  }} method="POST">
                                    @csrf
                                    @method('delete')
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                                </form>
                                <a href="{{ route('dashboard.room.show', $room->id) }}">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                        <i class="zmdi zmdi-more"></i>
                                    </button></a>
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
