<Table >
    Role
        <th>
            <tr>
                <td>ID</td>
                <td>Role</td>



             
            </tr>

        </th>
        @foreach ($data as $d)
        <tr>
            <td> {{$d->id}} </td>
            <td> {{$d->nama}} </td>
        </tr>
        @endforeach
    </Table>