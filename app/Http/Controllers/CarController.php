<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:editor', ['only' => ['save', 'delete']]);
    }
    public function create()
    {
        return view('car.create');
    }

    public function store(Request $request)
    {
        $car = new Car();
        $car->name = $request->name;
        $car->surname = $request->surname;
        $car->phone = $request->phone;
        $car->email = $request->email;
        $car->save();
        return redirect()->route('car.index');
    }

    public function index(){

        return view('car.index',
            [
                'cars'=>Car::all()
            ]);
    }

    public function edit($id){
        $car=Car::find($id);
        return view('car.edit',
            [
                'car'=>$car
            ]);
    }

    public function save(Request $request, $id){
        $car=Car::find($id);
        $car->name = $request->name;
        $car->surname = $request->surname;
        $car->phone = $request->phone;
        $car->email = $request->email;
        $car->save();
        return redirect()->route('car.index');
    }

    public function delete($id)
    {
        $car = Car::find($id);

        // Check if there are related car_infos records
        if ($car->carInfo()->exists()) {
            // Redirect back with a warning message
            return redirect()->back()->with('warning', 'Please delete all cars related to car owner in order to delete data');
        }

        // If there are no related car_infos records, delete the car record
        $car->delete();

        return redirect()->route('car.index');
    }
    }
