<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\CarInfo;
use Illuminate\Http\Request;
use App\Models\CarImage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;


class CarInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carInfos = CarInfo::all();




        return view('carInfo.index', ['carInfos' => $carInfos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carInfo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarRequest $request)
    {
        $validated = $request->validated();

        $carInfo = CarInfo::create($validated);

        if($request->hasFile('images')) {
            foreach($request->file('images') as $image) {
                $filename = $image->store('images', 'public');
                CarImage::create([
                    'car_id' => $carInfo->id,
                    'image' => $filename,
                ]);
            }
        }

        return redirect()->route('carInfo.index');
    }

    public function update(CarRequest $request, CarInfo $carInfo)
    {
        $validated = $request->validated();

        if($request->hasFile('images')) {
            foreach($request->file('images') as $image) {
                $filename = $image->store('images', 'public');
                CarImage::create([
                    'car_id' => $carInfo->id,
                    'image' => $filename,
                ]);
            }
        }

        $carInfo->update($validated);

        return redirect()->route('carInfo.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(CarInfo $carInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarInfo $carInfo)
    {
        return view('carInfo.edit', ['carInfo' => $carInfo]);
    }

    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarInfo $carInfo)
    {
        $carInfo->delete();

        return redirect()->route('carInfo.index');
    }

    public function destroyImage(CarImage $carImage)
    {
        Storage::disk('public')->delete($carImage->image);
        $carImage->delete();
        return back();
    }
}
