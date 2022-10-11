@extends('layouts/admin')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Artikel</h1>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('dashboard.blog.store') }}" class="w-full" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-12 mb-3">
                        <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Title</label>
                        <input type="text" value="{{ old('title') }}" name="title" class="form-control form" placeholder="Blog Title" id="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3">
                            <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Body</label>
                            <textarea name="body" class="form-control form" id="">{!! old('body') !!}</textarea>
                    </div>
                    <div class="col-lg-12">
                        <button class="au-btn au-btn-icon au-btn--blue au-btn--small">
                            <i class="fa fa-save"></i>Save Data
                        </button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'body' );
    </script>
</div>
@endsection