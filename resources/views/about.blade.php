<x-layout>
    <x-slot:titles>{{ $title }}</x-slot>
    <h3 class="text-xl">Ini Adalah Halaman About</h3>
    <h3>Owner : {{ $name }}</h3>
    <img class="" src="{{ asset('img/AppMutasi-ERD.png') }}" alt="ERD App Mutasi">
    <img class="" src="{{ asset('img/AppMutasi-Business Process_v3.png') }}" alt="ERD App Mutasi">
</x-layout>
