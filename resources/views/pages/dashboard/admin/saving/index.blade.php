@extends('layouts.admin')

@section('content')
<h1>Data </h1>
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">data tabungan</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-left">
            </div>
            <div class="table-data__tool-right">
                <a href="{{ route('dashboard.saving.create') }}"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>add item</button></a>
                    <a href="{{ route('dashboard.cetak_pdfAdmin') }}" class="btn btn-primary" target="_blank">CETAK PDF</a>
                
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>Nama Siswa</th>
                        <th>Jumlah</th>
                        <th></th>
                    </tr>
                </thead>
                @foreach ($savings as $saving)
                    <tr>
                        <td>{{ $saving->name }}</td>
                        <td>Rp. {{ number_format($saving->paid, 2) }}</td>
                        <td>{{ $saving->status }}</td>
                        <td>
                            <div class="table-data-feature">
                                <a href="{{ route('dashboard.saving.edit', $saving->id) }}"><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button></a>
                                <form class="inline" action= {{ route('dashboard.saving.destroy', $saving->id)  }} method="POST">
                                    @csrf
                                    @method('delete')
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                                </form>
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
