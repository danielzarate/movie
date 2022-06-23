<x-admin-layout>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <x-welcome :users="$users" :movies="$movies" :series="$series" :casts="$casts" />
        </div>
    </div>


</x-admin-layout>
