<?php

namespace App\Http\Controllers;

use App\Jobs\UpdateBikeQuantity;
use App\Models\Bike;
use App\Models\Reservation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Jobs\UpdateBikeStatus;
use Illuminate\Support\Facades\DB;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($bike_id)
    {
        $user = auth()->user();
        $bike = Bike::find($bike_id);
        return view('reservation.create', compact('bike', 'user'));
    }

  
    public function store(Request $request, $bike_id)
{
    $request->validate([
        'start_date' => 'required|date',
        'end_date' => 'required|date|after:start_date',
    ]);

    $bike = Bike::find($bike_id);
    $user = User::find($request->user);

    $start = Carbon::parse($request->start_date);
    $end = Carbon::parse($request->end_date);

    $reservation = new Reservation();
    $reservation->user_id = $user->id;
    $reservation->bike_id = $bike->id;
    $reservation->start_hour = $start;
    $reservation->end_hour = $end;
    $reservation->hours = $start->diffInHours($end); // Calculate hours difference
    $reservation->price_per_hour = $bike->price_per_hour;
    $reservation->total_price = $reservation->hours * $reservation->price_per_hour; // Calculate total price based on hours
    $reservation->status = 'Pending';
    $reservation->payment_method = 'At store';
    $reservation->payment_status = 'Pending';
    $reservation->location;
    $reservation->save();

    // Update bike quantity and status
    $bike->quantity -= 1;
    if ($bike->quantity <= 0) {
        // Update quantity to 0 and set status to 'Unavailable' using DB::update
        DB::table('bikes')->where('id', $bike->id)->update(['quantity' => 0, 'status' => 'Unavailable']);
    } else {
        $bike->status = 'Available'; // Set status to 'Available' if quantity is greater than 0
    }
    $bike->save();

    // Schedule the UpdateBikeStatus job
    UpdateBikeStatus::dispatch($bike)->delay($end);

    // Log reservation and job dispatch
    Log::info('Reservation created successfully: ' . $reservation->id);
    Log::info('UpdateBikeStatus job scheduled for bike: ' . $bike->id);

    return view('thankyou',['reservation'=>$reservation] );
}
    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    // Edit and Update Payment status
    public function editPayment(Reservation $reservation)
    {
        $reservation = Reservation::find($reservation->id);
        return view('admin.updatePayment', compact('reservation'));
    }

    public function updatePayment(Reservation $reservation, Request $request)
    {
        $reservation = Reservation::find($reservation->id);
        $reservation->payment_status = $request->payment_status;
        $reservation->save();
        return redirect()->route('adminDashboard');
    }

    // Edit and Update Reservation Status
    public function editStatus(Reservation $reservation)
    {
        $reservation = Reservation::find($reservation->id);
        return view('admin.updateStatus', compact('reservation'));
    }

    public function updateStatus(Reservation $reservation, Request $request)
    {
        $reservation = Reservation::find($reservation->id);
        $reservation->status = $request->status;
        $bike = $reservation->bike;
        if ($request->status == 'Ended' || $request->status == 'Canceled') {
            $bike->status = 'Available';
            $bike->save();
        }
        $reservation->save();
        return redirect()->route('adminDashboard');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Reservation $reservation)
    // {
    //     //
    // }
}