@extends('layout.conquer')

@section('konten')


<head>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<Table>
    <th>
        <tr>
            <td>ID</td>
            <td>Pembeli</td>
            <td>Kasir</td>
            <td>Tanggal Transaksi</td>
        </tr>

    </th>
    @foreach ($data as $d)
    <tr>
        <td> {{$d->id}} </td>
        <td> {{$d->Buyers->name}} </td>
        <td> {{$d->Users->names}} </td>
        <td> {{$d->transaction_date}} </td>
        <td>
            <a class="btn btn-default" data-toggle="modal" href="#disclaimer"

            onclick="getDetailData({{$d->id}})">
            Lihat Rincian Pembelian
            </a>
        </td>


    </tr>
    @endforeach
</Table>
<div class="modal fade in" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Modal Title</h4>
      </div>
      <div class="modal-body" id="msg">
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
    function getDetailData(id) {
        $.ajax({
            type: 'POST',
            url: '{{route("Transaction.showAjax")}}',
            data: '_token= <?php echo csrf_token() ?> &id=' + id,
            success: function(data) {
                $("#msg").html(data.msg);
            }
        });
    }
</script>
@endsection
