<!-- component -->
<div>
    <section class="container mx-auto p-6 font-mono">
        <div class="w-full flex mb-4 p-2 justify-end">
            <x-jet-button wire:click="$set('open',true)">Create Movie</x-jet-button>

        </div>

        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                    <th class="px-4 py-3">Title</th>
                    <th class="px-4 py-3">Date</th>
                    <th class="px-4 py-3">Rating</th>
                    <th class="px-4 py-3">Public</th>
                    <th class="px-4 py-3">Manage</th>
                </tr>
                </thead>
                <tbody class="bg-white">
                @foreach ( $movies as $movie )

                    <tr class="text-gray-700">
                        <td class="px-4 py-3 border">
                        <div class="flex items-center text-sm">
                            {{$movie->title}}
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
    </section>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Crear Nueva Pelicula
        </x-slot>

        <x-slot name="content">


        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open',false)">Cancelar </x-jet-secondary-button>
            <x-jet-danger-button class="disabled:opacity-25"> Crear Post</x-jet-danger-button>



        </x-slot>

    </x-jet-dialog-modal>

</div>
