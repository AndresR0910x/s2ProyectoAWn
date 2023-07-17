<!DOCTYPE html>
<html>

<head>
  <title>Listado de eventos</title>
  <!-- Estilos para el reporte -->
  <style>
  body {
    font-family: Arial, sans-serif;
  }

  h1 {
    color: #333;
    text-align: center;
  }

  table {
    width: 100%;
    border-collapse: collapse;
  }

  th,
  td {
    border: 1px solid #ddd;
    padding: 8px;
  }

  th {
    background-color: #3b82f6;
    color: white;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  </style>
</head>

<body>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
        @if(session()->has('message'))
        <!-- Código del mensaje de sesión... -->
        @endif

        <h1>Listado de eventos</h1>
        <table>
          <thead>
            <tr>
              <th>Nombre del Evento</th>
              <th>Descripción</th>
              <th>Lugar</th>
              <th>Fecha</th>
              <th>Hora</th>
            </tr>
          </thead>
          <tbody>
            @foreach($eventos as $evento)
            <tr>
              <td>{{ $evento->nombre_eventos }}</td>
              <td>{{ $evento->descripcion_eventos }}</td>
              <td>{{ $evento->lugar_eventos }}</td>
              <td>{{ $evento->fecha_eventos }}</td>
              <td>{{ $evento->hora_eventos }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>