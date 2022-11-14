<div class="page-content">
    @if(session('status'))
    <div class="alert alert-access">
        {{session('status')}}
    </div>
    @endif
</div>
<form method="POST" action="{{route('Buyers.store')}}">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" name="name">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Address</label>
        <input type="text" name="address">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <select class="form-control" name="kategori_id">
        @foreach( $categori as $data)
        <option value="{{ $data->id }}">{{ $data->nama }}</option>
        @endforeach
     
    </select>
</form>