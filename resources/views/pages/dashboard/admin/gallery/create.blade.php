@extends('layouts/admin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Gambar</h1>
</div>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form action="{{ route('dashboard.blog.gallery.store', $blog->id) }}" class="w-full" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <div class="col-sm-12 mb-3">
                    <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Gambar</label>
                    <input type="file" multiple name="files[]" accept="image/*" class="form form-control" placeholder="Photos" id="">
                </div>
            </div>
            <input type="hidden" value="secret" name="invisible" class="form-control form-control-user" placeholder="Tanggal Lahir" id="">
                                    
            <div class="form-group row">
                <div class="col-sm-12 mb-3">
                    <button class="au-btn au-btn-icon au-btn--blue au-btn--small">
                        <i class="fa fa-save"></i>Save Data
                    </button>
                </div>
            </div>
        </form>
       </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description' );
</script>
@endsection