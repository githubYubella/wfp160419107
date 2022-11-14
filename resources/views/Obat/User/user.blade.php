<Table >
        <th>
            <tr>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Email</td>
                <td>Role</td>



             
            </tr>

        </th>
        @foreach ($data as $d)
        <tr>
            <td> {{$d->nama}} </td>
            <td> {{$d->alamat}} </td>
            <td> {{$d->email}} </td>
            
            {{--  @foreach ($d->Roles as $role )
            <td> {{$role->nama}}</td>
            @endforeach  --}}
        </tr>
        @endforeach
    </Table>