@extends('layout.conquer')

@section('konten')

<div class="container">
  <h2>Obat Tables</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama </th>
        <th>Form</th>
        <th>Restriction</th>
        <th>Description</th>
        <th>Category ID</th>
        <th>Faskes 1</th>
        <th>Faskes 2</th>
        <th>Faskes 3</th>
        <th>Aksi</th>



      </tr>
    </thead>
    <tbody>
      @foreach($data as $d)
      <tr>
        <td>{{$d -> id}}</td>
        <td>{{$d -> nama}}</td>

        <td>{{$d -> form}}</td>

        <td>{{$d -> restriction}}</td>
        <td>{{$d -> description}}</td>
        <td>{{$d -> category_id}}</td>
        <td>{{$d -> faskes1}}</td>
        <td>{{$d -> faskes2}}</td>
        <td>{{$d -> faskes3}}</td>
        <td> <a class="btn btn-default" data-toggle="modal" href="#disclaimer">Disclaimer</a></td>
        <td>
          <a class="btn btn-default" data-toggle="modal" href="#detail_{{$d->id}}"  data-toggle="modal">{{ $d->nama }}</a>

          <div class="modal fade" id="detail_{{$d->id}}" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">{{$d->nama}}</h4>
                </div>
                <div class="modal-body">
                <img src="{{asset ('images/'.$d->image.'.jpg')}}" height="200px;"  />

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </td>

        <td>
          <a class='btn btn-info' href="{{route('Product.products.showInfo',$d->id)}}"
             data-target="#show{{$d->id}}" data-toggle='modal'>detail</a>        
          <div class="modal fade" id="show{{$d->id}}" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
             <div class="modal-content">
             <img src="{{asset ('images/loading.gif')}}" height="200px;"  />

             </div>
            </div>
          </div>
        </td>




      </tr>
      @endforeach
    </tbody>
  </table>


</div>


<div class="modal fade in" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Modal Title</h4>
      </div>
      <div class="modal-body">
        Modal body goes here
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
@endsection


@section('javascript')
<script>
function showInfo()
{
  $.ajax({
    type:'POST',
    url:'{{route("Product.products.showInfo")}}',
    data:'_token=<?php echo csrf_token() ?>',
    success: function(data){
       $('#showinfo').html(data.msg)
    }
  });
}
</script>
@endsection
