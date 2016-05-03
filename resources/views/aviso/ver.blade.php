@foreach($data as $row)
    <table>
    <tr>
        <td><p> Codigo: {{$row->AVI_CODIGO}}</p></td>

        <td><p> Precio: {{$row->AVI_PRECIO}}</p></td>
        
    </tr>
    </table>
@endforeach