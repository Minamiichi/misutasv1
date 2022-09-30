@extends('layouts/admin')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
       <div>
        @if ($errors->any())
            <div class="mb-5" roles="alert">
                <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                    There's something wrong!
                </div>
                <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                    <p>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </p>
                </div>
            </div>
        @endif
        <form action="{{ route('dashboard.blog.gallery.store', $blog->id) }}" class="w-full" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-wrap mx-3 mb-6">
                <div class="w-full px-3">
                    <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Name</label>
                    <input type="file" multiple name="files[]" accept="image/*" class="form form-control" placeholder="Photos" id="">
                </div>
            </div>
            <input type="hidden" value="secret" name="invisible" class="form-control form-control-user" placeholder="Tanggal Lahir" id="">
                                    
            <div class="flex flex-wrap mx-3 mb-6">
                <div class="w-full px-3">
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                        Save Product
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