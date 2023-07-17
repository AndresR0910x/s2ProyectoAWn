<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Reporte de Usuarios</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
    margin-top: 20px;
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

  .text-center {
    text-align: center;
  }
  </style>
</head>

<body>
  <h1>Reporte de Usuarios</h1>

  <table>
    <thead>
      <tr>
        <th>Teléfono</th>
        <th>Email</th>
        <th>Dirección</th>
      </tr>
    </thead>
    <tbody>
      @foreach($contactos as $contacto)
      <tr>
        <td>{{ $contacto->tel_contac }}</td>
        <td>{{ $contacto->email_contact }}</td>
        <td>{{ $contacto->direccion_contact }}</td>

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