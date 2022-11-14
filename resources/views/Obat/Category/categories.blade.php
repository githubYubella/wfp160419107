@extends('layout.conquer')

@section('konten')

<div class="container">
        <h2>Category Tables</h2>
        <p>The .table-hover class enables a hover state on table rows:</p>
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Nama</th>
            </tr>
            @foreach($data as $d)
            <tr>
                <td>{{$d -> id}}</td>
                <td>{{$d -> nama}}</td>


            </tr>
            @endforeach
        </table>
    </div>
@endsection