@vite(['resources/js/app.js'])
<form method="POST" action="{{ route('admin/proveïdors/update',$proveidors->id) }}" role="form" enctype="multipart/form-data">
 
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
 
    @include('admin.proveïdors.frm.prt')
                                                                            
</form>