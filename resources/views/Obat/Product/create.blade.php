<div class="page-content">
    @if(session('status'))
    <div class="alert alert-access">
        {{session('status')}}
    </div>
    @endif
</div>
<!-- <form method="POST" action="{{route('Buyers.store')}}"> -->
<form method="POST" action="{{route('Obat.store')}}">

    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Nama obat</label>
        <input type="text" name="nama_obat">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Form obat</label>
        <input type="text" name="form_obat">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Restriction obat</label>
        <input type="text" name="restriction">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Description obat</label>
        <input type="text" name="deskripsi">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Kategori obat</label>
        <select class="form-control" name="kategori_id">
            @foreach( $categori as $data)
            <option value="{{ $data->id }}">{{ $data->nama }}</option>
            @endforeach

        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Faskes 1</label>
        <input type="text" name="faskes1">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Faskes 2</label>
        <input type="text" name="faskes2">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Faskes 3</label>
        <input type="text" name="faskes3">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Image</label>
        <input type="text" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>