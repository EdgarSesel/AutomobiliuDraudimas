@extends('layouts.app')

@section('content')
    <div class="container">
        <div class = 'row'>
            <div class ='col-md-12'>
                <div class ='card'>
                    <div class ='card-body'>
                        <a href="{{route('carInfo.create') }}" class="btn btn-info">Prideti nauja automobilio informacija</a>
                        <hr>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Registration Number</th>
                                    <th>Brand</th>
                                    <th>Model</th>
                                    <th>Owner ID</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($carInfos as $carInfo)
                                    <tr>
                                        <td>{{ $carInfo->reg_number }}</td>
                                        <td>{{ $carInfo->brand }}</td>
                                        <td>{{ $carInfo->model }}</td>
                                        <td>{{ $carInfo->owner_id }}</td>
                                        <td>
                                            <a class="btn btn-info" href="{{ route('carInfo.edit', $carInfo->id) }}">Edit</a>
                                        </td>
                                        <td>
                                            <form method="POST" action="{{ route('carInfo.destroy', $carInfo->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
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
