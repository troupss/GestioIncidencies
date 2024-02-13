@vite(['resources/js/app.js'])

<div class="d-flex justify-content-center align-items-start" style="min-height: 100vh; margin-top: 10vh;">
    <form method="POST" action="{{ route('admin/proveïdors/store') }}" role="form" enctype="multipart/form-data" class="col-md-6">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
        @include('admin.proveïdors.frm.prt')
    </form>
</div>