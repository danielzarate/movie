<!-- component -->
<section class="container mx-auto p-6 font-mono">
    <div class="w-full flex mb-4 p-2 justify-end">
        <x-jet-button>Create Season</x-jet-button>

    </div>

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
      <div class="w-full overflow-x-auto">
        <table class="w-full">
          <thead>
            <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
              <th class="px-4 py-3">Name</th>
              <th class="px-4 py-3">Episode Number</th>
              <th class="px-4 py-3">Rating</th>
              <th class="px-4 py-3">Public</th>
              <th class="px-4 py-3">Manage</th>
            </tr>
          </thead>
          <tbody class="bg-white">
            @foreach ( $seasons as $season )

                <tr class="text-gray-700">
                    <td class="px-4 py-3 border">
                    <div class="flex items-center text-sm">
                        {{$season->name}}
                    </div>
                    </td>
                    <td class="px-4 py-3 text-ms font-semibold border"></td>
                    <td class="px-4 py-3 text-xs border"></td>
                    <td class="px-4 py-3 text-sm border">	</td>
                    <td class="px-4 py-3 text-sm border">Edit / Delete</td>
                </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </section>
