<div class="page-content">
    @if(session('status'))
    <div class="alert alert-access">
        {{session('status')}}
    </div>
    @endif
</div>
<!-- <form method="POST" action="{{route('Buyers.store')}}"> -->
<form method="POST" action="{{route('User.store')}}">

    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" name="nama">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="text" name="email">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Password</label>
        <input type="password" name="password">
    </div>

    
    <button type="submit" class="btn btn-primary">Submit</button>

</form>