<?php

namespace App\Http\Controllers;

use App\Models\bike;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bikes = bike::paginate(8);
        return view('admin.bikes', compact('bikes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createbike');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'model' => 'required',
            'quantity' => 'required',
            'price_per_hour' => 'required',
            'discounted_price' => 'required',
            'status' => 'required',
            'stars' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $bike = new bike;
        $bike->model = $request->model;
        $bike->quantity = $request->quantity;
        $bike->price_per_hour = $request->price_per_hour;
        // $bike->insurance_status = $request->insurance_status;
        $bike->status = $request->status;
        $bike->stars = $request->stars;

        if ($request->hasFile('image')) {
            $imageName = $request->brand . '-' . $request->model . '-' . $request->engine . '-' . Str::random(10) . '.' . $request->file('image')->extension();
            $image = $request->file('image');
            $path = $image->storeAs('images/bikes', $imageName);
            $bike->image = '/'.$path;
        }
        $bike->save();

        return redirect()->route('bikes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(bike $bike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bike $bike)
    {
        $bike = bike::findOrFail($bike->id);
        return view('admin.updatebike', compact('bike'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bike $bike)
    {
        $request->validate([
            'model' => 'required',
            'quantity' => 'required',
            'price_per_hour' => 'required',
            'status' => 'required',
            'stars' => 'required',
        ]);

        $bike = bike::findOrFail($bike->id);

        $bike->model = $request->model;
        $bike->quantity = $request->quantity;
        $bike->price_per_hour = $request->price_per_hour;
        $bike->status = $request->status;
        $bike->stars = $request->stars;

        if ($request->hasFile('image')) {

            $filename = basename($bike->image);
            Storage::disk('local')->delete('images/bikes/' . $filename);
            $bike->delete();

            $imageName = $request->brand . '-' . $request->model . '-' . $request->engine . '-' . Str::random(10) . '.' . $request->file('image')->extension();
            $image = $request->file('image');
            $path = $image->storeAs('images/bikes', $imageName);
            $bike->image = $path;
        }
        $bike->save();

        return redirect()->route('bikes.index');
    }

    /** !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! I REMOVED IT SO IF PROBLEM REMOVE COMMENTS
     * Remove the specified resource from storage.
     */
   public function destroy(bike $bike)
   {
        $bike = bike::findOrFail($bike->id);
       if ($bike->image) {
            // Get the filename from the image path
            $filename = basename($bike->image);

            // Delete the image file from the storage
            Storage::disk('local')->delete('images/bikes/' . $filename);
            $bike->delete();
       }



        return redirect()->route('bikes.index');
    }
}