<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reservation;


class AdminDashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $clients = User::where('role', 'client')->count();
        $admins = User::where('role', 'admin')->count();
        $bikes = Bike::all();

        $reservations = Reservation::paginate(8);
        $avatars = User::all();
        return view('admin.adminDashboard', compact('clients', 'avatars', 'admins', 'bikes', 'reservations',));
    }
}
