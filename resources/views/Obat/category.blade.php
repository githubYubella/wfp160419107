<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
</head>

<body>
    <table>
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

</body>

</html>