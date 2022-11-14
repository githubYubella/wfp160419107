<div class="page-content">
    @if(session('status'))
    <div class="alert alert-access">
        {{session('status')}}
    </div>
    @endif
</div>
<!-- <form method="POST" action="{{route('Buyers.store')}}"> -->
<form method="POST" action="{{route('Categories.store')}}">
    
@csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Kategori obat</label>
        <input type="text" name="nama_kategori">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    
</form>