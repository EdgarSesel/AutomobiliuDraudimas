<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\CarInfo;
use Illuminate\Http\Request;

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

        CarInfo::create($validated);

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
    public function update(CarRequest $request, CarInfo $carInfo)
    {
        // The incoming request is valid...

        // Retrieve the validated input data...
        $validated = $request->validated();

        $carInfo->update($validated);

        return redirect()->route('carInfo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarInfo $carInfo)
    {
        $carInfo->delete();

        return redirect()->route('carInfo.index');
    }
}
