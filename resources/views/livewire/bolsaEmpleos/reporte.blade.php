<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Reporte Bolsa de Empleos</title>
  </head>
  <body>
  <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="px-4 py-2">Nombre del Empleo</th>
                        <th class="px-4 py-2">Títulos requeridos</th>
                        <th class="px-4 py-2">Experiencia requerida</th>
                        <th class="px-4 py-2">Vacantes</th>
                        <th class="px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bolsaEmpleos as $bolsaEmpleo)
                        <tr>
                            <td class="border px-4 py-2">{{ $bolsaEmpleo->nombre_empleo }}</td>
                            <td class="border px-4 py-2">{{ $bolsaEmpleo->titulos_empleo }}</td>
                            <td class="border px-4 py-2">{{ $bolsaEmpleo->experiencia_empleo }}</td>
                            <td class="border px-4 py-2">{{ $bolsaEmpleo->vacantes }}</td>
                            <td class="border px-4 py-2 text-center">
                                <button wire:click="editar({{ $empleo->id_empleo }})" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Editar</button>
                                <button wire:click="borrar({{ $empleo->id_empleo }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Borrar</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
  </body>
</html>