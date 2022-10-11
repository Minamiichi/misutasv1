@extends('layouts.admin')

@section('content')
<h1>Data </h1>
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">data article</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-left">
            </div>
            <div class="table-data__tool-right">
                <a href="{{ route('dashboard.blog.create') }}"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>add item</button></a>
                
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>title</th>
                        <th>description</th>
                        <th></th>
                    </tr>
                </thead>
                @foreach ($blogs as $blog)
                   <tbody>
                    <tr class="tr-shadow">
                        <td>{{ $blog->title }}</td>
                        <td>{!! Str::limit($blog->body, 200) !!}</td>
                        <td>
                            <div class="table-data-feature">
                                <a href="{{ route('dashboard.blog.edit', $blog->id) }}"><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button></a>
                                <form class="inline" action= {{ route('dashboard.blog.destroy', $blog->id)  }} method="POST">
                                    @csrf
                                    @method('delete')
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                                </form>
                                <a href="{{ route('dashboard.blog.gallery.index', $blog->id) }}">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Gallery">
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