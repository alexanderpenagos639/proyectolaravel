<div class="panel-body">
 
    <section class="example mt-4">
 
        <form method="POST" action="{{ route('admin/bicicletas/update',$bicicletas->id) }}" role="form" enctype="multipart/form-data">
 
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
            
            @include('admin.bicicletas.frm.prt')
 
        </form>
 
    </section>
 
</div>