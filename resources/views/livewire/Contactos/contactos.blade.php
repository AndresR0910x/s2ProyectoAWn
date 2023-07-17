<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
      <div class="my-3">
        <a href="/admin" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4">
          Ir al Dashboard
        </a>
      </div>
      <button wire:click="crear()"
        class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3">Nuevo</button>
      @if($modal)
      @include('livewire.contactos.crear-contactos')
      @endif





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
          <tr wire:key="contacto-{{ $contacto->id_contac }}">
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
    </div>
  </div>
</div>