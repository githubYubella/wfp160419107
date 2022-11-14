<div class="page-content">
    @if(session('status'))
    <div class="alert alert-access">
        {{session('status')}}
    </div>
    @endif
</div>
<!-- <form method="POST" action="{{route('Buyers.store')}}"> -->
<form method="POST" action="{{url('Transaction')}}">
    
@csrf
    <div class="form-group">
        <label for="">User</label>
      <select name="user" id="">
        @foreach ($user as $u)
        <option value="{{$u->id}}">{{$u->names}}</option>
        @endforeach
      </select> <br>
        

        <label for="">Buyer</label>
      <select name="pembeli" id="">
        @foreach ($buyer as $b)
        <option value="{{$b->id}}">{{$b->name}}</option>
        @endforeach
      </select><br>

      
      
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    
</form>