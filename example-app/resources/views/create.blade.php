


   

    <form action="{{ route('paises.store') }}" method="POST">
       @csrf

        <div>
            <label for="nombre">Nombre del país:</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>

       

        <button type="submit">Guardar</button>
</form>

