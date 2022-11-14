<div class="page-content">
    @if(session('status'))
    <div class="alert alert-access">
        {{session('status')}}
    </div>
    @endif
</div>
<!-- <form method="POST" action="{{route('Buyers.store')}}"> -->
<form method="POST" action="{{route('simpan_produk_transaksi')}}">

    @csrf
    
    <div class="form-group">
        <label for="exampleInputEmail1">Nama obat</label>
        <select class="form-control" name="produk">
            @foreach( $produk as $p)
            <option value="{{ $p->id }}">{{ $p->nama }}</option>
            @endforeach

        </select> 
        
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Transaksi ID</label>
        <select class="form-control" name="transaksi">
            @foreach( $transaksi as $t)
            <option value="{{ $t->id }}">{{ $t->id }}</option>
            @endforeach

        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Quantity</label>
        <input type="number" name="quantity">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Price</label>
        <input type="number" name="price">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>