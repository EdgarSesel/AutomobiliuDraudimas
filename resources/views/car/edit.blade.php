@extends('layouts.app')

@section("content")
    <div class="container">
        <div  class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Redaguojamas  automobilio savininkas
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('car.save', $car->id) }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Vardas:</label>
                                <input type="text" class="form-control" name="name" value="{{ $car->name }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pavardė:</label>
                                <input type="text" class="form-control" name="surname" value="{{ $car->surname }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Telefonas:</label>
                                <input type="text" class="form-control" name="phone" value="{{ $car->phone }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">El. paštas:</label>
                                <input type="email" class="form-control" name="email" value="{{ $car->email }}">
                            </div>
                            <button class="btn btn-success">Pridėti</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
