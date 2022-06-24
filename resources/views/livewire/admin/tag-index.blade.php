<!-- component -->
<section class="container mx-auto p-6 font-mono">
    <div class="w-full flex mb-4 p-2 justify-end">
        <x-jet-button wire:click="$set('showTagModal',true)">Create Tag</x-jet-button>

    </div>

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
      <div class="w-full overflow-x-auto">
        <table class="w-full">
          <thead>
            <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
              <th class="px-4 py-3">Name</th>
              <th class="px-4 py-3">Date</th>
              <th class="px-4 py-3">Rating</th>
              <th class="px-4 py-3">Public</th>
              <th class="px-4 py-3">Manage</th>
            </tr>
          </thead>
          <tbody class="bg-white">
            @foreach ( $tags as $tag )

                <tr class="text-gray-700">
                    <td class="px-4 py-3 border">
                    <div class="flex items-center text-sm">
                        {{$tag->tag_name}}
                    </div>
                    </td>
                    <td class="px-4 py-3 text-ms font-semibold border">{{$movie->release_date}}</td>
                    <td class="px-4 py-3 text-xs border">{{$movie->rating}}</td>
                    <td class="px-4 py-3 text-sm border">{{$movie->public}}	</td>
                    <td class="px-4 py-3 text-sm border">Edit / Delete</td>
                </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>




    <x-jet-dialog-modal wire:model="showTagModal">
        <x-slot name="title">
            Create Tag
        </x-slot>

        <x-slot name="content">
            Contenido
        </x-slot>

        <x-slot name="footer">
            <x-jet-button wire:click="$set('showTagModal',false)">Cerrar</x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>

</section>
