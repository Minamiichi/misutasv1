@extends('layouts.admin')

@section('content')
<h1>Data </h1>
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">data gallery</h3>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Featured</th>
                        <th></th>
                    </tr>
                </thead>
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
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>
@endsection