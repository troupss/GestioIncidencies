@vite(['resources/js/app.js'])
<form method="POST" action="{{ route('admin/incidencies/update',$incidencies->id) }}" role="form" enctype="multipart/form-data">
 
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
 
    @include('admin.incidencies.frm.prt')
                                                                            
</form>