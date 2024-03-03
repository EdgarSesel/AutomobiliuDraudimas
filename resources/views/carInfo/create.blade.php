@extends('layouts.app')

@section('content')
    <div class="container">
        <div class = 'row'>
            <div class ='col-md-12'>
                <div class ='card'>
                    <div class ='card-header'>Prideti nauja automobilio informacija</div>
                    <div class ='card-body'>
                        <form method="post" action="{{route('carInfo.store')}}">
                            @csrf
                            <div class ='mb-3'>
                                <label>Registration Number:</label>
                                <input type ='text' class ='form-control' name="reg_number">
                            </div>
                            <div class ='mb-3'>
                                <label>Brand:</label>
                                <input type ='text' class ='form-control' name="brand">
                            </div>
                            <div class ='mb-3'>
                                <label>Model:</label>
                                <input type ='text' class ='form-control' name="model">
                            </div>
                            <div class ='mb-3'>
                                <label>Owner ID:</label>
                                <input type ='number' class ='form-control' name="owner_id">
                            </div>
                            <button class ='btn btn-success'>Prideti</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
