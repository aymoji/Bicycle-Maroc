@extends('layouts.myapp')
@section('content')
    

    <div class="mt-6 grid md:grid-cols-3 justify-center items-stretch mx-auto max-w-screen-xl">
        @foreach ($bikes as $bike)
            <div class="m-4 max-w-xs border border-gray-200 flex flex-col">
                <a href="{{ route('bike.reservation', ['bike' => $bike->id]) }}">
                    <img class="w-full h-60 object-cover object-center" src="{{ $bike->image }}" alt="bike image">
                </a>
                <div class="bg-gray-200 p-4 flex-1 flex flex-col justify-between">
                    <div class="text-center">
                        <p class="text-gray-800 text-lg font-extrabold italic">{{ $bike->model }}</p>
                        <div class="flex justify-end mt-2">
                            <div class="bg-black text-yellow-300 font-bold italic rounded-xl py-1 px-2">Prix: {{ $bike->price_per_hour }} MAD/h</div>
                        </div>
                    </div>
                    <div class="px-4 py-2">
                        <p class="text-gray-600">{{ $bike->description }}</p>
                    </div>
                    <a href="{{ route('bike.reservation', ['bike' => $bike->id]) }}"
                        class="block bg-yellow-300 hover:bg-yellow-400 text-black text-center font-extrabold italic py-2 mt-2 rounded-2xl">Réserver</a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="flex justify-center mb-12 w-full">
        {{ $bikes->links('pagination::tailwind') }}
    </div>
@endsection
