<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bike;

class BikeSearchController extends Controller
{
    public function search(Request $request)
    {
        // Parse prices to int
        $minPrice = intval($request->min_price);
        $maxPrice = intval($request->max_price);

        // Prepare the base query to select Bikes
        $query = Bike::query();

        // Check if the 'brand' input is provided and add the filter to the query
        if ($request->filled('brand')) {
            $query->where('brand', 'like', '%' . $request->brand . '%');
        }

        // Check if the 'model' input is provided and add the filter to the query
        if ($request->filled('model')) {
            $query->where('model', 'like', '%' . $request->model . '%');
        }

        // Check if the 'min_price' input is provided and add the filter to the query
        if ($request->filled('min_price')) {
            $minPrice = is_numeric($request->min_price) ? $request->min_price : 0;
            $query->where('price_per_hour', '>=', $minPrice);
        }

        // Check if the 'max_price' input is provided and add the filter to the query
        if ($request->filled('max_price')) {
            $maxPrice = is_numeric($request->max_price) ? $request->max_price : PHP_INT_MAX;
            $query->where('price_per_hour', '<=', $maxPrice);
        }

        // Add the 'status' filter to only show available Bikes
        $query->where('status', '=', 'available');

        // Execute the query and paginate the results
        $Bikes = $query->paginate(9);

        // Include any additional query parameters in the pagination links
        $Bikes->appends($request->except('page'));


        return view('Bikes.searchedBikes', compact('Bikes'));
    }
}
