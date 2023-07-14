<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>

<body>

  <title>Reporte de Usuarios</title>


  <table class="table-fixed w-full">
    <thead>
      <tr class="bg-indigo-600 text-white">
        <th class="px-4 py-2">Teléfono</th>
        <th class="px-4 py-2">Email</th>
        <th class="px-4 py-2">Dirección</th>
        <th class="px-4 py-2">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($contactos as $contacto)
      <tr>
        <td class="border px-4 py-2">{{ $contacto->tel_contac }}</td>
        <td class="border px-4 py-2">{{ $contacto->email_contact }}</td>
        <td class="border px-4 py-2">{{ $contacto->direccion_contact }}</td>
        <td class="border px-4 py-2 text-center">
          <button wire:click="editar({{ $contacto->id_contac }})"
            class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Editar</button>
          <button wire:click="borrar({{ $contacto->id_contac }})"
            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Borrar</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>