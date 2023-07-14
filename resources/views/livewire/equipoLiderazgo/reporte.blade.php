<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Reporte Equipos Liderazgo</title>
  </head>
  <body>
  <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="px-4 py-2">Nombre del Líder</th>
                        <th class="px-4 py-2">Cargo del Líder</th>
                        <th class="px-4 py-2">Experiencia del Líder</th>
                        <th class="px-4 py-2">Descripción del Líder</th>
                        <th class="px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($EquipoLiderazgo as $equipo)
                        <tr>
                            <td class="border px-4 py-2">{{ $equipo->nombre_eL }}</td>
                            <td class="border px-4 py-2">{{ $equipo->cargo_eL }}</td>
                            <td class="border px-4 py-2">{{ $equipo->experiencia_eL }}</td>
                            <td class="border px-4 py-2">{{ $equipo->descripcion_eL }}</td>
                            <td class="border px-4 py-2 text-center">
                                <button wire:click="editar({{ $equipo->id_eL }})" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Editar</button>
                                <button wire:click="borrar({{ $equipo->id_eL }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Borrar</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
  
  </body>
</html>