@extends('layouts.app')

@section("content")
    <div class="container">
        <div  class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Vardas</th>
                                <th>Pavardė</th>
                                <th>Telefonas</th>
                                <th>El. paštas</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cars as $car)
                                <tr>
                                    <td>{{ $car->name }}</td>
                                    <td>{{ $car->surname }}</td>
                                    <td>{{ $car->phone }}</td>
                                    <td>{{ $car->email}}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('car.edit', $car->id) }}">Redaguoti</a>
                                        <a class="btn btn-danger" href="{{ route('car.delete', $car->id) }}">Ištrinti</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
