<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Document</title>
</head>

<body>
  <div class="container">
    <h2>Product Table</h2>
    <p>The .table-hover class enables a hover state on table rows:</p>
    <div class="container">
      <div class="row">
      @foreach($data as $d)
        <div class="col-sm-5">

          
          <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
            <div class="col-lg d-none d-lg-block">
              <div class="card">
                <img src="{{asset('images/'.$d->image.'.jpg')}}" style="height:300px ;">
                <div class="card-body">
                  <h5 class="card-title">{{$d -> nama}}</h5>
                  <p class="card-text">
                  {{$d -> description}}
                  </p>
                  <a href="#!" class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach









      



        <!-- <table class="table table-hover">
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

      </tr>
    </thead>
    <tbody>
       @foreach($data as $d)
      <tr>
        <td>{{$d -> id}}</td>
        <td>{{$d -> nama}}</td>

        <td>{{$d -> restriction}}</td>
        <td>{{$d -> description}}</td>
        <td>{{$d -> category_id}}</td>
        <td>{{$d -> faskes1}}</td>
        <td>{{$d -> faskes2}}</td>
        <td>{{$d -> faskes3}}</td>


      </tr>
      @endforeach
    </tbody>
  </table> -->
      </div>

</body>

</html>