@extends('layouts.siswa')

@section('content')
    <!-- BREADCRUMB-->
    <section class="au-breadcrumb2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                            <span class="au-breadcrumb-span">You are here:</span>
                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                <li class="list-inline-item active">
                                    <a href="#">Home</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Dashboard</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BREADCRUMB-->

    <!-- WELCOME-->
    <section class="welcome p-t-10">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title-4">Welcome back 
                        <span>{{ $user->name }}!</span>
                    </h1>
                    <hr class="line-seprate">
                </div>
            </div>
        </div>
    </section>
    <!-- END WELCOME-->


    <!-- DATA TABLE-->
    <section class="p-t-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-5 m-b-35">data table</h3>
                    <div class="table-data__tool">
                        <div class="table-data__tool-right">
                            <div class="table-data__tool-right">
                                <a href="{{ route('dashboard.ppdb.pgallery.create', $ppdb->id) }}"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-plus"></i>add item</button></a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    <th>URL</th>
                                    <th>Featured</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ppdbGalleries as $ppdbGallery)
                                    <tr>
                                        <td><img src="{{ (Storage::url($ppdbGallery->url)) }}" alt="" title="" height="100px" width="100px" /></td>
                                        <td>{{ $ppdbGallery->is_featured ? 'Yes' : 'No'}}</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <form class="inline" action= {{ route('dashboard.pgallery.destroy', $ppdbGallery->id)  }} method="POST">
                                                    @csrf
                                                    @method('delete')
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                </form>
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Download">
                                                    <a href="{{ Storage::url($ppdbGallery->url) }}" download><i class="zmdi zmdi-more"></i></a>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>
                                </tbody> 
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END DATA TABLE-->
@endsection