<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">


      <a href="{{ route('contactos.report') }}"
        class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded mt-2 mb-2">Reporte</a>

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
          <td class="border px-4 py-2">{{ $contacto->tel_contac }}</td>
          <td class="border px-4 py-2">{{ $contacto->email_contact }}</td>
          <td class="border px-4 py-2">{{ $contacto->direccion_contact }}</td>
          <td class="border px-4 py-2 text-center">
          </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>