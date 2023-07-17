<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">






      <table class="table-fixed w-full">
        <thead>
          <tr class="bg-indigo-600 text-white">
            <th class="px-4 py-2">Nombre del Servicio</th>
            <th class="px-4 py-2">Curso</th>

          </tr>
        </thead>
        <tbody>
          @foreach($servicios as $servicio)
          <tr>
            <td class="border px-4 py-2">{{ $servicio->nombre_serv }}</td>
            <td class="border px-4 py-2">{{ $servicio->curso->nombre_curso }}</td>
            <td class="border px-4 py-2 text-center">
              <button wire:click="editar({{ $servicio->id_serv }})" cla </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>