




<table >
   
        <tr>
            <th>Nombre del país</th>
        </tr>
    
   
        @foreach ($paises as $pais)
            <tr>
                <td>{{ $pais->nombre }}</td>
            </tr>

        @endforeach
   
</table>