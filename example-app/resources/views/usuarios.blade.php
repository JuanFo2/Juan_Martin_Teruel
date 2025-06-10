
    <table border = 7>
        @foreach ($usuarios as $usuario)
        <tr>
            <td> {{$usuario["nombre"]}} </td>
            <td> {{$usuario["apellido"]}} </td>
        </tr>
        @endforeach
    </table>

