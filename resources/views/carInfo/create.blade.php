@extends('layouts.app')

@section('content')
    <div class="container">
        <div class = 'row'>
            <div class ='col-md-12'>
                <div class ='card'>
                    <div class ='card-header'>@lang('messages.add_new_car_info')</div>
                    <div class ='card-body'>
                        <form method="post" action="{{route('carInfo.store')}}">
                            @csrf
                            <div class ='mb-3'>
                                <label>@lang('messages.registration_number'):</label>
                                <input type ='text' class ='form-control' name="reg_number">
                            </div>
                            <div class ='mb-3'>
                                <label>@lang('messages.brand'):</label>
                                <input type ='text' class ='form-control' name="brand">
                            </div>
                            <div class ='mb-3'>
                                <label>@lang('messages.car_model'):</label>
                                <input type ='text' class ='form-control' name="model">
                            </div>
                            <div class ='mb-3'>
                                <label>@lang('messages.owner_id'):</label>
                                <input type ='number' class ='form-control' name="owner_id">
                            </div>
                            <button class ='btn btn-success'>@lang('messages.add')</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
