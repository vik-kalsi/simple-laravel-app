<x-layout>


    <x-slot:title>
        About
    </x-slot>


    <h1 class="font-bold text-4xl">This is an About Page</h1>


    <div class="border-2 mt-6 w-2xl p-3">
        <p class="mb-4">{{ "My name is " . $firstName . " " . $surname }}</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis pariatur qui voluptas tenetur voluptates ullam labore!</p>
    </div>

</x-layout>