@extends('layouts.myapp')
@section('content')
<div class="mx-auto max-w-screen-xl bg-white rounded-md p-6 m-8 ">
    <div class="flex justify-between md:flex-row flex-col ">
        {{-- -------------------------------------------- left -------------------------------------------- --}}
        <div class="md:w-2/3  md:border-r border-gray-800 p-2">

            <h2 class="ms-4 max-w-full font-bike md:text-6xl text-4xl">{{ $bike->brand }} {{ $bike->model }}
                {{ $bike->engine }}
            </h2>

            <div class="flex items-end mt-8 ms-4">
                <h3 class="font-bike text-gray-500 text-2xl">Price:</h3>
                <p>
                    <span id="discounted-price" class="text-3xl font-bold text-pr-400 ms-3 me-1 border border-pr-400 p-2 rounded-md">
                        MAD<!-- Initially, display the placeholder -->
                    </span>
                    <span class="text-lg font-medium text-red-500 line-through">{{ $bike->price_per_hour }} MAD</span>
                </p>
                
            </div>

            <div class="flex items-center justify-around mt-10 me-10">
                <div class="w-1/5 md:w-1/3 h-[0.25px] bg-gray-500 "> </div>
                <p>Order Informations</p>
                <div class="w-1/5 md:w-1/3 h-[0.25px] bg-gray-500 "> </div>

            </div>

            <div class="px-6 md:me-8">
                <form id="reservation_form" action="{{ route('bike.reservationStore', ['bike' => $bike->id]) }}"
                    method="POST">
                    @csrf
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <input type="text" hidden name="user" value="{{ Auth::user()->id }}">

                        <div class="sm:col-span-3">
                            <label for="full-name" class="block text-sm font-medium leading-6 text-gray-900">Full
                                Name</label>
                            <div class="mt-2">
                                <input type="text" name="full-name" id="full-name" value="{{ $user->name }}"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                            </div>
                            @error('name')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="sm:col-span-3">
                            <label for="location" class="block text-sm font-medium leading-6 text-gray-900">Location</label>
                            <div class="mt-2">
                                <select id="location" name="location" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                                    <option value="Rabat Agdal">Rabat Agdal</option>
                                    <option value="Kasbah Oudayas">Kasbah Oudayas</option>
                                    <option value="Avenue Mohammed 5">Avenue Mohammed 5</option>
                                </select>
                            </div>
                            @error('location')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        

                        <div class="sm:col-span-3">
                            <label for="start_date" class="block text-sm font-medium leading-6 text-gray-900">Start at</label>
                            <div class="mt-2">
                                <input type="datetime-local" name="start_date" id="start_date"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                            </div>
                            @error('start_date')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="sm:col-span-3">
                            <label for="end_date" class="block text-sm font-medium leading-6 text-gray-900">End at</label>
                            <div class="mt-2">
                                <input type="datetime-local" name="end_date" id="end_date"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                            </div>
                            @error('end_date')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-12 md:block hidden">
                        <button type="submit"
                            class="text-white bg-pr-400 p-3 w-full rounded-lg font-bold hover:bg-black shadow-xl hover:shadow-none " id="reservation-button">Réserver
                            </button>
                    </div>
                </form>
            </div>

        </div>

        {{-- -------------------------------------------- right -------------------------------------------- --}}

        <div class="md:w-1/3 flex flex-col justify-start items-center">
            <div class="relative mx-3 mt-3 flex h-[200px] w-3/4 overflow-hidden rounded-xl shadow-lg">
                <img loading="lazy" class="h-full w-full object-cover" src="{{ $bike->image }}" alt="product image" />
                <span id="discount-percentage" class="absolute w-24 h-8 py-1 top-0 left-0 m-2 rounded-full bg-pr-400 px-2 text-center text-sm font-medium text-white">
                    % OFF
                </span>
            </div>
            
            <p class="ms-4 max-w-full font-bike text-xl mt-3 md:block hidden">{{ $bike->brand }} {{ $bike->model }}
                {{ $bike->engine }}
            </p>
            <div class="mt-3 ms-4 md:block hidden">
                <div class="flex items-center">
                    @for ($i = 0; $i < $bike->stars; $i++)
                        <svg aria-hidden="true" class="h-4 w-4 text-pr-300" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    @endfor
                    <span class="mr-2 ml-3 rounded bg-pr-300 px-2.5 py-0.5 text-sm font-semibold">{{ $bike->stars }}.0</span>
                </div>
            </div>

            <div class="w-full mt-8 ms-8">
                <p id="duration" class="font-bike text-gray-600 text-lg ms-2">Duration: <span
                        class="mx-2 font-bike text-md font-medium text-gray-700 border border-pr-400 p-2 rounded-md "> X
                        hours</span>
                </p>
            </div>
            <div class="w-full mt-8 ms-8">
                <p id="total-price" class="font-bike text-gray-600 text-lg ms-2">Total Price: <span
                        class="mx-2 font-bike text-md font-medium text-gray-700 border border-pr-400 p-2 rounded-md "> Y
                        MAD</span>
                </p>
            </div>    
            <div class="w-full mt-8 ms-8">
                <p id="quantity" class="font-bike text-gray-600 text-lg ms-2">Quantity: <span
                        class="mx-2 font-bike text-md font-medium text-gray-700 border border-pr-400 p-2 rounded-md "> {{ $bike->quantity }}
                        bikes left</span>
                </p>
            </div>
        </div>
    </div>
</div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
      $('#start_date, #end_date').change(function() {
          var startDate = new Date($('#start_date').val());
          var endDate = new Date($('#end_date').val());
  
          console.log("Start Date:", startDate);
          console.log("End Date:", endDate);
  
          if (startDate && endDate && startDate <= endDate) {
              var duration = Math.ceil((endDate - startDate) / (1000 * 60 * 60));
              var pricePerHour = {{ $bike->price_per_hour }};
              var totalPrice = duration * pricePerHour;
  
              console.log("Duration:", duration);
              console.log("Total Price:", totalPrice);
  
              // Fetch user status from backend or include it in the HTML markup
              var userStatus = "@php echo Auth::check() ? Auth::user()->status : 'guest'; @endphp";
  
              console.log("User Status:", userStatus);
  
              // Apply discount based on user status
              var discountPercentage = 0;
              if (userStatus === 'Student' || userStatus === 'Under18s') {
                  discountPercentage = 30; // Apply 30% discount for students and under 18s
              }
  
              console.log("Discount Percentage:", discountPercentage);
  
              // Calculate discounted total price
              var discountedTotalPrice = totalPrice - (totalPrice * (discountPercentage / 100));
              
              // Calculate discounted price per hour
              var discountedPricePerHour = pricePerHour - (pricePerHour * (discountPercentage / 100));
  
              console.log("Discounted Total Price:", discountedTotalPrice);
              console.log("Discounted Price Per Hour:", discountedPricePerHour);
  
              // Update discount percentage text
              $('#discount-percentage').text(discountPercentage + ' % OFF');
              $('#duration span').text(duration + ' hours');
              $('#total-price span').text(discountedTotalPrice.toFixed(2) + ' MAD');
              $('#discounted-price').text(discountedPricePerHour.toFixed(2) + ' MAD'); // Update discounted price per hour
          } else {
              $('#duration span').text('X hours');
              $('#total-price span').text('Y MAD');
              $('#discount-percentage').text('0 % OFF'); // Reset discount percentage
              $('#discounted-price').text('0 MAD'); // Reset discounted price per hour
          }
      });
  });
  
  </script>
  


    
    

@endsection