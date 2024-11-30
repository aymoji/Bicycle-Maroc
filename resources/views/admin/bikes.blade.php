@extends('layouts.myapp')
@section('content')
    <div class="my-20 flex flex-col justify-center  items-center mx-auto max-w-screen-xl">
        <a href="{{ route('bikes.create') }}">
            <button class="mb-6 bg-pr-400 p-2 text-white drop-shadow-lg hover:bg-pr-600 hover:cursor-pointer rounded-md ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8 inline">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Add New bike

            </button>
        </a>
        <div class=" relative overflow-x-auto shadow-md sm:rounded-lg w-full  ">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mx-2">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Image
                        </th>
                        <th scope="col" class="px-6 py-3">
                            brand
                        </th>
                        <th scope="col" class="px-6 py-3">
                            model
                        </th>
                        <th scope="col" class="px-6 py-3">
                            price_per_hour
                        </th>
                        <th scope="col" class="px-6 py-3">
                            quantity
                        </th>
                        <th scope="col" class="px-6 py-3">
                            reserved
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bikes as $bike)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="p-0.5 rounded-md border-2 border-pr-400 ">

                                    <img loading="lazy" src="{{  $bike->image }}" alt="bike image">
                                </div>

                            </td>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $bike->brand }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $bike->model }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $bike->price_per_hour }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $bike->quantity }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $bike->status }}
                            </td>
                            <td class="flex my-4 py-3  px-6  space-x-3 ">
                                <a href="{{ route('bikes.edit', ['bike' => $bike->id]) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <form action="{{ route('bikes.destroy', ['bike' => $bike->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
    <div class="flex justify-center mb-12 w-full">
        {{ $bikes->links('pagination::tailwind') }}
    </div>
@endsection
