<x-layout>


    <x-slot:title>
        Services
    </x-slot>


    <h1 class="font-bold text-4xl">This is an Services Page</h1>

    <div class="border-2 mt-6 w-2xl p-3">
        <h1 class="mb-3 font-bold">These are the list of services we provide:</h1>
        
        <ul>
            @foreach ($listOfServices as $listOfService)
                <li>{{ $listOfService }}</li>
            @endforeach
        </ul>
    </div>


</x-layout>