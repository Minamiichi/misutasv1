@if ($message = Session::get('success'))
<div class="sufee-alert alert with-close alert-primary alert-dismissible fade show au-alert--70per">
    <span class="badge badge-pill badge-primary">Success</span>
    {{ $message }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show au-alert--70per">
            <span class="badge badge-pill badge-danger">Error</span>
            {{ $error }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div><br>
    @endforeach
@endif
